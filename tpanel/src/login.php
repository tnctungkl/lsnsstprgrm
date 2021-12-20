<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="../src/admin.css">
    <title>TOU ADMIN PANEL</title>
</head>
<body>
    <span id="admin-login" class="admin-login">ADMIN</span>
    <div class="tpanel-login-main-container">
        <form  class="tpanel-admin-login"  action="init.php" method="POST">
            <h1>[ADMIN] Mail</h1>
            <input class="admin-login-inputs" type="text" name="adminmail" placeholder="Mail">
            <h1>[ADMIN] Password</h1>
            <input class="admin-login-inputs" type="password" name="adminpassword" placeholder="Password">
            <span id="createaccount" class="admin-needregister-button">
                Create An Account
            </span>
            <button class="admin-login-button" name="adminlogin">
                LOGIN
            </button>
        </form> 
        <form  class="tpanel-user-login"  action="init.php" method="POST">
            <h1>[USER] Mail</h1>
            <input class="admin-login-inputs" type="text" name="usermail" placeholder="Mail">
            <h1>[USER] Password</h1>
            <input class="admin-login-inputs" type="password" name="userpassword" placeholder="Password">
            <span id="createaccount" class="admin-needregister-button">
                Create An Account
            </span>
            <button class="admin-login-button" name="userlogin">
                LOGIN
            </button>
        </form> 
        <form  class="tpanel-admin-register"  action="init.php" method="POST">
            <h1>Mail</h1>
            <input class="admin-login-inputs" type="text" name="adminmail" placeholder="Mail">
            <h1>Password</h1>
            <input class="admin-login-inputs" type="password" name="adminpassword" placeholder="Password">
            <h1>Password Again</h1>
            <input class="admin-login-inputs" type="password" name="adminpassword2" placeholder="Password">
            <button class="admin-login-button" name="adminregister">
                Register
            </button>
        </form>
    </div>
    <div class="tpanel-bg-header"><h1>TUOS</h1><h1>UNIVERSITESI</h1></div>
    <img class="tpanel-bg" src="../img/bg.png" alt="">
</body>
<script src="../src/jquery-3.6.0.min.js"></script>
<script src="../src/index.js"></script>
</html>