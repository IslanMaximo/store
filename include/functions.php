<?php
    include_once "banco.php";

$cod = $_GET['cod'];

switch($cod){
    //função que vem do modal cadastrar produto em /prudutos/modal
    case "incluirProduto":
        incluirProduto();
        break;
    default:
        echo "Entrada não encontrada!";
        break;
}
    //strtolower == tudo minusculo ;
    //trim == Retira os espaços inúteis do início e do fim.
    //strtolower: Converte tudo para minúsculo.
function incluirProduto(){
    // declaração das variaveis do formulário.
    global $banco;
    $nome = strtolower(trim(strip_tags($_POST['nome'])));
    $codBarras = $_POST['codBarras'];
    // 1. Remove tags e espaços
    $valorV = trim(strip_tags($_POST['valorV']));
    // 2. Troca a vírgula pelo ponto
    $valorV = str_replace(',', '.', $valorV);
    $categoria = (int)$_POST['categoria']?? '1';
    $fabricante = (int)$_POST['fabricante']?? '1';
    $ncm = $_POST['ncm']?? '';
    $cest = $_POST['cest']?? '';
    $situacaoTributaria = $_POST['situacaoTriutaria']??'';
    $obs = $_POST['obs']?? '';

    $insert = $banco->query("INSERT INTO `produtos` ( `nome`, `codBarras`, `quantidade`, `valorVenda`, `valorCompra`, `estoqueMinimo`, `categoria`, `fabricante`, `ncm`, `cest`, `situacaoTributaria`, `obs`) VALUES ( '$nome', '$codBarras', '$quantidade', '$valorV', '0', '0', '$categoria', '$fabricante', '0', '0', 'null', 'null'); ");

    if($insert){
        echo "<script>window.alert('Produto cadastrado com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0.1; url=../estoque.php'>";
    } else {
        // Exibindo o erro técnico caso a query falhe (ajuda muito no desenvolvimento)
        $erroTecnico = $banco->error;
        echo "<script>window.alert('!!!ERRO!!!: $erroTecnico')</script>"; 
        echo "<meta http-equiv='refresh' content='5; url=../estoque.php'>";
    }
}
