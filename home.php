<img src="https://16ady216etox4c1ny031s78y-wpengine.netdna-ssl.com/wp-content/uploads/2017/04/New-England-College.png" alt="Mountain View" style="width:500px;height:200px;">
<!DOCTYPE html>
<?php
session_start();
include('security_staff.php');
$secUser= $_SESSION['secUser'];
echo "<h2>Welcome $secUser</h2>";




?>
<html>
<head>
<link href="bossStyles.css" rel="stylesheet" type="text/css">
<style>
.button {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 30px 62px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin: 8px 4px;
    cursor: pointer;
    float: center;
}
.smallbutton {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 17px 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px 3px;
    cursor: pointer;
}
.button3 {background-color: #f44336;} /* Red */ 

</style>
</head>
<body>

<h2 class="bluehost">Student Ticket Tracking System</h2>
<?php
//<a href="login.html" class="smallbutton" align="left">Log-in</a> 
?>
<br><br><br>

<a style="float: center;" href="ticket_list.php" class="button">View Tickets</a>

<a style="float: center;" class="button" href="ticket_update.php?action=a">Add a new Ticket</a>

<a style="float: center;" href="search.php" class="button">Search</a>

<br><br><br>

<br>
<br>
<br>
<br>



</body>
</html>