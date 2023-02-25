<?php
$hide="";
session_start();
if(!isset($_SESSION['username'])){
  header("location:login.php");
}else{
 if($_SESSION['role'] == "admin"){
     $hide = "";
 }else{
    $hide = "hide";
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>


    <style>
        :root{
         --blue:#0E86D4;
    --dark-color:#055C9D;
}
body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    color: var(--blue);
    background-image: url(img1.jpg);
  }
  
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th,
  td {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    background-color: var(--blue);
    color: white;
  }
  
  a {
    text-decoration: none;
    color: var(--blue);
    padding-right: 10px;
  }
  
  a:hover {
    color: var(--blue);
    background-color: #ddd;
  }
  
  .hide {
    display: none;
  }
  
  header {
    background-color: var(--blue);
    color: white;
    padding: 10px;
  }
  

  .page-title {
    color: var(--dark-color);
    font-size: 24px;
    margin: 20px 0;
  }
    </style>

    
<h1 class="page-title">Faqja kryesore</h1>
<a href="logout.php">Log out</a>
<a href="../shop/menuDashboard.php" class="<?php echo $hide ?>">Dashboard-i</a>
<a href="../shop/create-menu.php" class="<?php echo $hide ?>">Krijoni</a>
<table>
  <tr>
    <th>Username:</th>
    <td><?php echo $_SESSION['username']; ?></td>
  </tr>
</table>


<?php 
}
?>