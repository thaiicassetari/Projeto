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
    <?php require_once 'menu.php'; ?> <!--menu-->

    <div class="entrada">
        <div class="livre" id="livre"> <!--livres-->
            <?php require_once 'config.php';
                    
                    $sql = "SELECT * FROM cadastro ";  #--saber as livres--
                    $res = $conn->query($sql) or die($conn->error);
                    $qtd = $res->num_rows;
                    $totalVagas = 50 - $qtd;
            
                    print "<p class='livre1'> Vagas livres:<strong>$totalVagas</strong></p>";
                
            
            ?>
            
        </div>
        <div class="ocupada" id="ocupada"> <!--ocupadas-->
            <?php require_once 'config.php';
                
                    $sql = "SELECT * FROM cadastro ";  #--saber as ocupadas--
                    $res = $conn->query($sql) or die($conn->error);
                    $qtd = $res->num_rows;
            
                    print "<p class='ocupada1'><strong>$qtd</strong> Vagas ocupadas!</p>";
                
            
            ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>