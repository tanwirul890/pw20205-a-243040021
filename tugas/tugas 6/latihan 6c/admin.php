<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>

<style>
       body {
    background-image: url(bagraund.webp);
}


.container {
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
}

.logo img{
    width: 400px;
    height: 400px;
    animation-name: animasi;
    animation-duration: 600ms;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-direction: alternate;
   
}
@keyframes animasi {
    0% {
      scale: 1;
      transform: translateY(-1px);
    }
  
    100% {
      scale: 1;
      transform: translateY(-50px);
    }
  }

.welcome h1 {
 font-size: 50px;
}

.logout a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 120px;
    height: 30px;
    background: transparent;
    border: 2px solid #700b97;
    font-size: 20px;
    border-radius: 50px;
    color: #700b97;
    margin: 3rem 1.5rem 3rem 0;
    transition: 0.3s ease-in-out;
    text-decoration: none;
}

.logout a:hover {
    color: white;
    transform: scale(1.3) translateY(-5px);
    box-shadow: 0 0 25px #700b97;
    background: linear-gradient(45deg, #700b97, #ab02ee, #c743fb);     
}  
</style>

<body>

<div class="container">

<div class="logo">
    <img src="logo 3.png" alt="">
</div>

    <div class="welcome">
       <h1>Selamat Datang Admin</h1>
    </div>

    <div class="logout">
        <a href="login.php">login</a>
    </div>
</div>


</body>
</html>