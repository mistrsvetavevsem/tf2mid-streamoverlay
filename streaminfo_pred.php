<head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta http-equiv="refresh" content="5">
 </head>
<style>
</style>
 <body>
   <div id="informace">
<img src=logo.png width=230px style="float: left">
  <br>
  <font color=white>
  Kamera:    <?php
     $myfile = fopen("kamera.txt", "r") or die("Unable to open file!");
     echo fread($myfile,filesize("kamera.txt"));
     fclose($myfile);
     ?>
  <br>
  Komentátoři: <?php
     $myfile = fopen("komentatori.txt", "r") or die("Unable to open file!");
     echo fread($myfile,filesize("komentatori.txt"));
     fclose($myfile);
     ?>
  <br>
  Následuje: <?php
     $myfile = fopen("informace.txt", "r") or die("Unable to open file!");
     echo fread($myfile,filesize("informace.txt"));
     fclose($myfile);
     ?>: <?php
        $myfile = fopen("tym1jmeno.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("tym1jmeno.txt"));
        fclose($myfile);
        ?>
         vs
         <?php
            $myfile = fopen("tym2jmeno.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("tym2jmeno.txt"));
            fclose($myfile);
            ?>
 od
            <?php
               $myfile = fopen("cas.txt", "r") or die("Unable to open file!");
               echo fread($myfile,filesize("cas.txt"));
               fclose($myfile);
               ?>
</font>
</div>


 </body>

 </html>
