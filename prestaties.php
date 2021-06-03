<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/website.css">
  <title>Prestaties van Jelke</title>
</head>

<body>
  <div class=header>
    <h1> Prestaties van Jelke </h1>
  </div>
  <div class="nav">
    <ul>
      <li>
        <a class="tekst3" href="heden.php">Heden</a>
      </li>
      <li>
        <a class="tekst2" href="verleden.php">Verleden</a>
      </li>
      <li>
        <a class="tekst4" href="toekomst.php">Toekomst</a>
      </li>
      <li><a class="tekst1" href="website.php">Home</a></li>
    </ul>
   

   <!-- <p> Ik heb nog niet veel prestaties op het gebied van coderen, maar ik heb al veel geleerd over bepaalde talen en denk dat ik er snel goed in word. 
     ik heb wel al sommige dingen gecodeerd maar dat stelde vaak niet heel veel voor. I heb bijvoorbeeld een pagina op een website gemaakt dit hebben we gedaan als eerste school project. 
     dit heb ik gedaan met mijn klasgenoten maar iedereen moest zijn eigen pagina coderen. Verder heb ik op een flappybird gemaakt in een heel simpel programma waar je alleen maar oorzaak gevolg hoefde in te voeren.
     Het laatste dat ik heb gecodeerd is dit portfolio die ik zelf heb ontworpen en en gecodeerd. Ik heb nog niet veel ervaring maar word steeds beter, en begin steeds meer te begrijpen hoe de programma's werken en hoe je dingen kan oplossen.


   </p> -->


  

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

$sql_query = ("SELECT tekst FROM portfolio WHERE id = 5");

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
  
