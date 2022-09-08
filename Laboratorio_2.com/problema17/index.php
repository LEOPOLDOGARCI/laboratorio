<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema17</title>
</head>
<body>  
<?php  
    $valor=5;
    ?>




<table class="table">
    <thead>
        <tr>
            <th scope="col">tabla de multiplicacion</th>
            <th scope="col">respuestas</th>
        </tr>
    </thead>
    <tbody>
        <?php for($n=0; $n<=12; $n++){?> 
        <tr>
            <th scope="row"><?php echo $n ?></th>
            <td><a href="indextabla.php?numero=<?php echo $n ?>"><button type="button" class="btn btn-dark">Ver Tabla</button></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>