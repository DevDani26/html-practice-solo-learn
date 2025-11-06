<!DOCTYPE html>
<html>
<head>
    <style>
        #heading {
            background-color: rgb(76, 126, 176);
            color: black;
            text-align: center;
        }
        #movie {
            text-align: center;
        }
        h2,p{
            color:black;
            text-align:center;
        }
    </style>
    <?php include "../templates/styles.php"; ?>
</head>
<body>
    <?php include "../templates/header.php"; ?>
    <h1 id="heading">Travels & visas Daniela</h1>
    <h2 id="movie">Visas de Turismo USA</h2>
    <p>Tu mejor aliado</p>
        <ul id="profile">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" 
     alt="Logo HTML5" width="200">
            <h2>Daniela Ballen - Tramitadora de Visas</h2>
            <p>🇺🇸USA</p>
            <li>+100 procesos exitosos</li>
            <li>Mejor agencia para tramite de visas</li>
            <li>⭐️5</li>
        </ul>
        <div id="streak">
            Streak
            <ul>
                <li class="active-day">B</li>
                <li class="active-day">I</li>
                <li class="active-day">E</li>
                <li class="inactive-day">N</li>
                <li class="inactive-day">V</li>
                <li class="inactive-day">E</li>
                <li class="inactive-day">N</li>
                <li class="inactive-day">I</li>
                <li class="inactive-day">D</li>
                <li class="inactive-day">O</li>
            </ul>

        </div>
        <?php include "../templates/footer.php"; ?>
    </body>

</html>

