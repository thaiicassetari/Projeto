<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once 'menu.php'; ?>
    <div class="entrada">
        

        <?php  require_once 'config.php';  #conexão / cadastrar no banco
            if(isset($_POST['addCadast'])) {
                if( empty($_POST['nome_cadastro']) || empty($_POST['cnh_cadastro']) 
                || empty($_POST['marca_cadastro']) || empty($_POST['placa_cadastro'])
                || empty($_POST['ent_cadastro']) ) {
                    echo "Preecha todos os campos!!";
                } else {
                    $nome = $_POST["nome_cadastro"];
                    $cnh = $_POST["cnh_cadastro"];
                    $marca = $_POST["marca_cadastro"];
                    $placa = $_POST["placa_cadastro"];

                    $sql = "INSERT INTO cadastro (nome_cadastro, cnh_cadastro, 
                    marca_cadastro, placa_cadastro, ent_cadastro)
                    VALUES ('{$nome}', '{$cnh}','{$marca}', '{$placa}', '".date("Y-m-d H:i:s")."')";

                    $res = $conn->query($sql) or die($conn->error);
                    print "<script>alert('Cadastrado com sucesso!!');</script>";
                    print "<script>location.href='index.php';</script>";
                }
            }
        
        ?>

        <div>
            <form class="formulario" action="" method="POST" >
                <div>
                    <label for="nome_cadastro"> Nome: </label>
                    <input type="text" id="nome_cadastro" name="nome_cadastro"  class="form-group"><br><br>
                </div>
                <div class="forml">
                    <label for="cnh_cadastro">CNH: </label>
                    <input type="text" id="cnh_cadastro" name="cnh_cadastro"><br><br>
                </div>
                <div>
                    <label for="marca_cadastro">Marca Carro: </label>
                    <input type="text" id="marca_cadastro" name="marca_cadastro"><br><br><br>
                </div>
                <div>
                    <label for="placa_cadastro">Placa Carro: </label>
                    <input type="text" id="placa_cadastro" name="placa_cadastro"><br><br><br>
                </div>
                <div>
                <input type="hidden" name="ent_cadastro" value="<?= date('d/m/Y à\s H:i:s') ?>">
                </div>
                <div class="form-group">
                    <button class="bsaida" type="submit" name="addCadast">ENTRAR</button>
                </div>
            </form>
        </div>

    </div>        
    
</body>
</html>