<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mini project</title>
  <script src="https://kit.fontawesome.com/7d8b320508.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <link rel="stylesheet" href="css/buyer.css">
  <link rel="shortcut icon" href="images/farmer.ico" type="image/x-icon">
</head>

<body>
  <section id="header">
    <div class="container-fluid">
      <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <nav class="navbar-brand" href="">Farmer's Market</nav>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html"><i class="fas fa-info-circle"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login-sign-1/login-user.php"><i class="fas fa-sign-in-alt"></i> Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile_edit.html"><i class="fas fa-user-edit"></i> Edit Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cont"><i class="fas fa-address-book"></i> Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="#body">
    <div class="container">
      <h1 class="ml6">
        <span class="text-wrapper">
          <span class="letters cd">Welcome to digital market..!!</span>
        </span>
      </h1>
    <script src="buyerJS.js" charset="utf-8"></script>
      <p class="pa">The Place for what you looking for..!!</p>
      <p class="pa">Buy fresh products near you..!!</p>
      <div class="row">
        <div class="col-lg-4">
          <a href="profile.html"><img src="https://www.flaticon.com/svg/static/icons/svg/3135/3135715.svg" class="img1" alt="profile-img"></a>
          <center>
            <h4 >View Your Profile</h4>
          </center>
        </div>
        <div class="col-lg-4">


        </div>
        <div class="col-lg-4">
          <a href="shopping-cart/index.php"><img src="https://www.flaticon.com/svg/static/icons/svg/2921/2921726.svg" class="img1" alt="vege-img"></a>
          <h4>Products Available</h4>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-4">
            <a href="feedbacks/feedback.php"><img src="https://www.flaticon.com/svg/static/icons/svg/1312/1312202.svg" class="img1" alt="feedback-img"></a>
            <h4 >Give Feedbacks</h4>
        </div>
        <div class="col-lg-4">

      </div>
      <div class="col-lg-4">
        <a href="Reports/report.php"><img src="https://www.flaticon.com/svg/static/icons/svg/2572/2572557.svg" class="img1" alt="feedback-img"></a>
        <h4 >Report Problems</h4>
    </div>
      </div>
    </div>
  </section>
  <section id="cont">
    <div class="container">
      <h3 class="cont-head">Contact Us</h3>
      <div class="row">
        <div class="col-lg-6">
          <p><i class="fas fa-map-marker-alt" class="cont-icon"></i> Headquarters - Coimbatore</p>
          <p><i class="fas fa-phone-alt" class="cont-icon"></i> 8778318778</p>
          <p><i class="fas fa-envelope" class="cont-icon"></i> farmermarket@gmail.com</p>
        </div>
        <div class="col-lg-6">
          <h3>What we do</h3>
          <p>Farmer's Market is e-commerce trading platform for grains & grocerries.</p>
        </div>
    <script src="js/buyerJS.js" charset="utf-8"></script>
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
<script>
  var myLandbot = new LandbotLivechat({
    index: 'https://chats.landbot.io/v2/H-759110-2ST91DQDMXDSHDEO/index.html',
  });
</script>
  <div class="col-lg-4 fgh">
    <h4 class="text-center">Send Messages to your our admin on your business queries</h4>
    <p class="text-center">Welcome to farmer's market mail chat.</p>
    <!-- starting php code -->
    <?php
        //first we leave this input field blank
        $recipient = "";
        //if user click the send button
        if(isset($_POST['send'])){
            //access user entered data
           $recipient = 'rakulcareer6@gmail.com';
           $name = $_POST['name'];
           $number = $_POST['number'];
           $message = $_POST['message'];
           $sender = "From: rakulcareer6@gmail.com";
           //if user leave empty field among one of them
           if(empty($recipient) || empty($number) || empty($name) || empty($message)){
               ?>
               <!-- display an alert message if one of them field is empty -->
                <div class="alert alert-danger text-center">
                    <?php echo "All inputs are required!" ?>
                </div>
               <?php
            }else{
                // PHP function to send mail
               if(mail($recipient, $name, $number, $message, $sender)){
                ?>
                <!-- display a success message if once mail sent sucessfully -->
                <div class="alert alert-success text-center">
                    <?php echo "Your mail successfully sent to our admin"?>
                </div>
               <?php
               $recipient = "";
               }else{
                ?>
                <!-- display an alert message if somehow mail can't be sent -->
                <div class="alert alert-danger text-center">
                    <?php echo "Failed while sending your mail!" ?>
                </div>
               <?php
               }
           }
        }
    ?> <!-- end of php code -->
    <form action="buyer.php" method="POST">
        <div class="form-group">
            <input class="form-control" name="name" type="text" placeholder="Your name" value="<?php echo $recipient ?>">
        </div>
        <div class="form-group">
            <input class="form-control" name="number" type="number" placeholder="Your number">
        </div>
        <div class="form-group">
            <textarea cols="30" rows="5" class="form-control textarea" name="message" placeholder="Compose your message.."></textarea>
        </div>
        <div class="form-group">
            <input class="form-control button btn-success" type="submit" name="send" value="Send" placeholder="number">
        </div>
    </form>
  </div>
  <div class="col-lg-4 ">
  </div>
  <div class="col-lg-4 fgh">
    <h4 class="text-center">View our location live on maps..!!</h4>
    <p class="text-center">Catch us here..!!!</p>
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250646.68136328788!2d76.82714556974862!3d11.012014523817232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1605795147500!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
  </div>
</div>
</div>
  </section>
</body>

</html>
