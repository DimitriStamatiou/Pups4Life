<?php 
  require_once "db/queryDb.php";
  $customers = getCustomers();

?>



<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
  <title>Monopati Pros Elysium </title>
  <link rel ="stylesheet" href="style.css"/>
   
  </head>


  <body>
  <a href="index.html"><img id = logo1 src="img/Logo1.jpg" alt="Cafe Logo " /></a>
   <h1>Elysium</h1>
   <nav>
    <ul id="mainmenu">
      <li><a href="index.html">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="order.php">Order</a> </li>
      <li><a href="User Profile.php">User Profile</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="Admin.php">Admin</a></li>
    </ul>
  </nav>

  <h2>Admin</h2>

  <div><a href="addproduct.php">addproduct</a></div><br>

    <table class ="table1">
        <thead>  
            <tr>
            <th>CUSTID</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
            </tr>
        </thead>
        <body>     
            <?php
                foreach ($customers as $customer){
            
            ?>      
            <tr>
                    <td><?=$customer["CUSTID"]?></td>
                    <td><?=$customer["FIRSTNAME"]?></td>
                    <td><?=$customer["LASTNAME"]?></td>
                    <td><?=$customer["ADDRESS"]?></td>
                    <td><?=$customer["PHONE"]?></td>
                    
                </tr>
                <?php      
                    }
                ?>   
        </body>         
        </table>
 
    

 </body>
