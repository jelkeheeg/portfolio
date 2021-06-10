<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "portfolio";





 $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 if (isset($_POST['submit'])) {
 $tekst = $_POST['edit_tekst'];
 $query = "UPDATE portfolio SET tekst = :tekst WHERE id = 4";
 //$query = "INSERT INTO portfolio (tekst) VALUES (id, $tekst) WHERE id = 1";
 
 $statement = $conn->prepare($query);
 
 $statement->execute( 
     array('tekst' => $tekst)
 );

 }

$sql_query = ("SELECT tekst FROM portfolio WHERE id = 4");

$statement = $conn->prepare($sql_query);

$statement->execute(array(
    
    
    
    
));
$result = $statement->fetch();
//$result = $result[0];

// echo $result[0];

//$result[0] = isset($_POST['result']) ? $_POST['result'] : '';
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>CMS Main</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="/portfolio/css/cms.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <h1>toekomst</h1>
    <div class="MainBody">
    <div class="Form">
          <form action="toekomstcms.php" method="POST" id="website_form">
              <!-- <fieldset> -->
              <!-- <legend>Item</legend> -->
                <!-- <label for="edit_tekst">Itemnaam</label> -->
                <textarea type="text" placeholder="Itemnaam"  id="edit_tekst" name="edit_tekst" autofocus><?php echo $result[0]; ?> </textarea>
                <input type="submit" onclick="website_form[1].submit()"  name="submit" value="Commit change.">
          </form>
      </div>
      
      <div class="sidenav">
        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
        <ul class="linkslist">
        <li><a href="cms.php">website</a></li>
        <li><a href="hedencms.php">heden</a></li>
        <li><a href="verledencms.php">verleden</a></li>
        <li><a href="toekomstcms.php">toekomst</a></li>
        <li><a href="prestatiescms.php">prestaties</a></li>
        </ul>
      </div>

      <!-- Use any element to open the sidenav -->
      <!-- <span onclick="openNav()">open</span> -->


    </div>
  </body>
</html>



