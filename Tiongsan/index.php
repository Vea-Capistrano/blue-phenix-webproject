<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F1E7E7;
            margin: 0;
            padding: 20px;
            justify-self: center;
            text-align: center;

        }
        h1 {
            color: #333;
            display: flex;
            justify-self: center;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>User Registration</h1>
    <form action="create_user.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="administrator">Administrator</option>
            <option value="student">Student</option>
        </select>

        <input type="submit" value="Register">
    </form>
</body>
</html>