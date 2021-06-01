<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="css/website.css"> -->
  <!-- <link rel="stylesheet" href="css/website.css?v=<?php echo time(); ?>"> -->
  <title>Jelke zijn webiste.</title>
  <style>
  <?php include "C:/xampp/htdocs/portfolio/css/cms.css" ?>
</style>
</head>

<body>
<div class="nav">
    <ul>
      <li>
        <a class="tekst2" href="heden.html">Heden  </a>
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
$edit_tekst = $statement->fetch();
//$result = $result[0];

echo $edit_tekst[0];

//$result[0] = isset($_POST['result']) ? $_POST['result'] : '';
    ?>
    </body>
    </html>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/Style_sheet.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<html>


<body>
  <form action="verledencms.php" method="POST">
  <form id="verleden_form">
      <!-- <fieldset> -->
      <legend>verleden </legend>

   <label for="verleden">itemnaam</label>
   <input type="text"  id="txt" type="text" height="80px" value="<?php echo $edit_tekst[0]; ?>" name="edit_tekst" id="edit_tekst" required>

  
   
   <input type="button" onclick="verleden_form[1].submit()"  name="submit" value="submit change">
</form>


    </html>




<?php
 $tekst = $_POST['edit_tekst'];
$connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = "UPDATE portfolio SET tekst =:tekst WHERE id = 2";

$statement = $connect->prepare($query);

$statement->execute(array(
  
    'tekst' => $tekst,  
    
)
);
?>

