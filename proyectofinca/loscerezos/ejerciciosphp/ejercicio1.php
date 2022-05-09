<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
    <div>
    <label>Ingrese su estrato</label><br>
    <input type="text" class="form-control" name="estrato"  required><br>
    <input type="submit">
    </div>
    <div>
    <label>Ingrese la cantidad de minutos a utilizar</label><br>
    <input type="number" class="form-control" name="minutos"  required><br>
    <input type="submit">
    </div>
    </form>
</body>
<?php
    $estrato=$_POST['estrato'];
    $minutos=$_POST['minutos'];
    echo 'Estrato al que pertenece:', $estrato.'<br>';
    echo 'Minutos a utilizar:' ,$minutos.'<br>';
    if ($estrato==1 and $minutos>0 and $minutos<500){
        echo 'Plan de datos básico, valor a pagar: $35000';
    }elseif($estrato==1 and $minutos>500){
        echo 'Plan de datos Promocional, valor a pagar: $90000';
    }elseif($estrato==2 and $minutos>0 and $minutos<500){
        echo 'Plan de datos Básico E2, valor a pagar: $50000';
    }elseif($estrato==2 and $minutos>500){
        echo 'Plan de datos Promocional E2, valor a pagar: $115000';
    }elseif($estrato==3 and $minutos>0 and $minutos<500){
        echo 'Plan de datos Básico E3, valor a pagar: $65000';
    }elseif($estrato3==3 and $minutos>500){
        echo 'Plan de datos Promocional E3, valor a pagar $140000';
    }else{
        echo'Se recomienda el plan de consumo ilimitado por 170000';
    }
    

?>
</html>