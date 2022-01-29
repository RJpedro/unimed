<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIMED</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div id="area-cabecalho">

        <div id="area-logo">
            <img src="../img/unimed_logo.png" alt="Logo Unimed" width="300px">
            <!-- <h1>Uni<span class="branco">med</span></h1> -->
        </div>

    </div>

    <!-- area principal do site -->
    <div id="area-principal">

        <!-- area de conteudo da pagina -->
        <div id="area-conteudo-listagem">
            <!-- abertura do conteudo -->
            <div class="conteudo-listagem">
                <form action="#" method="POST">
                    <div class="conteudo-lateral">
                    <h3 class="listagem">Lista de Dependentes</h3>
                    <form action="php/listar.php" method="POST">
                        <div class="dependentes-listagem">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</td>
                                        <th>Nome do Cliente</td>
                                        <th>Data de Adesão</td>
                                        <th>Valor da Dependência</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($_POST['btn_listar'])) {
                                    try{
                                        $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=unimed","root","");
                                        $sql = "SELECT * FROM proposta ORDER BY nomeCliente ASC";
                                        foreach ($conecta->query($sql) as $row) {
                                            echo '<tr>';
                                            echo '<td>'. $row['id'] . '</td>';
                                            echo "\n";
                                            echo '<td>'. $row['nomeCliente'] . '</td>';
                                            echo "\n";
                                            echo '<td>'. $row['dataAdesao'] . '</td>';
                                            echo "\n";
                                            echo '<td>'. $row['totalPagar'] . '</td>';
                                        } 
                                    }
                                    catch(PDOException $erro){
                                        echo "Erro de conexão";
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    </div>
                </form>
            </div>
            <!--// fechamento conteudo -->
            
        </div>
        <!-- fechamento da area de conteudo do site -->
        <div id="rodape">
            Todos os direitos reservados a equipe <a href="pages/equipe.html">Geração 2000</a>
        </div>
        
</body>

</html>