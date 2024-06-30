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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Yeseva+One&display=swap" rel="stylesheet"> 
    <title>Contact</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Verdana, Tahoma, sans-serif;
    }

    body{
        position: relative;
        background-color: #000;
        color: #000;
        background: center / cover fixed url('img/49bc575a3c1661a77bb002d93636e86e.jpg');
    }

    a {
        text-decoration: none;
        color: inherit;
        font: inherit;
        width: fit-content;
    }

    .topbar {
        background-color: rgb(103, 173, 200);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 123px;
        padding: 10px 0;
        box-shadow: 10px 0 10px rgba(0, 0, 0, .5);
        z-index: 3;
    }

    .logo {
        font-size: 1.5rem;
        font-weight: bold;
        height: 33px;
        float: left;
        margin-left: 33px;
    }

    #menu-btn {
        display: block;
        position: absolute;
        top: 66px;
        right: 33px;
        cursor: pointer;
    }

    .nav {
        position: absolute;
        display: flex;
        flex-direction: column;
        text-align: center;
        list-style-type: none;
        margin: 0 auto;
        padding: 0 11px;
        top: 124px;
        left: calc(50% - 150px);
        width: 300px;
        opacity: 0;
        transition: opacity 0.7s;
    }

    .nav a {    
        font-size: 1rem;
        text-decoration: none;
        display: block;
        width: auto;
        border-radius: 23px;
        margin: 3px 23px;
        padding: 10px;
        cursor: pointer;
        color: #000;
        background: rgb(103, 173, 200);
    }

    .nav a:hover{
        transition: 0.5s;
        background: rgb(152, 223, 253);
        color: #ffffff;
    }

    .nav .active {
        color: #fff;
    }

    .social {
        position: absolute;
        top: 17px;
        right: 11px;
    }

    .LinkedIn, .Facebook, .x {
        padding: 0 11px;
        height: 25px;
        width: auto;
    }

    .LinkedIn:hover, .Facebook:hover, .x:hover {
        transform: scale(1.7)
    }
    
    .container-fluid {
        margin-top: 123px;
        backdrop-filter: brightness(50%);
        border-radius: 23px;
    }

    .header{
        text-align: center;
        width: 75%;
    }
    .header.h1{
         font-size: 30px;
     }
     .empty{
         width: 100%;
         height: 100vh;
         position: absolute;
         left: 0;
         top: 0;
         background-color: rgba(0, 0, 0, 0.5);
         z-index: -1;
     }
     .content{
         display: flex;
         min-height: 110vh;
     }
      section{
          position: absolute;
         margin-top: 8vh;
         margin-left: 20vh;
         margin-bottom: 10px;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
     }
      section h2{
          position: absolute;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
      }
      section p{
         position: absolute;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
     }
     .content-form{
         margin-top: 7rem;
     }
     section i{
         position: absolute;
         border-radius: 50%;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
         width: 40px;
         height: 40px;
         background-color: rgba(255,255,255,0.8);
         color: #000;
         text-align: center;
     }
     .form{
         display: flex;
         position: absolute;
         left: 0;
         top: 0;
         margin-left: 50%;
         justify-content: center;
         align-items: center;
         min-height: 110vh;
         flex-direction: column;
     }
      textarea{
         width: 30rem;
         margin: 20px;
         border: 0;
         font-size: 17px;
         background-color: transparent;
         border-bottom: 2px solid #fff;
     }
      textarea ~span{
         position: absolute;
         left: 20px;
         transition: 1s ease-in-out;
         margin-top: 10px;
     }
      textarea:focus ~span{
         transform: translateY(-10px);
         pointer-events: none;
     }
     .media{
         position: absolute;
         top: 85vh;
         right: 20px;
         display: flex;
         list-style: none;
     }
     .media li{
         margin: 10px 20px;
     }
     .submit-btn{
         background-color: dodgerblue;
         border: 2px solid dodgerblue;
         width: 80px;
         height: 20px;
         font-size: 18px;
         margin-top: -5px;
         cursor: pointer;
     }
     .submit-btn:hover{
         background-color: transparent;
         color: dodgerblue;
         cursor: pointer;
     }
     .forms{
         width: 30rem;
         margin: 20px;
         padding: 20px;
         border: 0px;
         border: transparent;
         background-color: transparent;
         font-size: 18px;
         border-bottom: 2px solid #fff;
     }
     .forms-1{
         position: absolute;
         left: 20px;
         transition: 1s ease-in-out;
         margin-top: 9.7px;
     }
     .forms:focus ~span{
         transform: translateY(-20px);
         pointer-events: none;
     }

    footer {
        font-family: 'Verdana';
        font-style: normal;
        font-weight: 400;
        font-size: 23px;
        height: auto;
        background: #000;
        color: white;
        text-align: center;
        box-shadow: 0 -1px 1em 3px rgba(0, 0, 0, .77);
        box-sizing: border-box;
    }
    footer > p {
        margin: 3px;
        box-sizing: border-box;
    }
    footer > span {
       font-size: 27px;
       font-weight: 500;
       font-family: "Cardo", serif;
       background: linear-gradient(to right, #008cff, #DB545A);
       -webkit-background-clip: text;
       background-clip: text;
       color: transparent;
       cursor: default;
    }
    .terms {
       font-size: 17px;
       padding: 3px;
    }
    .terms > a:hover {
       text-decoration: underline;
       color: #008cff;
    }

    @media only screen and (min-width: 992px) {
        .topbar {
            height: 100px;
            display: flex;
        }
        #menu-btn {
            display: none;
        }
        .nav {
            top: inherit;
            flex-direction: row;
            width: calc(100% - 500px);
            margin-block: 17px;
            opacity: 1;
        }
        .nav a {
            display: inline;
            margin-inline: 9px;
        } 
        .nav a:hover{
            border-radius: 23px;
        }
        .social {
            top: 29px;
        }
        .LinkedIn, .Facebook, .x {
            padding: 0 13px;
            height: 25px;
            width: auto;
        }
    }
    @media only screen and (max-width: 576px) {
        .topbar {height: 75px;}
        .logo img {width: 75%;}
        .social {display: none;}
        #menu-btn{top: 19px;}
        .nav {top: 77px;}
        footer {
            font-size: 23px;
            line-height: 150%;
        }
        span {font-size: 27px;}
        .terms > a:hover {
            text-decoration: underline;
            color: #008cff;
        }
    }
    </style>
</head>
<body>
    <header class="container-fluid topbar">
        <div class="logo">
            <a href="index.html"><img src="img/13554290.png" alt="Logo"/></a>
        </div>
        <nav>
            <div id="menu-btn"><img src="img/menu-btn.svg" height="33px"></div>
            <ul class="nav">
                <li><a href="#courses">Formations</a></li>
                <li><a href="#services">Services</a></li>
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
    <div class="container-fluid">
        <header class="header">
            <h1>Contact-us</h1>
            <p>pour tout demande d'infomation sur nos formation,nos tarif ou toute autre question, n'hesiter pas a nous contacter <br>
            en utilisant les coordonnées en dessous. Notre equipe se fera un plaisir de vous repondre dans les meilleurs delais.</p>
        </header>
        <div class="content">
            <section>
                <i class="fa fa-map-marker fa-2x" aria-hidden="false"></i>
                <h2>Adresses</h2>
                <p>Douala - Cameroun</p>
            </section>
            <section>
                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                <h2>Phone</h2>
                <p>+237 676270089</p>
            </section>
            <section>
                <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                <h2>E-Mail</h2>
                <p>digitalacademy@gmail.com</p>
                <p>www.digitalacademy.com</p>
            </section>
        </div>
        <form method="post" action =""> 
            <div class="form">
                <div class="right">
                    <div class="contact-form">
                        <input class="forms" type="text" name="Fname" required>
                        <span class="forms-1">Full Name</span>
                    </div>
                    <div class="contact-form">
                        <input class="forms" type="text" required>
                        <span class="forms-1" >Address</span>
                    </div>
                    <div class="contact-form">
                        <input class="forms" type="email" name="Email" required>
                        <span class="forms-1">E-Mail</span>
                    </div>
                    <div class="contact-form">
                        <textarea name="text" required></textarea>
                        <span>Type Your Message....</span>
                    </div>
                    <div class="contact-form">
                        <input class="submit-btn" type="submit" name="Submit" value=" Submit  ">
                    </div>
                </div>
            </div>
        </form>
        <div class="media">
            <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
        </div>
        <footer class="container-fluid footer text-center p-2">
            <p>@Copyright <span>Digital Academy</span></p>
            <p class="terms"><a href="#">Privacy Policy</a> - <a href="#">Terms&Conditions</a></p>
        </footer>   
    </div>
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
