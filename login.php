<?php
session_start();

if(isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username == "admin" && $password == "admin") {
    $_SESSION['username'] = $username;  // Set the session variable upon successful login
    header("Location: index.php"); 
    exit;
  } else {
    $error = "Invalid username or password";
  }

}

// Check if the user is already logged in
if(isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GSOFT</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="img/Logo/logo.jpg">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#252525, #2c2c2c);
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #f43f03;
            font-size: 12px;
        }

        form button[type="submit"] {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #f43f03;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        form button[type="submit"]:hover {
            background: #f43f03;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #f43f03,
                0 0 25px #f43f03,
                0 0 50px #f43f03,
                0 0 100px #f43f03;
        }

        form button[type="submit"] span {
            position: absolute;
            display: block;
        }

        form button[type="submit"] span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #f43f03);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        form button[type="submit"] span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #f43f03);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        form button[type="submit"] span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #f43f03);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        form button[type="submit"] span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #f43f03);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }
    </style>
  </head>
  <body>
    <!-- header start -->
    <div class="main-bg">
      
      <nav>
        <!-- logo -->
        <h1>
          <a href="index.html"><img src="img/Logo/logo.jpg" alt="logo" width="45" height="45" class="logo" /> GSOFT</a>
        </h1>

        <!-- navbar -->
        <div class="navbar" >
          <ul id="nav">
            <li><a href="#abutme">TENTANG KAMI</a></li>
            <li><a href="#course">PROMOSI</a></li>
            <li><a href="#COURSE">KURSUS</a></li>
            <li><a href="#customer">TESTIMONI</a></li>
            <li><i class="fa-solid fa-user" onclick="profileUser()"></i></li>
            <div class="profile_Menu" id="profile">
              <a href="index.php" >Beranda</a>
            </div>
          </ul>
        </div>
        <div class="menu-icon" onclick="menuListBar()">
          <i class="fa-solid fa-bars" ></i>
        </div>
      </nav>
    </div>

    <div class="login-box">
      <h2>Login</h2>
      <form method="post">
        <div class="user-box"> 
          <input type="text" name="username" required>
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required>
          <label>Password</label>    
        </div>
        <button type="submit" name="submit">Login</button>
      </form>
      <br>
      <?php if(isset($error)) { ?>
        <p><?=$error?></p>
      <?php } ?>
    </div>
    


    <!-- Footer Start -->
    <footer>
      <div class="row">
        <div class="footer-wrapper">
          <div class="footer-textbox" >
            <h1><img src="img/Logo/logo.jpg" alt="logo" width="45">GSOFT</h1>
            <br>
            <p>Platform kursus online terbaik di Indonesia.</p>
            <h4>Dibuat oleh GSOFT dengan 💖 &copy; 2023</h4>
          </div>
       
          <div class="footer-textbox">
            <div class="contact-box">
              <h1>Hubungi Kami</h1>
              
              <i class="fa-solid fa-envelope-circle-check"></i>
              <input type="email"  placeholder="bjir@gmail.com">
              <div class="linebox">
                <div class="marble"></div>
              </div>
                   <div class="contact-icon">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
  </div>     
</section>



    <!-- script -->
    <script src="js/App.js"></script>

    <!-- Course Script -->
    <script src="js/course.js"></script>
  </body>
</html>
