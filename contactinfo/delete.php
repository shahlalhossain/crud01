<?php
$recordID = $_GET['id'];
$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

if ($dbConnection) {
    $query = "DELETE FROM `contact_info` WHERE `id` = $recordID";
    mysqli_query($dbConnection, $query);
    header('location:list.php');
} elseif (mysqli_connect_errno()) {
    echo "Failed to connect to MysQL Database: " . mysqli_connect_error();
} else {
    echo 'Please Check Your Database Connection';
}
?>