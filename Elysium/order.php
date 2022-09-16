<?php 
  require_once "db/queryDb.php";
  if (isset($_GET["productname"])) {
    $search = $_GET["productname"];
  } else {
    $search = '';
  }

  $products = getProducts($search);
  


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
    </ul>
   </nav>


   <form action = "order.php" method="get">
      <div class="Blabel"><label>Enter product name here: </label>
      <input type="text" name="productname" id="productname">
      </div>
      <div class="form3"><input type="submit" value="Search"></div>


   </form>

   <div> 
    <table class ="table">
      <thead>  
        <tr>
          <th>PROID</th>
          <th>PRODUCTNAME</th>
          <th>MANUFACTURER</th>
          <th>DESCRIPTION</th>
          <th>PRICE</th>
          </tr>
      </thead>
        <body>     
        <?php
          foreach ($products as $product){
              
          ?>      
            <tr>
              <td><?=$product["PRODID"]?></td>
              <td><?=$product["PRODUCTNAME"]?></td>
              <td><?=$product["MANUFACTURER"]?></td>
              <td><?=$product["DESCRIPTION"]?></td>
              <td><?=$product["PRICE"]?></td>
                    
                    
            </tr>
          <?php      
            }
          ?>   
        </body>         
      </table>
    </div> 

    <h3>Payments Details</h3>
    <form id=Pform  >
        <div class="form1"> <label for="hName">Card Holder Name: </label>
        <input type="text" name="hName" id='hName'></div>
        <div class="form1"><label for="hNum"> Card Expire Date: </label>
        <input type="text" name="hNum" id='hNum'> </div>
        <div class="form1"><label for="exDate"> Card Expire Date:  </label>
        <input type="Date" name="exDate" id='exDate'> </div>
        <div class="form1"><label for="pNum"> Card Pin Number: </label>
        <input type="text" name="pNum" id='pNum'> </div>

        <div class="form1"><input type="submit" value ='Submit'></div>
      </form>

 </body>    
</html>