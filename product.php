<?php 
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $barcode=$_POST['barcode'];
    $price=$_POST['price'];
    $expiry=$_POST['expiry'];

    $sql="insert into `crud` (name,barcode,price,expiry)
    values('$name','$barcode','$price','$expiry')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Data inserted successfully";
        header('location: display.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page </title>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="form-name">
                <label>Product Name</label>
                <input type="text" name="name" class="form-get" placeholder="Enter name of the product" autocomplete="off">
            </div>
            <div class="form-barcode">
                <label>Barcode No</label>
                <input type="text" name="barcode" class="form-get" placeholder="Enter Brcode No of the product" autocomplete="off">
            </div>
            <div class="form-price">
                <label>Price</label>
                <input type="text" name="price" class="form-get" placeholder="Enter price of the product" autocomplete="off">
            </div>
            <div class="form-expiry">
                <label>Expiry Date</label>
                <input type="text" name="expiry" class="form-get" placeholder="Enter expiry date of the product" autocomplete="off">
            </div>

            <button type="submit" name="submit" class="form-btn">SUBMIT</button>
        </form>
    </div>
</body>
</html>