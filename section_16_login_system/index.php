<?php 
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h3>Login</h3>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pdw" placeholder="Password">
        <button>Login</button>
    </form>

    
    <h3>Signup</h3>
    <?php 
        check_signup_errors();
    ?>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pdw" placeholder="Password">
        <input type="password" name="email" placeholder="E-Mail">
        <button>Signup</button>
    </form>


</body>
</html>