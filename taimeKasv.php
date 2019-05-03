<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Taime kasvatus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type = text/css>
            table tr {
                width: 20px;
                text-align: center;
            }
            table th {
                width: 70px;
            }
        </style>
    </head>
    <body>
        <?php
        $file = fopen("asjadeInternet.txt","r") or die("Error");
        fgets($file);
        ?>
        
        <table>
            <tr>
                <th>Temperatuur</th>
                <th>Niiskus</th>
                <th>Valgus</th>
                <th>Pinnase niiskus</th>
                <th>Taime kõrgus</th>
            </tr>
            
        <?php
        
        while(($row = fgets($file)) != false) {
            echo "<tr>";
            $col = explode(';',$row);
            
            foreach($col as $data) {
                    echo "<td>". trim($data)."</td>";
            }
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>