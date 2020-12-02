<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'farmerad');

    if(isset($_POST['updatedata']))
    {
        $id = $_POST['update_id'];

        $cropname = $_POST['cropname'];
        $sellername = $_POST['sellername'];
        $selleraddress = $_POST['selleraddress'];
        $selleremail = $_POST['selleremail'];
        $sellercontact = $_POST['sellercontact'];
        $amount = $_POST['amount'];

        $query = "UPDATE cropdetails SET cropname='$cropname', sellername='$sellername',selleraddress='$selleraddress',selleremail='$selleremail', sellercontact='$sellercontact', amount=' $amount' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:farmer.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
