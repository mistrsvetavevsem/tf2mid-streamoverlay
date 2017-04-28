
 <html lang="cs">

<head>
      <meta http-equiv="content-type" content="text/html; charset=Windows-1250">
     <title>ovládací panel</title>
     <meta name="panel" content="panel">

 </head>

 <body>
   <?php
   $url = 'http://tf2mid.cz/stream/panel.php';
   $kamerafile = 'kamera.txt';
   $komentatorifile = 'komentatori.txt';
   $informacefile = 'informace.txt';
   $casfile = 'cas.txt';

   if (isset($_POST['kamerainput']))
   {
       file_put_contents($kamerafile, $_POST['kamerainput']);
   }
   if (isset($_POST['komentatoriinput']))
   {
       file_put_contents($komentatorifile, $_POST['komentatoriinput']);
   }
   if (isset($_POST['informaceinput']))
   {
       file_put_contents($informacefile, $_POST['informaceinput']);
   }
   if (isset($_POST['casinput']))
   {
       file_put_contents($casfile, $_POST['casinput']);
   }

   $kameratext = file_get_contents($kamerafile);
   $komentatoritext = file_get_contents($komentatorifile);
   $informacetext = file_get_contents($informacefile);
   $castext = file_get_contents($casfile);

   ?>
<table>
<form action="" method="post">
<tr>
<td>Stream data</td>
<tr>
<td>Kameraman</td>
<td>Komentátoři</td>
</tr>
<tr>
<td><textarea name="kamerainput"><?php echo htmlspecialchars($kameratext) ?></textarea></td>
<td><textarea name="komentatoriinput"><?php echo htmlspecialchars($komentatoritext) ?></textarea></td>
<tr>
<td>Informace</td>
<td>Čas</td>
<tr>
<td><textarea name="informaceinput"><?php echo htmlspecialchars($informacetext) ?></textarea></td>
<td><textarea name="casinput"><?php echo htmlspecialchars($castext) ?></textarea></td>
<td>
</tr>
<tr>
<td><input type="submit" /></td>
</tr>
</form>
</table>
<br>

<?php
$url = 'http://tf2mid.cz/stream/panel.php';
$numberofmapsfile = 'numberofmaps.txt';

if (isset($_POST['numberofmapsinput']))
{
    file_put_contents($numberofmapsfile, $_POST['numberofmapsinput']);
}
$numberofmapstext = file_get_contents($numberofmapsfile);
?>

<table>
<form action="" method="post">
<tr>
<td>počet map</td>
<tr>
<td><select name=numberofmapsinput><option>1<option>2<option>3</option><?php echo htmlspecialchars($numberofmapstext) ?></select></td>
<tr>
<td><input type="submit" /></td>
</tr>
</form>
</table>

<br>

<div id="panel1">
<?php
$url = 'http://tf2mid.cz/stream/panel.php';
$tym1jmenofile = 'tym1jmeno.txt';
$tym2jmenofile = 'tym2jmeno.txt';

if (isset($_POST['tym1jmenoinput']))
{
    file_put_contents($tym1jmenofile, $_POST['tym1jmenoinput']);
}
if (isset($_POST['tym2jmenoinput']))
{
    file_put_contents($tym2jmenofile, $_POST['tym2jmenoinput']);
}

$tym1jmenotext = file_get_contents($tym1jmenofile);
$tym2jmenotext = file_get_contents($tym2jmenofile);
?>
</div>
<table>
<form action="" method="post">
<tr><td>Jména</td>
<td>
<td><textarea name="tym1jmenoinput"><?php echo htmlspecialchars($tym1jmenotext) ?></textarea></td>
<td><textarea name="tym2jmenoinput"><?php echo htmlspecialchars($tym2jmenotext) ?></textarea></td>
</tr>
</table>
<input type="submit" /></td>
<?php
$url = 'http://tf2mid.cz/stream/panel.php';
$tym1scorem1file = 'tym1scorem1.txt';
$tym2scorem1file = 'tym2scorem1.txt';
$tym1scorem2file = 'tym1scorem2.txt';
$tym2scorem2file = 'tym2scorem2.txt';
$tym1scorem3file = 'tym1scorem3.txt';
$tym2scorem3file = 'tym2scorem3.txt';
$m1file = 'm1.txt';
$m2file = 'm2.txt';
$m3file = 'm3.txt';

if (isset($_POST['tym1scorem1input']))
{
    file_put_contents($tym1scorem1file, $_POST['tym1scorem1input']);
}
if (isset($_POST['tym2scorem1input']))
{
    file_put_contents($tym2scorem1file, $_POST['tym2scorem1input']);
}
if (isset($_POST['tym1scorem2input']))
{
    file_put_contents($tym1scorem2file, $_POST['tym1scorem2input']);
}
if (isset($_POST['tym2scorem2input']))
{
    file_put_contents($tym2scorem2file, $_POST['tym2scorem2input']);
}
if (isset($_POST['tym1scorem3input']))
{
    file_put_contents($tym1scorem3file, $_POST['tym1scorem3input']);
}
if (isset($_POST['tym2scorem3input']))
{
    file_put_contents($tym2scorem3file, $_POST['tym2scorem3input']);
}
if (isset($_POST['m1input']))
{
    file_put_contents($m1file, $_POST['m1input']);
}
if (isset($_POST['m2input']))
{
    file_put_contents($m2file, $_POST['m2input']);
}
if (isset($_POST['m3input']))
{
    file_put_contents($m3file, $_POST['m3input']);
}

$tym1scorem1text = file_get_contents($tym1scorem1file);
$tym2scorem1text = file_get_contents($tym2scorem1file);
$tym1scorem2text = file_get_contents($tym1scorem2file);
$tym2scorem2text = file_get_contents($tym2scorem2file);
$tym1scorem3text = file_get_contents($tym1scorem3file);
$tym2scorem3text = file_get_contents($tym2scorem3file);
$m1text = file_get_contents($m1file);
$m2text = file_get_contents($m2file);
$m3text = file_get_contents($m3file);
?>
<br>
<table>
<form action="" method="post">
<td>Mapy</td></tr>
<tr><td>mapa 1</td>
<td><textarea name="m1input"><?php echo htmlspecialchars($m1text) ?></textarea></td>
<td><textarea name="tym1scorem1input"><?php echo htmlspecialchars($tym1scorem1text) ?></textarea></td>
<td><textarea name="tym2scorem1input"><?php echo htmlspecialchars($tym2scorem1text) ?></textarea></td>
<tr><td>mapa 2</td>
<td><textarea name="m2input"><?php echo htmlspecialchars($m2text) ?></textarea></td>
<td><textarea name="tym1scorem2input"><?php echo htmlspecialchars($tym1scorem2text) ?></textarea></td>
<td><textarea name="tym2scorem2input"><?php echo htmlspecialchars($tym2scorem2text) ?></textarea></td>
<tr><td>mapa 3</td>
<td><textarea name="m3input"><?php echo htmlspecialchars($m3text) ?></textarea></td>
<td><textarea name="tym1scorem3input"><?php echo htmlspecialchars($tym1scorem3text) ?></textarea></td>
<td><textarea name="tym2scorem3input"><?php echo htmlspecialchars($tym2scorem3text) ?></textarea></td>
<tr><td>
<input type="submit" /></td>
</form>
</table>

</body>
</html>
