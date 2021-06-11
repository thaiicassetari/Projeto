<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once 'menu.php'; #--menu-- ?> 
    
    <div class="entrada">
        <form class="formulario2" action="" method="POST">
            <div class="form-group">
                <label>Placa Carro: </label>
                <?php  include("config.php"); #conexão banco
                    $sql = "SELECT * FROM cadastro";  #placa do carro a sair
                    $res = $conn->query($sql) or die($conn->error);
                    $qtd = $res->num_rows;

                    if ($qtd > 0) {
                        print "<select name='id_cadastro' class='form-control'>";
                        print "<option>&#10146 Selecione </option>";
                        while ($row = $res->fetch_object()) {
                            print "<option value='".$row->id_cadastro."'>".$row->placa_cadastro."</option>";
                        }
                        print "</select>";
                    } 
                    else {
                        print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
			        }
            
                ?>
            </div>
            <div class="form-group">
                
            </div>
            <div class="form-group">
                <input type="hidden" name="said_cadastro" value="<?= date('d/m/Y à\s H:i:s') ?>"><br><br>
		        <button class="bsaida" type="submit" name="addSaida" onclick="id_cadastro=.$row->id_cadastro">Enviar</button>
	        </div>
        </form>

        <?php require_once 'config.php'; #conexão com banco

            if(isset($_POST['addSaida'])){
                if( empty($_POST['said_cadastro'])){
                    echo "Preencha a placa!!";
                } else {
                    $saida = $_POST['said_cadastro'];
                    $id = $_POST['id_cadastro'];

                    $sql = "UPDATE cadastro SET said_cadastro = '".date("Y-m-d H:i:s")."'
                     WHERE id_cadastro=".$_POST["id_cadastro"];
                      

                    $res = $conn->query($sql) or die($conn->error);

                    if ($res == true) {
                        print "<script>alert('Registrada saída!!');</script>";
                        print "<script>location.href='caixa.php';</script>";
                    } else {
                        print "<div class='alert alert-danger'>Erro ao registrar, tente novamente!! </div>";
                        print "<script>location.href='caixa.php';</script>";
                              
                    }
                }
            }
        ?>

    </div>

    <script src="script.js"></script>
</body>
</html>