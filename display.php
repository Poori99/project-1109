<?php 
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="up-container">
        <h1 class="admin">Admin</h1>
        <button class="products_btn"><a href="product.php">Add Products</a></button>
    </div>

    <div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Products ID</th>
                <th scope="col">Products Name</th>
                <th scope="col">Barcode No</th>
                <th scope="col">Price</th>
                <th scope="col">Date of Expiry</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

        <?php

        $sql="Select * from `crud`";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row['id'];
                $name=$row['name'];
                $barcode=$row['barcode'];
                $price=$row['price'];
                $expiry=$row['expiry'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$barcode.'</td>
                <td>'.$price.'</td>
                <td>'.$expiry.'</td>
                <td>
                    <button class="operation-btn"><a href="update.php?updateid='.$id.'">Update</a></button>
                    <button class="operation-btn"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                </td>
            </tr>';
            }
        }

        ?>

        

           
    
        </tbody>
</table>
    </div>

    
</body>
</html>