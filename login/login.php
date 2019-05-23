<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="../login/validasi.js"></script>

    <title>LOGIN</title>
   
</head>

<body>
<div class="login">
        <h2 class="login-header">== Rental Mobilku ==</h2>

        <form action="proses_login.php" method="post" class="animate-bottom">
        <p>
        <input type="text" name="username" placeholder="Username" id="username">
        </p>

        <p>
        <input type="password" name="password" placeholder="Password" id="password">
        </p>

        <p>
        <input type="submit" name="submit" value="Log in" onclick="return validasiLogin()">
        </p>
</form>
        <script>
    var myVar;
    function myFunction(){
        myVar = setTimeout(showpage, 500);
    }

    function showPage(){
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
    </script>
</body>
</html>