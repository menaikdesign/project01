<?php 
session_start();
$_SESSION['user'] = "Admin";
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Homepage</title>
        
        <link rel="stylesheet" href="css/newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content'>
            
           <?php include 'admin_navbar.php'?>
            <div class='admin_staff'>
               
                <ul>
                    <li><b><u>Staff</u></b></li>
       <li> <a href="addstaff.php">Add staff member</a></li>
        <li><a href="display_staff.php">Edit staff member</a></li>
        <li> <a href="delete_staff.php">Delete staff</a></li>
        </ul>
        </div>
            <div class='admin_customer'>
                <ul>
                   <li><b><u> Customer</u></b></li>
        <li><a href="addcustomer.php">Add Customer</a></li>
       <li> <a href="display_customer.php">Edit customer</a></li>
       <li> <a href="delete_customer.php">Delete customer</a></li>
        </div>


        <div>
         <span><a href="http://localhost/bank_system/chatroom/index.php">join chatroom</a></span>
       </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>