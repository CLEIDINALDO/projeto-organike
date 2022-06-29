<!DOCTYPE html>
<html>
<?php include("layout/head.php"); ?>

<body>

    <div class="container">
        <header>
            <?php include "layout/header.php"; ?>
        </header>
        <nav>
            <?php include "layout/nav.php"; ?>
        </nav>
        <main>
            <form>
                <fieldset>
                    <legend>Mande sua mensagem:</legend>
                    <label>Nome:</label>
                    <input type="text" name="nome">
                    <label>E-mail:</label>
                    <input type="email" name="email">
                    <label>Telefone:</label>
                    <input type="text" name="telefone">
                    <label>Sua mensagem</label>
                    <textarea name="mensagem">Mande sua mensagem!</textarea>
                    <input type="submit" value="Enviar mensagem">
                </fieldset>
            </form>
        </main>

        <footer>
            <?php include "layout/footer.php"; ?>
        </footer>
    </div>

</body>

</html>