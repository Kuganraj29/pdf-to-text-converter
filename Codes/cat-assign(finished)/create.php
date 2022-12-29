<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>P_DEXTER</title> <!--Title of the page-->
    <link rel="shortcut icon" href="pic/letter.jpg">
    <link rel="stylesheet" href="styling.css"> <!--CSS file-->
    
</head>

<body>


<?php require 'tools_in_the_page.php' ?> <!--Insert tools_int_the_page.php file-->


<div class="details">
    
        
        <br>Upload your pdf file here<br><br>

        <form action="insert.php" method="post" enctype="multipart/form-data">
            
            <input class="pdf-file" type="file" name="pdf-file" accept="application/pdf" >

            <button class="btns"> 
               Start
            </button>
        </form>
    
</div>


</body>

</html>