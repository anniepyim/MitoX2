<?php
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>MitoXplorer</title>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- Vis CSS -->
        <link href='./css/App.css' rel='stylesheet' type='text/css'>
        <link href="./css/style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        
        <link rel="icon" type="image/png" href="img/logos/favicon.png">
        
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
                        <a href="index.php"></a>
                    </li>
                    <li>
                        <a href="index.php#about">About</a>
                    </li>
                    <li>
                        <a href="index.php#database">Database</a>
                    </li>
                    <li>
                        <a href="index.php#analysis">Analysis</a>
                    </li>
                    <li>
                        <a href="index.php#download">Download</a>
                    </li>
                    <li>
                        <a href="index.php#contact">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br>
    </body>
    <!-- App Script  -->
    <script data-my_var_1="<?php echo $id; ?>" data-my_var_2="./data/zzfiles/links.json" src="./js/App.js"></script>
    <script>
        
        
        
        App.init({});
    </script>
</html>
<?php
$id = NULL;
?>