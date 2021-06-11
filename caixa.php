<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once 'menu.php'; #--menu-- ?> 
    
    <div class="entrada">
        
        <?php  require_once 'config.php'; #conexão banco

            $sql = "SELECT * FROM cadastro ";  #--saber as livres--
            $res = $conn->query($sql) or die($conn->error);
            $qtd = $res->num_rows;

           # $horaS = SELECT DATE_FORMAT($said_cadastro, '%H:%i:%S');  #saída
           # $horaE = SELECT DATE_FORMAT($ent_cadastro, '%H:%i:%S'); #entrada

           # function convHora($horaS, $horaE){
            #    $qtedHora = ($horaS - $horaE) *  3600;
             #   $valorHora = $qtdHora * 2,5;
                #
                #Print "<h2>$valorHora</h2>";
            #};
        ?>

    </div>

    <script src="script.js"></script>
</body>
</html>