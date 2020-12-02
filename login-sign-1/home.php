<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM tables WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | choose option</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    body{
        background-image:url("header-img.jpg");
        color:#fff;
    }
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #07f04d;
        font-family: 'Poppins', sans-serif;
    }
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #07f04d;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h3{
        text-align: center;
        font-size: 50px;
        padding: 5% 8%;
        font-weight: 600;
        color:#fff;
    }
    h4{
        padding: 2% 0;
    }
    .gh{
        text-align: center;
    }
    .ml2 {
  font-weight: 900;
  text-align:center;
  font-size: 3.5em;
}

.ml2 .letter {
  display: inline-block;
  text-align:center;
  line-height: 1em;
}
    </style>

</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">Farmer's Market</a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <h3>Welcome <?php echo $fetch_info['name'] ?></h3>
    <h1 class="ml2">Welcome to Digital Market..!!</h1>
    <script src="popscript.js"charset="utf-8"></script>
  <div class="container">
    <h4 class="abc gh">Please choose your option</h4>
    <div class="row">
      <div class="col-lg-6">
      <h4 class="abc"> Are you a buyer? then click here to direct to the market..!!</h4>
      <a href="../buyer.php"><button type="button" class="btn btn-success">Buyer</button></a>
      </div>
      <div class="col-lg-6">
      <h4 class="abc">Are you a farmer? then click here to direct to digimarket..!!</h4>
      <a href="../farmerpage/farmer.php"><button type="button" class="btn btn-success">Farmer</button></a>
      </div>
    </div>
  </div>
</body>
</html>
