<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCalc.css">
    <title>Calculadora</title>
</head>


<body>
<h1>Escolha a operação</h1>
    <div id="calc">
        <form action="#" method= "POST">
            <label>Numero 1: </label>
            <input type="text" name = "n1"> 
            <br><br>
            <label>Numero 2: </label>
            <input type="text" name = "n2"> 
            <br><br>
            <label >Operação: </label>
            <select name="operacao" id="operacao">
                <option value="+">Soma</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>
            <br>
            <br>
            <button type = "submit">Enviar</button>
        </form>

        <?php 
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $operacao = $_POST["operacao"];
        $result = 0;
        
        if($n1 == "" or $n2 == ""){
            echo '<script type="text/javascript">alert("Digite um numero em cada caixinha.")</script>';
        }
        else{
            if($operacao == "+"){
                $result = $n1 + $n2;
            }
            else if($operacao == "-"){
                $result = $n1 - $n2;
            }
            else if($operacao == "*"){
                $result = $n1 * $n2;
            }
            else if ($operacao == "/"){
                $result = $n1 / $n2;
            }
            else{
                $result = 0;
            }
        }
        
        if($result<> 0){
            echo '<script type="text/javascript">alert("O resultado é: ' . $result . '")</script>';
        }

        
        
       
        ?>

    </div>
</body>
</html>