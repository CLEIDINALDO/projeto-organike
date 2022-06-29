<?php
    include "conexao.php";
    function criarVendedor($nome, $endereco, $telefone, $email, $data_nascimento) {
                            $conn = mysqli_connect();
                   
                            $sql = "INSERT INTO vendedores (nome, endereco, telefone, email, data_nascimento) VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_nascimento');";
                   
                            if ($conn->query($sql) === TRUE) {
                                return TRUE;
                            } else {
                                echo "Erro ao inserir" . $conn->error;
                            }
                            $conn->close();
                        }
?>