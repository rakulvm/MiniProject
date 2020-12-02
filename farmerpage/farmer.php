<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mini project</title>
  <script src="https://kit.fontawesome.com/7d8b320508.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <link rel="stylesheet" href="farmers.css">
  <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,500&display=swap" rel="stylesheet">
  <link rel="icon" href="farmer.ico">
</head>

<body>
  <section id="header">
    <div class="container">
      <div class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <nav class="navbar-brand" href="">Farmer's Market</nav>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.html"><i class="fas fa-info-circle"></i> Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../profile_edit.html"><i class="fas fa-user-edit"></i> Edit Profile</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../profile.html"><i class="fas fa-user-circle"></i> Profile</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/news1/index.php"><i class="far fa-newspaper"></i> Latest Agro-news</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#cont"><i class="fas fa-address-book"></i> Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <h1 class="ml12">Welcome to your Space..!!</h1>
      <script src="js/farmJS.js" charset="utf-8"></script>
      <h3 class="abc">Upload your products for sale..!!</h3>
          <h4 class="ab">You can post your ads here to sale your products</h4>
          <h4 class="ab">Sell your products at ease.!!</h4>
    <a href="../login-sign-1/login-user.php"><button type="button" class="btn btn-outline-light">Logout</button></a>
    </div>
  </section>
  <section id="body">
    <div class="container-fluid">
<center><h3>Post your advertisement here!</h3></center>
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Crop Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="insertcode.php" method="POST">

            <div class="modal-body">
                <div class="form-group">
                    <label> Crop Name </label>
                    <input type="text" name="cropname" class="form-control" placeholder="Enter crop Name">
                </div>

                <div class="form-group">
                    <label> Your name </label>
                    <input type="text" name="sellername" class="form-control" placeholder="Enter seller Name">
                </div>

                <div class="form-group">
                    <label> Your address </label>
                    <input type="text" name="selleraddress" class="form-control" placeholder="Enter your address">
                </div>

                <div class="form-group">
                    <label> Your E-mail ID </label>
                    <input type="text" name="selleremail" class="form-control" placeholder="Enter E-mail ID">
                </div>

                <div class="form-group">
                  <label> Your Contact number</label>
                  <input type="text" name="sellercontact" class="form-control" placeholder="Enter contact number">
              </div>

                <div class="form-group">
                    <label> Amount per item </label>
                    <input type="text" name="amount" class="form-control" placeholder="Enter amount(In numbers only)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
            </div>
        </form>

    </div>
  </div>
</div>
<!-- ####################################################################################################################### -->
<!-- EDIT POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit your Ad data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="updatecode.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="update_id" id="update_id">

                <div class="form-group">
                    <label> Crop name </label>
                    <input type="text" name="cropname" id="cropname" class="form-control" placeholder="Enter crop name">
                </div>

                <div class="form-group">
                    <label> Seller name </label>
                    <input type="text" name="sellername" id="sellername" class="form-control" placeholder="Enter seller name">
                </div>
                <div class="form-group">
                  <label> Seller address </label>
                  <input type="text" name="selleraddress" id="selleraddress" class="form-control" placeholder="Enter your address">
              </div>

              <div class="form-group">
                <label> Seller E-mail ID </label>
                <input type="text" name="selleremail" id="selleremail" class="form-control" placeholder="Enter your email ">
            </div>
                <div class="form-group">
                    <label> Seller contact </label>
                    <input type="text" name="sellercontact" id="sellercontact" class="form-control" placeholder="Enter your contact">
                </div>

                <div class="form-group">
                    <label> Amount </label>
                    <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter amount(In number only)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- ####################################################################################################################### -->

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="deletecode.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="delete_id" id="delete_id">

                <h4> Do you want to Delete this Data ??</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">  NO </button>
                <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- #################################################################################################### -->



<div class="container">
    <div class="jumbotron">
        <div class="card">
        </div>
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                    Add Crop Data
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'farmerad');

                $query = "SELECT * FROM cropdetails";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table id="datatableid" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col"> ID</th>
                            <th scope="col">Crop name</th>
                            <th scope="col">Seller name </th>
                            <th scope="col"> Seller address </th>
                            <th scope="col"> Seller email </th>
                            <th scope="col"> Seller contact </th>
                            <th scope="col"> Amount </th>
                            <th scope="col"> EDIT </th>
                            <th scope="col"> DELETE </th>
                        </tr>
                    </thead>
            <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['cropname']; ?> </td>
                            <td> <?php echo $row['sellername']; ?> </td>
                            <td> <?php echo $row['selleraddress']; ?> </td>
                            <td> <?php echo $row['selleremail']; ?> </td>
                            <td> <?php echo $row['sellercontact']; ?> </td>
                            <td> <?php echo $row['amount']; ?> </td>
                            <td>
                                <button type="button" class="btn btn-success editbtn"> Edit </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger deletebtn"> Delete </button>
                            </td>
                        </tr>
                    </tbody>
            <?php
                    }
                }
                else
                {
                    echo "No Record Found";
                }
            ?>
                </table>
            </div>
        </div>


    </div>
    <div class="row">
          <div class="col-lg-4">
            <a href="../feedbacks/feedback.php"><img src="https://www.flaticon.com/svg/static/icons/svg/1312/1312202.svg" class="img1" alt="feedback-img"></a>
            <h4 >Give Feedbacks</h4>
        </div>
        <div class="col-lg-4">

      </div>
      <div class="col-lg-4">
        <a href="../Reports/report.php"><img src="https://www.flaticon.com/svg/static/icons/svg/2572/2572557.svg" class="img1" alt="feedback-img"></a>
        <h4 >Report Problems</h4>
    </div>
      </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>

<script>

$(document).ready(function() {

    $('#datatableid').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Your Ad Data",
        }
    });

});

</script>







<script>

$(document).ready(function () {

    $('.deletebtn').on('click', function() {

        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

    });
});

</script>



<script>

$(document).ready(function () {
    $('.editbtn').on('click', function() {

        $('#editmodal').modal('show');


            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#cropname').val(data[1]);
            $('#sellername').val(data[2]);
            $('#selleraddress').val(data[3]);
            $('#selleremail').val(data[4]);
            $('#sellercontact').val(data[5]);
            $('#amount').val(data[6]);
    });
});

</script>
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
    <form action="farmer.php" method="POST">
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
  <script src="farmJS.js" charset="utf-8"></script>
  <script SameSite="None; Secure" src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
<script>
  var myLandbot = new LandbotLivechat({
    index: 'https://chats.landbot.io/v2/H-759110-2ST91DQDMXDSHDEO/index.html',
  });
</script>

</body>

</html>
