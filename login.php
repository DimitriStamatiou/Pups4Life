<head>
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <script src="js/main.js"></script>
</head>
<header>
  <h1>Login</h1>
  <button>Login</button>
  <button>Register</button>
</header>
<body>
  <?php
    require('backend/db.php');
    session_start();

    if(isset($_POST['email'])){
      $email = stripslashes($_REQUEST['email']);
      $email = mysqli_real_escape_string($con, $email);
      $password = stripslashes($_REQUEST['password']);
      $email = mysqli_real_escape_string($con, $password);

      $query = "SELECT * FROM 'USERS' WHERE Email='$email' AND Passwd='$password'";
      $result = mysqli_query($con, $query) or die(mysql_error());
      $rows = mysqli_num_rows($result);
      if($rows == 1){
        $_SESSION['email'] = $email;

        header("Location: puppers.php");
      } else{
        echo "<div class='form'>
                <h3>Incorrect Username/password</h3>
              </div>";
      }
    } else {
  ?>
  <form class="form" method="post" name="login">
    <input type="text" name="email" placeholder="Email@domain.com" autofocus="true"/>
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="login" name="submit"/>
  </form>
  <?php
    }
  ?>
</body>
