<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aprende HTML con Dani</title>
    <?php include "templates/styles.php"; ?>
    <style>
    /* ---- MAIN CONTENT ---- */
    main {
        padding-top: 120px;
        /* espacio para que no tape el header */
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background: #99b5f5;
        padding: 24px;
        border-radius: 1px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h1 {
        color: #222;
        margin-bottom: 20px;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li:hover {
        transform: scale(1.02);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body class="jolly-lodger-regular">

    <?php include "templates/header.php"; ?>

    <main>
        <div class="container">
            <h1>Aprende HTML con Dani</h1>
            <ul>
                <li>Conoce sobre HTML</li>
                <li>Practica HTML</li>
                <li>Estudia HTML</li>
                <li>Gana dinero con HTML</li>
                <li>Trabaja con HTML</li>
            </ul>
        </div>
    </main>
</body>

</html>