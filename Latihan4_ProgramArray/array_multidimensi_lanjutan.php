<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
            );
         // var_dump($cars);
        // echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        // echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        // echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        // echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        
      
        // for ($row = 0; $row < 4; $row++) {
        //     echo "<p><b>Row number $row</b></p>";
        //     echo "<ul>";

        //     for ($col = 0; $col < 3; $col++) {
        //         echo "<li>".$cars[$row][$col]."</li>";
        //     }
        //     echo "</ul>";
        // }

?>
    <table border="1" style="border-collapse:collapse">
        <tr style="background:#999">
            <td>Nama</td>
            <td>Stock</td>
            <td>Solid</td>
        </tr>
        <tr>
            <td><?php echo $cars[0][0]?></td>
            <td><?php echo $cars[0][1]?></td>
            <td><?php echo $cars[0][2]?></td>
        </tr>
        <tr>
            <td><?php echo $cars[1][0]?></td>
            <td><?php echo $cars[1][1]?></td>
            <td><?php echo $cars[1][2]?></td>
        </tr>
        <tr>
            <td><?php echo $cars[2][0]?></td>
            <td><?php echo $cars[2][1]?></td>
            <td><?php echo $cars[2][2]?></td>
        </tr>
        <tr>
            <td><?php echo $cars[3][0]?></td>
            <td><?php echo $cars[3][1]?></td>
            <td><?php echo $cars[3][2]?></td>
        </tr>


    </table>
</body>
</html>  


