<?php
$servername = "localhost";
$database = "UserDB";
$username = "user";
$password = "pass";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>

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
  <p>[cleaver tag line]</p>
</body>
