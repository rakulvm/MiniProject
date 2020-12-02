<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'farmerad');

if(isset($_POST['insertdata']))
{
    $cropname = $_POST['cropname'];
    $sellername = $_POST['sellername'];
    $selleraddress = $_POST['selleraddress'];
    $selleremail = $_POST['selleremail'];
    $sellercontact = $_POST['sellercontact'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO cropdetails (`cropname`,`sellername`,`selleraddress`,`selleremail`,`sellercontact`,`amount`) VALUES ('$cropname','$sellername','$selleraddress','$selleremail','$sellercontact','$amount')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: farmer.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
