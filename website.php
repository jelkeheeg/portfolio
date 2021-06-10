<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="/portfolio/css/website.css"> -->
  <style> body {background-image: url('Images\kleurblauw.webp'); }</style>
  <link rel="stylesheet" href="css\website.css">
  <title>Jelke zijn webiste.</title>
  <link rel='icon' href='' type='image/x-icon'/>
</head>

<body>
  <div class="pic">
<img src="Images\jelkeportfolio.jpeg" alt="jelke"  >
</div>
<div class= "sprong">
<img src="Images\jelke spring.jpg" alt="sprong"  >
</div> 




  <div class="header">
    <h1>OVER JELKE_</h1>
  </div>
  <div class="nav">
    <ul>
      <li>
        <a class="tekst2" href="heden.php">Heden</a>
      </li>
      <li>
        <a class="tekst1" href="verleden.php">Verleden</a>
      </li>
      <li>
        <a class="tekst3" href="toekomst.php">Toekomst</a>
      </li>
      <li><a class="tekst4" href="./prestaties.php">Prestaties</a></li>
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