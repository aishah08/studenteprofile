<?php
session_start();
include 'db.php'; // Pastikan Anda sudah menghubungkan ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah pengguna ada di database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Jika pengguna ada, set session
        $_SESSION['username'] = $username;
        header("Location: profile.php");
        exit();
    } else {
        echo "Username atau password salah!";
    }
}
?>
<!doctype html> 
 
 <html lang="en"> 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign In Page</title>
     <style>
         body {
             font-family: 'Arial', sans-serif;
             margin: 0;
             padding: center;
             background-color: #f8f8f8;
         }
         header {
             background-color: #343a40;
             color: white;
             text-align: center;
             padding: 20px 0;
         }
         header h1 {
             margin: 0;
             font-size: 2.5em;
         }
 
         header .home-icon {
             font-size: 1.2em;
             color: #343a40;
             text-decoration: none;
         }
         nav {
             display: flex;
             justify-content:center;
             align-items: center;
             background-color: #ffc107;
             padding: 10px;
         }
         nav a {
             display: inline-flex;
             align-items: center;
             text-decoration: none;
             color: #343a40;
             margin: 0 15px;
             font-weight: bold;
         }
         nav a:hover {
             color: #212529;
         }
         .container {
             max-width: 300px;
             margin: 20px auto;
             background-color: #fff;
             padding: 20px;
             border-radius: 10px;
             box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
         }
 
         .register-button {
             display: block;
             width: 100%;
             padding: 12px;
             background-color: #fff;
             color: #000;
             border: 2px solid #000;
             border-radius: 25px;
             text-align: center;
             font-size: 16px;
             font-weight: bold;
             margin-bottom: 20px;
             text-decoration: none;
             transition: background-color 0.3s ease;
         }
 
         .register-button:hover {
             background-color: #f0f0f0;
             position: center;
         }
 
         .social-buttons a {
             display: block;
             width: 100%;
             padding: 12px;
             color: #fff;
             border-radius: 25px;
             text-align: center;
             font-size: 16px;
             font-weight: bold;
             margin-bottom: 15px;
             text-decoration: none;
         }
 
         .facebook {
             background-color: #4267B2;
         }
 
         .google {
             background-color: #DB4437;
         }
 
         .ip {
             background-color: #87c22f;
         }
 
         form {
             margin-top: 20px;
         }
 
         input {
             width: 100%;
             padding: 12px;
             margin-bottom: 10px;
             border: 1px solid #ccc;
             border-radius: 25px;
             font-size: 16px;
         }
 
         .password-wrapper {
             position: relative;
         }
 
         .password-wrapper .toggle-password {
             position: absolute;
             top: 50%;
             right: 15px;
             transform: translateY(-50%);
             cursor: pointer;
             color: #6c757d;
         }
 
         .forgot-password {
             display: block;
             margin: 10px 0;
             font-size: 14px;
             color: #080808;
             text-decoration: none;
         }

~ Siti Aishah, [21/2/2025 1:31 PM]
.forgot-password:hover {
             text-decoration: underline;
         }

.submit-button {
             display: block;
             width: 60px;
             height: 60px;
             margin: 20px auto;
             background-color:rgb(43, 216, 216);
             border: none;
             border-radius: 50%;
             font-size: 20px;
             font-weight: bold;
             color: white;
             text-align: center;
             line-height: 60px;
             cursor: pointer;
         }
     </style>
 </head>
  
    <body> 

        <?php
            if(isset($message)){
            foreach($message as $message){
                echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
            }
            }
        ?>
        <header>
            <h1>STUDENT E-PROFILE</h1>
        </header>
     
        <div class="container">
         
            <form method="post" action=""> 
            
            Username : <input type="text" name="username" id="username"> <br><br>
            Password : <input type="password" name="password" id="password"> <br><br>
            <input type="submit" name = "submit" value = "login now" class="submit-button"><br><br>
            
            <footer class="bg-dark text-white text-center p-3 mt-5">
        &copy; 2025 UiTM e-Profile. All rights reserved.
    </footer>

        </div>
         
    </body> 
 </html>