<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    margin: 0px;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    overflow-y: hidden;
    user-select: none;
}

* {
    box-sizing: border-box;
}


.bg-img {
    /* The image used */
    background-image: url("img/main/bg3.jpg");

    min-height: 676px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Add styles to the form container */
.container {
    position: absolute;
    right: 100px;
    top: 150px;
    margin: 20px;
    border-radius: 10px;
    max-width: 300px;
    padding: 16px;
    background-color: #00000069;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
h1, label, p {
    color: #fff;
}
#a {
    width: 100%;
}
p#b {
    font-size: 30px;
    position: relative;
    left: 10px;
    color: #000;
    text-shadow:  4px 4px rgba(100, 100, 100, 0.8);
}
.c {
    width: 600px;
    position: relative;
    height: 300px;
    top: 220px;
    left: 160px;
    float: left;
}
p {
    margin: 3px 0px;
}
</style>
</head>
<body>
<div class="bg-img">
    <div class="c">
        <img src="img/main/CSLogo.png" id="a">
        <p id="b">The System For School</p>
    </div>
  <form action="action/ad_check.php" method="post">
    <div class="container">
        <h1>Login</h1>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="name" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <?php
            if (isset($_GET['notice'])) {
                if ($_GET['notice'] == "gagal") {
                    echo '<p style="font-size: 11px;">Login gagal! username dan password salah!</p>';
                }
                else if($_GET['notice'] == "logout"){
                    echo '<p style="font-size: 11px;">Anda telah berhasil logout</p>';
                }
                else if($_GET['notice'] == "belum_login"){
                    echo '<p style="font-size: 11px;">Anda harus login untuk mengakses halaman admin</p>';
                }
            }
        ?>
        
        <button type="submit" class="btn" name="log" style="font-size: 20px;">Login</button>
    </div>
  </form>
</div>


</body>
</html>
