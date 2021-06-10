<!DOCTYPE html>
<html>

<head>
  <title>heden van Jelke</title>
</head>
<link rel="stylesheet" type="text/css" href="./website.css" />


</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/website.css">
  <title>Document</title>
</head>


<body>
<div class=header>
  <h1>Heden </h1>
</div>
<ul>
  <li>
    <a class="tekst1" href="website.php">Home</a>
  </li>
  <li>
    <a class="tekst2" href="verleden.php">Verleden</a>
  </li>
  <li>
    <a class="tekst3" href="toekomst.php">Toekomst</a>
  </li>
  <li><a class="tekst4" href="./prestaties.php">Prestaties</a></li>
</ul>
  <!-- <p>Tegenwoordig doe ik een opleiding Software Developer op ROC Friesepoort
      . Ik heb nog niet veel ervaring met coderen dus het is allemaal nog nieuw voor mij, maar ik heb
    het altijd wel interesant gevonden en denk dat als ik even mijn best doe dat het wel moet lukken.
    Ik zit nog steeds op korfbal bij de club KF De Wâlden, ik zit dit jaar in de A1 met 9 andere spelers ik heb het erg
    naar mijn zin. We gaan ook vaak op een zaterdag avond of na trainen even ergens wat drinken met mensen van het
    team of anderen die ik ken via korfbal.
    Ook werk ik in mijn vrije tijd bij de Albert Heijn in Giekerk. Het is vlak bij dus makkelijk om even een paar uurtjes
    per dag te werken. Ik werk hier omdat het een van de enige werk gelegenheden in de buurt is en dit leek me het
    leukst om te werken. Ik werk hier nu al meer dan een jaar.
    Het werk zelf stelt niet heel veel voor maar de colega's zijn erg leuk en zo is het werk leuk te maken. Als ik niet
    werk, naar school ga of sport ben ik vaak aan het gamen op mijn computer of met mijn vrienden of vriendin wat aan het
    doen. Ik hoef me tenminste nooit te vervelen.</p>-->

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

$sql_query = ("SELECT tekst FROM portfolio WHERE id = 3");

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
  
