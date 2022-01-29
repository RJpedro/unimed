<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIMED</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="area-cabecalho">

        <div id="area-logo">
            <img src="img/unimed_logo.png" alt="Logo Unimed" width="300px">
            <!-- <h1>Uni<span class="branco">med</span></h1> -->
        </div>

    </div>

    <!-- area principal do site -->
    <div id="area-principal">

        <!-- area de conteudo da pagina -->
        <div id="area-conteudo">
            <!-- abertura do conteudo -->
            <div class="conteudo">
                <form action="php/funcao.php" method="POST">
                    <p class="paragraph-align">
                        <label for="nome">Nome:</label>
                        <input class="input-style" type="text" name="txt_nome">
                    </p>

                    <p class="paragraph-align">
                        <label for="dataNascimento">Idade:</label>
                        <input class="input-style" type="text" name="txt_idade">
                    </p>

                    <p class="paragraph-align">
                        <label for="planoCategoria">Categoria do Plano:</label>
                        <select class="input-style" name="planoCategoria">
                            <option value="apartamento">Apartamento</option>
                            <option value="enfermaria">Enfermaria</option>
                        </select>
                    </p>

                    <input class="button" type="submit" value="Cacular Plano" name="btn_calcular_plano">
                    <input class="button" type="submit" value="Cadastrar" name="btn_cadastrar" >
                                 
                </form>
            </div>
            <!--// fechamento conteudo -->
            
        </div>
        <!-- fechamento da area de conteudo do site -->

        <!-- area lateral -->
        <div id="area-lateral">

            <!-- conteudo dependendtes -->
            <div class="conteudo-lateral">
                <h3>Dependentes</h3>
                <form action="php/listar.php" method="POST">
                    <div class="dependentes-lateral">
                        <p>Listagem dos dependentes e suas respectivas informações</p>
                        
                            <input style="width: 100%;" class="button" type="submit" value="Listar usuários" name="btn_listar" href="php/listas.php">
                    </div>
                </form>
            </div>
            <div class="conteudo-lateral">
                <h3>Gerar Relatório</h3>
                <form action="php/gerar_xml.php" method="POST">
                    <div class="dependentes-lateral">
                        <p>Clique no botão para gerar um Relatório com todos os dados dos cliente</p>
                        <input style="width: 100%;" class="button" type="submit" value="Gerar Relatório"
                            name="btn_gerarXML">
                    </div>
                </form>
            </div>

        </div>
        <!-- fechamento da area lateral -->

        <div id="rodape">
            Todos os direitos reservados a equipe <a href="pages/equipe.html">Geração 2000</a>
        </div>
        
</body>

</html>