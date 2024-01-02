<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>

    <form action="" method="post">
        <label for="userid">Enter User ID to Delete:</label>
        <input type="text" id="userid" name="userid">
        <input type="submit" value="Delete">
    </form>

</body>
</html>

<?php
include '../backend/connection.php';

if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];

    $sql = "DELETE FROM doctors WHERE id = '$userid'";

    if ($connection->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $conn->close();
}
?>