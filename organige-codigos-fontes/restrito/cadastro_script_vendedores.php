<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alteração de Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
                include "conexao.php";

                $nome = clear($conn, $_POST['nome']);
                $endereco = clear($conn, $_POST['endereco']);
                $telefone = clear($conn, $_POST['telefone']);
                $email = clear($conn, $_POST['email']);
                $data_nascimento =  $_POST['data_nascimento'];

                $foto = $_FILES['foto'];
                $nome_foto = mover_foto($foto);
                if ($nome_foto == 0) {
                    $nome_foto = null;
                }

                $sql = "INSERT INTO vendedores (nome, endereco, telefone, email, data_nascimento, foto) VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_nascimento', '$nome_foto');";

                if (mysqli_query($conn, $sql)) {            
                    if ($nome_foto != null) {            	
                        echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                    }
                    mensagem("$nome cadastrado com sucesso!",'success');
                  } else
                    mensagem("$nome NÃO cadastrado!",'danger');
            ?>

            <hr>
            <a href="index.php" class="btn btn-primary">Voltar</a>            
        </div>
    </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
</body>

</html>