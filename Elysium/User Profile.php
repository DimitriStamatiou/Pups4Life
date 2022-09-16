
<?php 
  require_once "db/queryDb.php";

  if (isset($_GET["fName"]) || isset($_GET["lName"]) ||isset($_GET["Adr"]) || isset($_GET["PhoneN"])) {

    $fName = $_GET["fName"];
    $lName = $_GET["lName"];
    $Adr = $_GET["Adr"];
    $PhoneN = $_GET["PhoneN"];
  
    }
  else{
    $fName= null;
    $lName=null;
    $Adr =null;
    $PhoneN=null;

  }
  if ($fName == '') {
  
  }
    else {
    addCustomer($fName, $lName, $Adr, $PhoneN);
  }

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
    <ul id="mainmenu" >
      <li><a href="index.html">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="order.php">Order</a> </li>
      <li><a href="User Profile.php">User Profile</a></li>
      <li><a href="contact.html">Contact</a></li>

    </ul>
    </nav>
    <h3>User Profiles</h3>
    <form id=form action='User Profile.php' method = 'get'  >
        <div class="form1"> <label for="fName">First Name: </label>
        <input type="text" name="fName" id='fName'></div>
        <div class="form1"><label for="lName"> Last Name: </label>
        <input type="text" name="lName" id='lName'> </div>
        <div class="form1"><label for="Adr"> Physical Address: </label>
        <input type="adr" name="Adr" id='Adr'> </div>
        <div class="form1"><label for="PhoneN">Phone Number: </label>
        <input type="tel" name="PhoneN" id='PhoneN'> </div>

        <div class="form1"><input type="submit" value ='Submit'></div>
      </form>

  </body>
</html>