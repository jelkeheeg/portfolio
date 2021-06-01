<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/website.css">
  <title>Jelke zijn webiste.</title>
</head>

<body>

  <div class="header">
    <h1>Website over Jelke</h1>

  </div>
  <div class="nav">
    <ul>
      <li>
        <a class="tekst2" href="heden.html">Heden</a>
      </li>
      <li>
        <a class="tekst1" href="verleden.php">Verleden</a>
      </li>
      <li>
        <a class="tekst3" href="toekomst.html">Toekomst</a>
      </li>
      <li><a class="tekst4" href="./prestaties.html">Prestaties</a></li>
    </ul>
  </div>
  <div class="wrapper">
  <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "portfolio";



 $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql_query = ("SELECT tekst FROM portfolio WHERE id = 1");

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
  


</body>

</html>