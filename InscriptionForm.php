
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'Inscription à Digital Academy</title>
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
                <li><a href="InscriptionForm.php" class="active">Sign In / Log In</a></li>
                <li><a href="contact.php">Contact</a></li>
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
    <div class="login">
        <form action="scriptInscription.php" method="POST" id="form">
            <h1>Bienvenu à Digital Academy</h1>
            <?php
                session_start();
                if (isset($_SESSION["error"])) {
                    echo "<div style='background: white; border-radius: 23px; height: fit-content'>
                            <h1 style='font-size: 33px; margin:0;'>ERROR: " . $_SESSION["error"] . "</h1></div>";
                    unset($_SESSION["error"]);
                }
            ?>
            <div class="name">
                <label for="Nom">Nom</label>
                <input type="text" name="Nom" id="Nom" >
                <label for="Prenom">Prenom</label>
                <input type="text" name="Prenom" id="Prenom" >
            </div>
            <div class="dob">
                <label for="dob">Date de Naissance: <input type="date" name="dob" id="dob"></label>
            </div>
            <div class="ville">
                <label for="adresse">Adresse</label>
                <input type="text" name="Adresse" id="adresse">
                <label for="ville">Ville</label>
                <input type="text" name="Ville" id="ville">
            </div>
            <div class="formation">
                <label for="formation">Formation Sollicitée</label>
                <label><input type="checkbox" id="formation" name="codeForm" value="11"> Community Management</label>
                <label><input type="checkbox" id="formation" name="codeForm" value="12"> Data Analysis</label>
                <label><input type="checkbox" id="formation" name="codeForm" value="13"> IA Générative</label>
                <label><input type="checkbox" id="formation" name="codeForm" value="14"> Marketing Réseau</label>
                <label><input type="checkbox" id="formation" name="codeForm" value="15"> Web Design</label>
                <label><input type="checkbox" id="formation" name="codeForm" value="16"> Search Engine Optimisation (SEO) </label>
            </div>
            <div class="session">
                <label for="codeSess">Quelle session souhaitez vous integrer ?</label>
                <select name="codeSess" id="codeSess">
                    <option value="none">--</option>
                    <option value="03">Janvier</option>
                    <option value="04">Avril</option>
                    <option value="01">Juillet</option>
                    <option value="02">Octobre</option>
                </select>
            </div>
            <div class="typecours">
                <label for="typecours">Quelle est votre préférence pour les cours?</label>
                <label><input type="radio" name="typeCours" id="typecours" value="Présentiel"> Présentiel</label>
                <label><input type="radio" name="typeCours" id="typecours" value="Distanciel"> Distanciel</label>
            </div>
            <div class="niveau">
                <label for="nivEtu">Quel est votre niveau d\'étude?</label>
                <input type="text" name="nivEtu" id="nivEtu">
            </div>
            <div class="submit">
                <button type="submit">Envoyer</button>
                <button type="reset">Effacer le formulaire</button>
            </div>
        </form>
    </div>
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