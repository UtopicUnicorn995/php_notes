<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with database</title>
</head>

<body>

    <h3>Signup</h3>

    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="passwords" placeholder="Password">
        <input type="text" name="email" placeholder="user@gmail.com">
        <button>Signup</button>
    </form>

    <h3>Change account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="passwords" placeholder="Password">
        <input type="text" name="email" placeholder="user@gmail.com">
        <button>Update</button>
    </form>

    <h3>Delete Account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="passwords" placeholder="Password">
        <button>Delete</button>
    </form>
</body>

</html>