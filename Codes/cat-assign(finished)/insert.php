<?php
$target_dir = "java/uploads/"; //tells server to where to put pf pdf file to store
$target_file = $target_dir.basename($_FILES["pdf-file"]["name"]); //The path where the pdf file store
$file_name = basename($_FILES["pdf-file"]["name"]); //the pdf file name is stored 
$file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //Get the extension of file
$uploadOk = 1; //boolean variable

$store_name = fopen("java/filename.txt",'w'); //Open the txt file
fwrite($store_name,$file_name); //To wrire pdf file name in the file
fclose($store_name); //Close txt file

if($_FILES["pdf-file"]["size"] > 2000000){ //the size of the pdf file cannot be larger than 2MB
    echo " OOps!! Your file is too large."; //validation for the if statement above
    $uploadOk = 0;
}

if($file_type != "pdf"){ //If statement for the file to be in pdf format only
    echo "Please ensure that the file is PDF file.";//validation for the above statement
    $uploadOk = 0;
}

if($uploadOk==1) { //If statement to make sure pdf file is uploaded the pdf file into the according folder
    move_uploaded_file($_FILES["pdf-file"]["tmp_name"], $target_file);

   
   
    //calling java library to convert the pdf file that uploaded into the server
    shell_exec("javac -cp java/pdfbox/* java/src/pdf_txt.java");
    shell_exec("java -cp java/pdfbox/* java/src/pdf_txt.java");

    unlink($target_file); 

    header("Location:2nd_page.php"); //Calling for the 2nd page of php file
    exit(); //exit from the current terminal.
}