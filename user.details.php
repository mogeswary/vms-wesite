<?php
include('connection.php');
include('head.php');
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="admin_profile.css">

</head>
<body>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1>User Profile</h1>
    <a href="add_employement.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add User! 
</button></a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
               $query = "SELECT * FROM userform";
               $data = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th>Email </th>
                            <th>Phone number</th>
                            <th>House Address</th>

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
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['phonenumber']; ?></td>
                                <td><?php echo $row['address']?></td>
  
                                 <td>

                                    <form action="" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                    </form>
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

    $query = "DELETE FROM userform WHERE id='$id' ";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
    }    
}
?>