<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/website.css">
  <title>Verleden van Jelke</title>
</head>

<body>
<div class=header>
  <h1> Toekomst </h1>
</div>
<ul>
  <li>
    <a class="tekst3" href="heden.php">Heden</a>
  </li>
  <li>
    <a class="tekst2" href="verleden.php">Verleden</a>
  </li>
  <li>
    <a class="tekst1" href="website.php">Home</a>
  </li>
  <li><a class="tekst4" href="./prestaties.php">Prestaties</a></li>
</ul>
  <!-- <p>In de toekomst heb ik mijn opleidigen afgerond van Software Developer en zoals het nu lijkt wil ik daarna beginnen 
    met een HBO opleiding. Ik heb wel een paar op het oog maar het is nog te vroeg om te zeggen dat ik al 1 heb gekozen.
    Ook houd mijn contract bij de Albert Heijn op over een half jaar en ik ben niet van plan het te verlengen 
     in de toekomst. </p> -->

 
</body>

</html>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "portfolio";



 $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql_query = ("SELECT tekst FROM portfolio WHERE id = 4");

$statement = $conn->prepare($sql_query);

$statement->execute(array(
    
    
    
    
));
$result = $statement->fetch();
//$result = $result[0];
echo '<div class= "hello">';
 echo $result[0];
  '</div>'
//$result[0] = isset($_POST['result']) ? $_POST['result'] : '';
    ?>
  
