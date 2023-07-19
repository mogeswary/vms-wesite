<?php
include('connection.php');
include('head.php')
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <link rel="stylesheet" type="text/css" href="admin_profile.css">

</head>
<body>

<div class="container-fluid">

    <div class="card shadow number">
        <div class="card-header py-3">
            <h1>Admin Profile</h1>
            <a href="add_admin.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Admin Profile 
</button></a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
               $query = "SELECT * FROM registerform";
               $data = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th>Email </th>
                            <th>Password</th>
                            <th>Phone number</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($data) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($data))
                            {
                        ?>
                            <tr>

                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['password']; ?></td>
                                <td><?php  echo $row['phonenumber']; ?></td>

                                 
                                <td>
                                   
                                    <form action="" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>


<?php

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM registerform WHERE id='$id' ";
    $data = mysqli_query($conn, $query);

if(mysqli_query($conn, $deleteQuery))
{
    echo "$name is now successfully Deleted!!!";
}
else
{
    echo "Error: " . $deleteQuery . "<br />" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

</body>
