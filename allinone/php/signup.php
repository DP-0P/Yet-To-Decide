<?php
session_start();

include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted

  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $Name = $_POST['Name'];


  $RegdNo = $_POST['RegdNo'];


  if (!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($Name) && !is_numeric($Name) && !empty($RegdNo)) {

    //save to database
    $user_id = random_num(20);
    $query = "insert into users (user_id,Name,user_name,RegdNo,password) values ('$user_id','$Name','$user_name','$RegdNo','$password')";

    mysqli_query($con, $query);

    header("Location: login.php");
    die;
  } else {
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPlease enter some valid information!";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="../css/signUp.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <img class="wave" src="../img/wave.png">
  <div class="container">
    <div class="img">
      <img src="../img/bg.svg">
    </div>
    <div class="login-content">
      <form action="" method="post">
        <img src="../img/avatar.svg">
        <h2 class="title">Welcome</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user-friends"></i>
          </div>
          <div class="div">

            <input type="text" class="input" name="Name" placeholder="Name">
          </div>
        </div>

        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>

          <div class="div">

            <input type="text" class="input" name="user_name" placeholder="username">
          </div>
        </div>

        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-hashtag"></i>
          </div>
          <div class="div">

            <input type="text" class="input" name="RegdNo" placeholder="RegdNo">
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">

            <input type="password" class="input" name="password" placeholder="password">
          </div>
        </div>



        <input type="submit" class="btn" value="signup">
        <div class="form-footer">
          Already have an account? <a href="login.php" class="ee">Login</a>
        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="../js/main.js"></script>


  <script src="https://unpkg.com/scrollreveal"></script>

</body>

</html>