<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = $password . "system";


        // Database Connection
        $conn = mysqli_connect("localhost", "batch1", "batch1", "db_tiongsan", 3307);

        $sql = "SELECT * FROM `tbl_users` WHERE `username` = '$username'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            // password verification
            // password, $row["password"]
            if(password_verify($password, $row["password"])){
                if($row["role"] == "administrator"){
                    header("Location: admin/dashboard.php");
                }else{
                    header("Location: student/dashboard.php");
                }
            }
            else{
                echo "User Not Found";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LogIn</h1>
    <form action="" method="POST">
        <label for="username"></label>
        <input type="text" id="username" name="username">

        <label for="password"></label>
        <input type="text" name="password" id="password">

        <input type="submit" value="LogIn">
    </form>
</body>
</html>