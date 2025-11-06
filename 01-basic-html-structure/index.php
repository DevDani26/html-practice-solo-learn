<!DOCTYPE html>
<html lang="en">
<?php include "../templates/styles.php"; ?>
<style>
main p {
    color: purple;
}

main b {
    color: yellow;
}


main p {
    color: white;
    background-color: black;
}

main em {
    color: plum;
    background-color: pink;
}




main h1 {
    color: purple;
    text-align: center;
}

main u {
    color: orange;
}

main .solo h1 u {
    color: seagreen;
}
</style>
</head>

<body>
    <?php include "../templates/header.php"; ?>
    <main>
        <p>Our back to <u>school</u> sale from July 15th.</p>
        <p>
            <em>Programming</em> is a valuable skill in today's digital age. Learning
            to code is a journey that can open up <u>many opportunities.</u>
            <b>SI SENORES, BIENVENIDOS</b>
        </p>

        <div class="solo">
            <h1>Back to <u>school!</u></h1>
        </div>
    </main>

    <?php include "../templates/footer.php"; ?>
</body>

</html>