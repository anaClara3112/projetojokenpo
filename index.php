<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JoKenPo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1 align="center">Pedra, Papel e Tesoura</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       
            <table align="center">
                <tr>
                    <td>
                        <button type="submit" name="pedra" value="0">
                            <img src="img/pedra.png" width="150" height="120">
                        </button>
                    </td>
                    <td>
                        <button type="submit" name="papel" value="1">
                            <img src="img/papel-removebg-preview.png" width="150" height="120">
                        </button>
                    </td>
                    <td>
                        <button type="submit" name="tesoura" value="2">
                            <img src="img/tesoura.png" width="150" height="120">
                        </button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php

            if(isset($_POST["pedra"])){
                jogar($_POST["pedra"]);
            }else if(isset($_POST["papel"])){
                jogar($_POST["papel"]);
            }else if(isset($_POST["tesoura"])){
                jogar($_POST["tesoura"]);
            }

            function jogar($op){

                $lance = rand(0, 2);
                echo " <br> <br> <center> ";
                switch($lance){
                    case 0:
                        echo "<img src='img/pedra.png' width='150' height='120'>";
                        break;
                    case 1:
                        echo "<img src='img/papel-removebg-preview.png' width='150' height='120'>";
                        break;
                    case 2:
                        echo "<img src='img/tesoura.png' width='150' height='120'>";
                }

                if($op == $lance){
                    echo "<h3> Empate </h3>";
                }else if($op == 0 and $lance == 2){
                    echo "<h3> Você venceu! </h3>";                    
                }else if($op == 1 and $lance == 0){
                    echo "<h3> Você venceu! </h3>";
                }else if($op == 2 and $lance == 1){
                    echo "<h3> Você venceu! </h3>";
                }else{
                    echo "<h3> Você perdeu! </h3>";
                }

                echo " </center>";

            }

    ?>

</body>
</html>