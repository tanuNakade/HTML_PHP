<?php
    include_once('connection.php');

    $sql = "SELECT * from users";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn Form</title>
</head>
<body>
    <form action="./signin.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="address">Address:</label>
        <input type="textarea" id="address" name="address"><br>

        <p>Gender: </p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <br><br><br>

        <input type="submit" value="submit">
    </form>

    <table border="1px" style="width: 600px; line-height: 40px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['mobile']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['address']; ?>
                    </td>
                    <td>
                        <?php echo $row['gender']; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
