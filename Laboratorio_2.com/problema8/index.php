<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema8</title>
</head>
<body>
    
    <?php 
    
    $inver1=$_GET["Inversion1"];
    $inver2=$_GET["Inversion2"];
    $inver3=$_GET["Inversion3"];
    $totalinversion= $inver1 + $inver2 + $inver3;
    $porcentajeinversion1= ($inver1 / $totalinversion) * 100;
    $porcentajeinversion2= ($inver2 / $totalinversion) * 100;
    $porcentajeinversion3= ($inver3 / $totalinversion) * 100;

    ?>
    <table class="table table-info table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Inversiones</th>
                <th scope="col">Porcentaje Inversion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> primera inversion</th>
                <td><?php
                echo "%".$porcentaje_inversion1;?></td>
            </tr>
            <tr>
                <th scope="row">segunda inversion</th>
                <td><?php
                echo "%".$porcentaje_inversion2;?></td>
            </tr>
            <tr>
                <th scope="row"> tercera inversion</th>
                <td><?php
                echo "%".$porcentaje_inversion3;?></td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>