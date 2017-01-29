<?php 
session_start();
/* Modifications made on 18th december 2014 */

$id = session_id();
$target_path = "../data/user_uploads/".$id."/raw/";

$counter = $_POST['counter'];

for($i=1; $i<=$counter; $i++) {
    $samplename = $_POST['samplename'.$i];

    if (!is_dir($target_path)){
        mkdir($target_path, 0777, true);
    }

    $target_pathnew = $target_path . basename( $_FILES['expfile'.$i]['name']); 

    $express = $_FILES['expfile'.$i]['name'];
     if(move_uploaded_file($_FILES['expfile'.$i]['tmp_name'], $target_pathnew)) {
         //echo "The file ".  basename( $_FILES['expfile1']['name']). " has been uploaded";
    } else{
        echo "There was an error uploading the expression file of sample ".$samplename.", please try again!";
    }

    rename ($target_pathnew, $target_path.$samplename."_exp.txt");

    $target_pathnew = $target_path . basename( $_FILES['mutfile'.$i]['name']); 

    $variant = $_FILES['mutfile'.$i]['name'];
    if(move_uploaded_file($_FILES['mutfile'.$i]['tmp_name'], $target_pathnew)) {
        //echo "The file ".  basename( $_FILES['mutfile1']['name']). " has been uploaded";
    } else{
        echo "There was an error uploading the mutation file of sample ".$samplename.", please try again!";
    }

    rename ($target_pathnew, $target_path.$samplename."_var.txt");
    //echo "done";
}
?>
