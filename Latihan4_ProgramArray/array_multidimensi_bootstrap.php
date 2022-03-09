
<?php
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
            );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mobil</title>
    
</head>
<body>
    <div class="container">
        <table class="table table-hover table-striped">
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Sold</th>
            </tr>
            <?php foreach ($cars as $car) { ?>
                <tr>
                    <td><?php echo $car[0] ?></td>
                    <td><?php echo $car[1] ?></td>
                    <td><?php echo $car[2] ?></td>
                </tr>
                }
        </table>
    </div>
</body>
</html>  
