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
  <h1> Verleden </h1>
</div>
<ul>
  <li>
    <a class="tekst2" href="heden.html">Heden</a>
  </li>
  <li>
    <a class="tekst1" href="website.php">Home</a>
  </li>
  <li>
    <a class="tekst3" href="toekomst.html">Toekomst</a>
  </li>
  <li><a class="tekst4" href="./prestaties.html">Prestaties</a></li>
</ul>
  <!-- <p>Ik ben 17 jaar geleden geboren in het dorp Oenkerk, het dorp waar ik tot nu toe woon. Ik woon hier met mijn vader 
    en mijn moeder.
    Ik heb ook nog 2 zussen maar die wonen al een tijdje niet meer thuis. Ik korfbal hier ook in het dorp bij de club KF
    De Wâlden.
    Hier speel ik al sinds ik 8 ben en heb het altijd erg naar mijn zin gehad bij deze club.
    Mijn basisschool was OBS De Opstap in Oenkerk. Dit was een leuke school maar ik was wel altijd de enigste jongen in
    mijn klas, dat was wel jammer maar heb me desondanks goed kunnen vermaken.
    Na de basis school ging ik zoals je misschien wel raad naar de middelbare school. Ik ging naar Singelland in Burgem.
    In Burgem kregen we les met Ipads, dat is ook een grote reden dat ik naar die school ging.
    Ik heb de eerste 3 jaar van mijn school HAVO gedaan, maar in het derde jaar van de HAVO ben ik helaas afgestroomd
    naar VMBO 4.
    Na mijn VMBO diploma te hebben gehaald wilde ik nog een keer HAVO proberen. Toen heb ik dus een jaar HAVO gedaan,
    maar ik heb het toen helaas niet gehaald.
    Daarna moest ik een keuze maken tussen nog een jaar HAVO 4 of naar een MBO opleiding. Het leek mij beter een MBO
    opleiding te doen, omdat ik niet veel motivatie meer over had voor de HAVO.
    Nu zit ik op de opleiding Software Developer op <a href="https://www.rocfriesepoort.nl/" target="_blank"> ROC
      Friesepoort.</a></p> -->

 
</body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "portfolio";



 $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql_query = ("SELECT tekst FROM portfolio WHERE id = 2");

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
  
