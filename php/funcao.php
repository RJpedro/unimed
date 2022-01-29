<?php
$dataAdesao=date("d/m/Y");
$nomeCliente=$_POST['txt_nome'];
$idadeCliente=$_POST['txt_idade'];
$categoriaPlano=$_POST['planoCategoria'];
$precoPlano=0;
$resultado="echo'<script>alert('$precoPlano')</script>'";

function calcular($precoPlano, $idadeCliente){
    global $precoPlano;
    global $categoriaPlano;
    if($categoriaPlano == 'enfermaria')
    {
        if($idadeCliente > 0 && $idadeCliente <= 18){
            $precoPlano=193.00;
        }
        else if($idadeCliente > 18 && $idadeCliente <= 23){
            $precoPlano=221.00;
        }
        else if($idadeCliente > 23 && $idadeCliente <= 28){
            $precoPlano=255.00;
        }
        else if($idadeCliente > 28 && $idadeCliente <= 38){
            $precoPlano=337.00;
        }
        else if($idadeCliente > 38 && $idadeCliente <= 53){
            $precoPlano=616.00;
        }
        else if($idadeCliente > 53){
            $precoPlano=800.00;
        }
    }
    else {
        if($idadeCliente > 0 && $idadeCliente <= 18){
            $precoPlano=282.00;
        }
        else if($idadeCliente > 18 && $idadeCliente <=23){
            $precoPlano=325.00;
        }
        else if($idadeCliente > 23 && $idadeCliente <=28){
            $precoPlano=373.00;
        }
        else if($idadeCliente > 28 && $idadeCliente <=38){
            $precoPlano=494.00;
        }
        else if($idadeCliente > 38 && $idadeCliente <=53){
            $precoPlano=902.00;
        }
        else if($idadeCliente > 53){
            $precoPlano=1200.00;
        }
    }
    return $precoPlano;
}
if (isset($_POST['btn_calcular_plano'])) {
    echo calcular($precoPlano, $idadeCliente);

}else if(isset($_POST['btn_cadastrar'])){
    calcular($precoPlano, $idadeCliente);
    try{
        $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=unimed","root","");
        $texto="INSERT INTO proposta(nomeCliente,dataAdesao,totalPagar) VALUE('".$nomeCliente."','".$dataAdesao."','".$precoPlano."')";
        $conecta->exec($texto);
        echo "<script>alert('Dados gravados com sucesso!')</script>";
    }
    catch(PDOException $erro)
    {
        echo "Falha ao conectar com o bancco";
    }
}
 