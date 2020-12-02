<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer's market-report bugs</title>
    <link rel="stylesheet" href="styles.css">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">Report the errors you faced</h2>
                <p class="text-center">Your report will be taken to our admin and will be solved</p>
                <!-- starting php code -->
                <?php
                    //first we leave this input field blank
                    $recipient = "";
                    //if user click the send button
                    if(isset($_POST['send'])){
                        //access user entered data
                       $recipient = 'rakulcareer6@gmail.com';
                       $subject = $_POST['subject'];
                       $message = $_POST['message'];
                       $sender = "From:rakulcareer@gm6ail.com";
                       //if user leave empty field among one of them
                       if(empty($recipient) || empty($subject) || empty($message)){
                           ?>
                           <!-- display an alert message if one of them field is empty -->
                            <div class="alert alert-danger text-center">
                                <?php echo "All inputs are required!" ?>
                            </div>
                           <?php
                        }else{
                            // PHP function to send mail
                           if(mail($recipient, $subject, $message, $sender)){
                            ?>
                            <!-- display a success message if once mail sent sucessfully -->
                            <div class="alert alert-success text-center">
                            <?php echo "Thank you for your help...the issue will be sorted out soon..!!"?>
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
                <form action="report.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <textarea cols="30" rows="5" class="form-control textarea" name="message" placeholder="Tell us the error you faced...."></textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn-danger" type="submit" name="send" value="Send" placeholder="Subject">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>