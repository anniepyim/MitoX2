<?php 
session_start();

error_reporting(E_ERROR | E_PARSE);
function returnErrorUpload(){
    
    $id = session_id();
    $target_path = "../data/user_uploads/".$id."/raw/";
    
    $counter = count($_POST["samplename"]);

    $error_upload = array();
    
    for($i=0; $i<$counter; $i++) {
        $samplename = $_POST['samplename'][$i];

        if (!is_dir($target_path)){
            mkdir($target_path, 0777, true);
        }

        $target_pathnew = $target_path . basename( $_FILES['expfile']['name'][$i]); 

        $express = $_FILES['expfile']['name'][$i];
         if(move_uploaded_file($_FILES['expfile']['tmp_name'][$i], $target_pathnew)) {
             //echo "The file ".  basename( $_FILES['expfile1']['name']). " has been uploaded";
        } else{
            array_push($error_upload,"There was an error uploading the expression file of sample '$samplename', please try again!");
        }

        rename ($target_pathnew, $target_path.$samplename."_exp.txt");

        $target_pathnew = $target_path . basename( $_FILES['mutfile']['name'][$i]); 

        $variant = $_FILES['mutfile']['name'][$i];
        if(move_uploaded_file($_FILES['mutfile']['tmp_name'][$i], $target_pathnew)) {
            //echo "The file ".  basename( $_FILES['mutfile1']['name']). " has been uploaded";
        } else{
            array_push($error_upload,"There was an error uploading the mutation file of sample '$samplename', please try again!");
        }

        rename ($target_pathnew, $target_path.$samplename."_var.txt");
    }
    
    return $error_upload;
}
?>
