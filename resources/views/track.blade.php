<?php 
$track = $_GET['track'];
$folder = '../'.$track;

$files = glob($folder . '/*');
foreach($files as $file){
    //Make sure that this is a file and not a directory.
    if(is_file($file)){
        //Use the unlink function to delete the file.
        unlink($file);
    }
}
 ?>