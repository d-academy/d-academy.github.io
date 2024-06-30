<?php
    if(isset($_POST["Submit"])){
        $name =isset( $_POST["Fname"]);
        $email =isset( $_POST["Email"]);
        $address =isset( $_POST["Address"]);
        $message =isset( $_POST["text"]);
        extract($_POST);
        if(!empty($name) and !empty($email) and !empty($address) and !empty($message)){
            $to = "chuckcorleon369@gmail.com";
            $subject = 'New message from ' . $name;
            $from = $email;
            
            $header = "from:\"$name\"<$from>\n";
            $body = "reply-to:$from\n";
            $body .= "content-type:text/html; charset=\"iso-8859-1\"";
            if(mail($to, $subject, $message, $header)){
                echo "Votre message a ete envoye avec succes!";
            }
            else{
                echo "Une erreur est survenue lors de l'envoi de votre messsage.";
            }
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
          body {
               background-color: #000;
               color: #000;
               background: center / cover fixed url('img/49bc575a3c1661a77bb002d93636e86e.jpg');
               background-color: rgba(0, 0, 0, 0.5);
          }
          .header {
               font-family: 'Yeseva One', Verdana, sans-serif;
               font-size: 60px;
               line-height: 110%;
               vertical-align: middle;
               text-align: center;
               background: linear-gradient(to right, #008cff, #DB545A);
               -webkit-background-clip: text;
               background-clip: text;
               color: transparent;
          }
          .main {
               backdrop-filter: brightness(50%);
          }
          footer {
               color: #fff;
               background: #000;
          }

          @media only screen and (min-width: 992px) {
          }
          @media only screen and (max-width: 576px) {
          }
    </style>
    <title>Contact</title>
</head>
<body>
    <header class="container-fluid topbar">
        <div class="logo">
            <a href="index.html"><img src="img/13554290.png" alt="Logo"/></a>
        </div>
        <nav>
            <div id="menu-btn"><img src="img/menu-btn.svg" height="33px"></div>
            <ul class="nav">
                <li><a href="index.html">Formations</a></li>
                <li><a href="index.html">Services</a></li>
                <li><a href="InscriptionForm.php">Sign In / Log In</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
                <li><a href="AboutUs.html">About Us</a></li>
            </ul>
        </nav>
        <div class="social">
            <a href="#" title="LinkedIn" target="_blank"><img src="img/in.png" class="LinkedIn" title="LinkedIn"></a>
            <a href="#" title="Facebook" target="_blank"><img src="img/fcb.png" class="Facebook"
            title="Facebook"></a>
            <a href="#" title="X" target="_blank"><img src="img/X.png" class="x" title="X"></a>
       </div>
    </header>
    <div class="main">
          <div>
               <h1 class="header">Contact-us</h1>
               <p class="container">Pour tout demande d'infomation sur nos formation,nos tarif ou toute autre question, n'hesiter pas a nous contacter <br>
               en utilisant les coordonnées en dessous. Notre equipe se fera un plaisir de vous repondre dans les meilleurs delais.</p>
          </div>
    </div>
    <footer class="container-fluid footer text-center p-2">
            <p>@Copyright <span>Digital Academy</span></p>
            <p class="terms"><a href="#">Privacy Policy</a> - <a href="#">Terms&Conditions</a></p>
     </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" referrerpolicy="no-referrer"></script>
    <script>
        let btn = document.querySelector('#menu-btn');

        btn.onclick = function() {

            const nav = document.querySelector('.nav');
            const h1 = document.querySelector('#title');

            if(nav.style.opacity == 0){
                nav.style.opacity = 1;
                h1.style.opacity = 0;
            } else {
                nav.style.opacity = 0;
                h1.style.opacity = 1;
            };
        }
    </script>
</body>
</html>