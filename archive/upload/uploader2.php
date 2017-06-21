<?php 
session_start();
//session_regenerate_id();
$new_sessionid = session_id();
$organism = $_POST['organism'];

error_reporting(E_ERROR | E_PARSE);

switch ($organism)
{
	case 'Human':
        
        $id = $new_sessionid;
        
        // try to save session for browser re-open
        setcookie("mitoviz_user_upload", $id,$expire=time()+60*60*24*30);
        
        include_once "human/uploading.php";
        include_once "human/./database.php";
        
        $error_upload = returnErrorUpload();
        $error_database = array();
        
        if (count($error_upload) > 0){
            break;
        }else{
            $error_database = returnErrorDatabase();
        }

	break;
	case 'Mouse':
		include_once "mouse/mouse_uploading.php";
		include_once "mouse/./mouse_database.php";
		$id = $new_sessionid;
		//header( "Location:upload_mitomap/index.php?id=$new_sessionid");
        
// try to save session for browser re-open
                setcookie("mitoviz_user_upload", $id);

                //header( "Location:../upload.html");
	break;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MitoXplorer - Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/style.css" rel="stylesheet" >
    
    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
    
<body>
  
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">MitoXplorer</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="../index.php"></a>
                    </li>
                    <li>
                        <a href="../index.php#about">About</a>
                    </li>
                    <li>
                        <a href="../index.php#database">Database</a>
                    </li>
                    <li>
                        <a href="../index.php#analysis">Analysis</a>
                    </li>
                    <li>
                        <a href="../index.php#download">Download</a>
                    </li>
                    <li>
                        <a href="../index.php#contact">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
<div class="container">
    
    <div class="jumbotron" id="message-div">
    </div>
        
    </div>     
</body>

<script>
    var error_upload = <?php echo json_encode($error_upload); ?>;
    var error_database = <?php echo json_encode($error_database); ?>;

    var messageDiv = document.getElementById('message-div');


    if (error_upload.length > 0 || error_database.length > 0){
        newdiv = document.createElement('div');
        newdiv.innerHTML = "<h1>Oops...</h1><br>There are some problems with the uploading process. Please check the error messages below.<br><br>";
        messageDiv.appendChild(newdiv);
        
        for (i=0; i<error_upload.length;i++){
            newdiv = document.createElement('div');
            newdiv.innerHTML = "<font color='red'>"+ error_upload[i] +"</font><br>";
            messageDiv.appendChild(newdiv);
        }
        
        for (i=0; i<error_database.length;i++){
            newdiv = document.createElement('div');
            newdiv.innerHTML = "<font color='red'>"+ error_database[i] +"</font><br>";
            messageDiv.appendChild(newdiv);
        }
        
        newdiv = document.createElement('div');
        newdiv.innerHTML = "<br><br><p>Do you wish to go back and do the upload again?<p>";
        messageDiv.appendChild(newdiv);
        
    }else{
        
        newdiv = document.createElement('div');
        newdiv.innerHTML = "<h1>You are done!</h1><br><p>Check your database or go back to upload more samples!<p>";
        messageDiv.appendChild(newdiv);
        
    }
    
    newdiv = document.createElement('div');
    newdiv.innerHTML = "<br><a href='../upload.html'><button type='button' class='btn btn-primary'>Go Back</button></a><a href='../index.php#database'><button type='button' class='btn btn-primary' style='float: right;background-color: #12e2c0;border-color: #12e2c0;'>Check Your Database</button></a>";
    messageDiv.appendChild(newdiv);
    
    

</script>
    
</html>
