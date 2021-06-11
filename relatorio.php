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
    <?php require_once 'menu.php'; 
        
    ?>
    
    <div class="entrada">
        <?php 
        require_once 'config.php';

        $sql = "SELECT * FROM cadastro ";
        $res = $conn->query($sql) or die($conn->error);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<strong><p>Encontrou <strong>$qtd</strong> resultado(s)</p></strong>";

            print "<table class='t1'>";
            print "<tr>";
            print "<th >Id</th>";
            print "<th>Nome</th>";
            print "<th>CNH</th>";
            print "<th>Marca Carro</th>";
            print "<th>Placa Carro</th>";
            print "<th>Entrada</th>";
            print "<th>Saída</th>";
            while($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>".$row->id_cadastro."</td>";
                print "<td>".$row->nome_cadastro."</td>";
                print "<td>".$row->cnh_cadastro."</td>";
                print "<td>".$row->marca_cadastro."</td>";
                print "<td>".$row->placa_cadastro."</td>";
                print "<td>".$row->ent_cadastro."</td>";
                print "<td>".$row->said_cadastro."</td>";
                print "</tr>";
            };
            print "</table>";
        } else {
            print "<div><strong>Nenhum dado encontrado!!</strong></div>";
        }


        
        
        
        
        
        ?>
        
    </div>

    <script src="script.js"></script>
</body>
</html>