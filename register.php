<head>
  <title>Register</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    require('backend/db.php');
    if(isset($_REQUEST['email'])){
      $email = stripslashes($_REQUEST['email']);
      $email = mysqli_real_escape_string($con, $Email);

      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($con, $Passwd);

      $query = "INSERT INTO `USERS` (Email, Passwd) VALUES('$email', '$password')";
      $result = mysqli_query($con, $query);

      if($result){
        echo"<div class='form'>
               <h3>[Reg txt]</h3>
             </div>";
      } else{
        echo "<div class='form'>
                <h3>[Missing info]</h3>
              </div>";
      }
    } else{}
  ?>
  <form class="form" action="" method="post">
    <h1 class="login-title">Registration</h1>
    <input type="text" name="email" placeholder="Email@domain.com" required/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" name="submit" value="Register" id="login-button"/>
  <?php
    }
  ?>
</body>
