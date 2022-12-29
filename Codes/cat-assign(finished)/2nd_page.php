<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>YAHOO!!</title> 
    <link rel="stylesheet" href="styling.css"> <!--CSS file-->
    <link rel="shortcut icon" href="pic/haa.jpg">
   
</head>

<body>
<nav class="banner2nd">
<div class="word">
<h1>Successfully Converted</h1> 



<!--Create a section for guideline-->
<br>
<div class="word">
    <h2><strong>Want to download your text file?</strong></h2>
    
        <li>Click the Download button below.</li>
    
</div>


<br><br>


    
       

        <?php 
            $f = fopen("java/filename.txt",'r');
            $txt_filename = fgets($f);
        ?>
                <!--Defines the path and the file to be downloaded-->
        <a href="java/text/<?php print"$txt_filename"; ?>" download="<?php print"$txt_filename"; ?>">
            <button class="btnd"> <!--Create a download button-->
               
                Download
            </button>
        </a>

    


<br><br>
<a href="Home.html" target="_self">
    <button class="btnb">Back</button>
</a>
</div>
</nav>
</body>

</html>