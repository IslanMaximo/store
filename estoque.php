<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=keyboard_return" />
    <?php include_once "include/banco.php"; ?>
    <title>Document</title>
</head>
<body>
    <h2>Nome</h2>
    <a class="nav" href="menuPrincipal.html">
        VOLTAR 
    </a>
    <a class="nav" href="#" onclick="modalOpen()">| NOVO PRODUTO |</a>
    
    <hr>
    <form  action="">
        <label for="teste2">Filtrar por:</label>
        <input type="text" name="teste" id="teste2" list="teste">
        <datalist id="teste">
            <option value="Nome"></option>
            <option value="Categoria"></option>
            <option value="Codigo de Barras"></option>
        </datalist>
        <input style="width: 50%;" type="text" name="" id="">
        <input type="submit" name="" id="" value="Procurar">
    </form>
    <p>
        Ordernar por:
    <a class="nav" href="#"> Nome  |</a>
    <a class="nav" href="#"> Maior Valor  |</a>
    <a class="nav" href="#"> Menor Valor  |</a>
    <a class="nav" href="#"> Categoria  |</a>
    </p>

<!----------------------------------------MODAL----------------------------->
    <div id="estoque">
        <div class="modal">
           <div id="modall">
                <a href="#" class="sair" onclick="modalExit()">X</a>
                <form action="" autocomplete="off">
                    <fieldset>
                        <legend>DADOS PRINCIPAIS</legend>
                            <label for="nome">Nome: </label>
                            <input type="text" name="nome" id="nome" required>
                            <label for="codBarras">Codigo de Barras: </label>
                            <input type="number" name="codBarras" id="codBarras" required>
                            <br>

                            <label for="valorVenda">Valor de Venda R$: </label>
                            <input type="number" name="valorVenda" id="valorVenda" required placeholder="1.99">
                            <br>
                            <label for="categoria">Categoria: </label>
                            <input type="text" name="categoria" id="categoria" list="listCategoria" required>
                            <datalist id="listCategoria">
                                <option value="Salgados"></option>
                                <option value="Doces"></option>
                                <option value="Bebidas"></option>
                            </datalist>
                            <label for="fabricante">Fabricante: </label>
                            <input type="text" name="fabricante" id="fabricante" list="listFabricante">
                            <datalist id="listFabricante" required>
                                <option value="Sadia"></option>
                                <option value="Estabelecimento"></option>
                                <option value="Elma chips"></option>
                            <br>
                    </fieldset>
                    <fieldset>
                        <legend>DADOS FISCAIS</legend>
                            <label for="ncm">NCM: </label>
                            <input type="number" name="ncm" id="ncm">
                            <label for="cest">CEST</label>
                            <input type="number" name="cest" id="cest">
                            <br>
                            <label for="situacaoTributaria">Situação Tributária: </label>
                            <input type="text" name="situacaoTributaria" id="situacaoTributaria" list="list-situacaoTributaria" required>
                            <datalist id="list-situacaoTributaria">
                                <option value="Tributado"></option>
                                <option value="Isento"></option>
                                <option value="Não tributado"></option>
                            </datalist>
                            <br>
                            <textarea name="obs" id="obs" style="width: 99%; height: 70px; margin-top:7px;">OBS: </textarea>
                    </fieldset>
                    <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
                </form>
           </div>
        </div>
        
    </div>
    <footer>
    <p>&copy;Islan Maximo</p>
    </footer>
    <script>
        function modalOpen(){
            let modal = document.querySelector(`div.modal`)
            if(modal.style.display == 'none'){
                modal.style.display = 'block'
            }else{
                modal.style.display = 'none'
            }
        }
        function modalExit(){
            let modal = document.querySelector(`div.modal`)
            modal.style.display = 'none'
        }
    </script>
</body>
</html>