<!DOCTYPE html>
<html>

<head>
    <title>Daniela</title>
    <?php include "../templates/styles.php"; ?>
</head>

<body>
    <?php include "../templates/header.php"; ?>
    <header>
        <h1>Bienvenidos a mi tienda de postres</h1>
    </header>
    <h2>Compra el mejor postre del mundo</h2>
    <main>
        <img src="https://images.unsplash.com/photo-1542831371-d531d36971e6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
            alt="postre" width="300" height="200" />

        <form>
            <label for="size"> Size:</label>
            <select>
                <option>small</option>
                <option>big</option>
                <option>large</option>
            </select>

            <!--color-->
            </select>
            <label for="Color">Color:</label>
            <select id="Color" name="color">
                <option value="Red">Red</option>
                <br />
                <option value="Blue">Blue</option>
                <br />
                <option value="Yellow">Yellow</option>
                <br />
                <option value="write">Write</option>
                <br />
                <button type="Color">Color</button>
            </select><br><br>

            <!--name-->
            <label for="nombre"> Name</label>
            <input type="text" id="nombre" name="nombre" /><br /><br />
            <!--email-->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" /><br /><br />
            <!--boton de envio-->
            <input type="submit" value="Submit" />
        </form>
    </main>

    <?php include "../templates/footer.php"; ?>
</body>

</html>