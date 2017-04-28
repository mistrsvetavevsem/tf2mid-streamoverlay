<head>
      <meta http-equiv="content-type" content="text/html; charset=Windows-1250">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" type="text/css" href="styles.css">
<meta http-equiv="refresh" content="0">
 </head>
<style>
</style>

 <body>

   <div id="scores">
  <font color=white>
    <?php
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
       <br>
<?php
$nom = file_get_contents('numberofmaps.txt');
       if($nom==1)
             {
        $myfile = fopen("m1.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("m1.txt"));
        fclose($myfile);
                 echo " ";
         $myfile = fopen("tym1scorem1.txt", "r") or die("Unable to open file!");
         echo fread($myfile,filesize("tym1scorem1.txt"));
         fclose($myfile);

          echo":";
          $myfile = fopen("tym2scorem1.txt", "r") or die("Unable to open file!");
          echo fread($myfile,filesize("tym2scorem1.txt"));
          fclose($myfile);
        }
        elseif($nom==2)
      {
        $myfile = fopen("m1.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("m1.txt"));
        fclose($myfile);
                 echo " ";
         $myfile = fopen("tym1scorem1.txt", "r") or die("Unable to open file!");
         echo fread($myfile,filesize("tym1scorem1.txt"));
         fclose($myfile);

          echo":";
          $myfile = fopen("tym2scorem1.txt", "r") or die("Unable to open file!");
          echo fread($myfile,filesize("tym2scorem1.txt"));
          fclose($myfile);
          echo "<br>";
          $myfile = fopen("m2.txt", "r") or die("Unable to open file!");
          echo fread($myfile,filesize("m2.txt"));
          fclose($myfile);
                   echo " ";
           $myfile = fopen("tym1scorem2.txt", "r") or die("Unable to open file!");
           echo fread($myfile,filesize("tym1scorem2.txt"));
           fclose($myfile);

            echo":";
            $myfile = fopen("tym2scorem2.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("tym2scorem2.txt"));
            fclose($myfile);

          }
          elseif($nom==3)
          {
            $myfile = fopen("m1.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("m1.txt"));
            fclose($myfile);
                     echo " ";
             $myfile = fopen("tym1scorem1.txt", "r") or die("Unable to open file!");
             echo fread($myfile,filesize("tym1scorem1.txt"));
             fclose($myfile);

              echo":";
              $myfile = fopen("tym2scorem1.txt", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("tym2scorem1.txt"));
              fclose($myfile);
              echo "<br>";
              $myfile = fopen("m2.txt", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("m2.txt"));
              fclose($myfile);
                       echo " ";
               $myfile = fopen("tym1scorem2.txt", "r") or die("Unable to open file!");
               echo fread($myfile,filesize("tym1scorem2.txt"));
               fclose($myfile);

                echo":";
                $myfile = fopen("tym2scorem2.txt", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("tym2scorem2.txt"));
                fclose($myfile);
                echo "<br>";
                $myfile = fopen("m3.txt", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("m3.txt"));
                fclose($myfile);
                         echo " ";
                 $myfile = fopen("tym1scorem3.txt", "r") or die("Unable to open file!");
                 echo fread($myfile,filesize("tym1scorem3.txt"));
                 fclose($myfile);

                  echo":";
                  $myfile = fopen("tym2scorem3.txt", "r") or die("Unable to open file!");
                  echo fread($myfile,filesize("tym2scorem3.txt"));
                  fclose($myfile);

              }
?>

</font>
</div>


 </body>

 </html>
