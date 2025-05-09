<?php
 if (isset($_POST["submit"])) {
     if ($_POST["username"] == "wirul" && $_POST["password"] == "unpas24") {
         header("Location: admin.php");
         exit;
     } else {
         $error = true;
     }
 }
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <title>Login</title>
     <style>
         * {
             box-sizing: border-box;
             font-family: 'Poppins', sans-serif;
         }
 
         body {
             
            background-image: url(bagraund.webp);
             display: flex;
             justify-content: center;
             align-items: center;
             height: 100vh;
             margin: 0;
         }
 
         .login-container {
             background-color: white;
             padding: 50px;
             border-radius: 15px;
             box-shadow: 0 10px 25px #700b97;
             width: 350px;
             text-align: center;
         }
 
         

        h1 {
            font-size:20px;
            color: #700b97;
        }
        
         form {
             text-align: left;
         }
 
         label {
             display: block;
             margin: 10px 0 5px;
             color: #700b97;
         }
 
         input[type="text"],
         input[type="password"] {
             width: 100%;
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 8px;
         }
 
         button {
             width: 100%;
             padding: 10px;
             background: transparent;
             border: 2px solid #700b97;
             color: white
             border: none;
             border-radius: 8px;
             margin-top: 15px;
             font-weight: bold;
             transition: 0.3s ease-in-out;
             text-decoration: none;
         }
 
         button:hover {
            color: white;
  transform: scale(1.1) translateY(-2px);
  box-shadow: 0 0 25px #700b97;
  background: linear-gradient(45deg, #700b97, #ab02ee, #c743fb);
         }
 
         .error {
             color: red;
             font-style: italic;
             margin-bottom: 10px;
         }
     </style>
 </head>
 
 <body>
     <div class="login-container">
         <h1>HI, Enter Username Here</h1>
 
         <?php if (isset($error)) : ?>
             <p class="error">username / password salah!</p>
         <?php endif; ?>
 
         <form action="" method="post">
             <label for="username">Username :</label>
             <input type="text" name="username" id="username">
 
             <label for="password">Password :</label>
             <input type="password" name="password" id="password">
 
             <button type="submit" name="submit">Login</button>
         </form>
     </div>
 </body>
 
 </html>