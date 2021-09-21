<?php

    if(isset($_POST['btn_gerarXML']))
    {
        try{
            $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=unimed","root","");
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dados=$conecta->query("SELECT * FROM proposta");

            $xml= new XMLWriter();
            $xml->openMemory();
            $xml->startDocument("1.0","UTF-8");

            $xml->startElement("proposta");
            foreach($dados as $linha){
                $xml->startElement("cliente");
                    $xml->writeElement("nomeCliente",$linha['nomeCliente']);
                    $xml->writeElement("dataAdesao",$linha['dataAdesao']);
                    $xml->writeElement("totalPagar",$linha['totalPagar']);
                $xml->endElement();
            }
            $xml->endElement();
            $file=fopen("dadosClientebanco.xml","w");
            fwrite($file,$xml->outputMemory(true));
            fclose($file);

            echo "<h1>Arquivo gravado com Sucesso</h1>";
        }
        catch(PDOException $erro){
            echo "Erro de conexão";
        }
    }
    ?>