<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title Document></title>
    <link rel="stylesheet" href="style4.css">
</head>

<body style="margin: 50px;">

    <video autoplay loop muted plays-inline class="back-video">
        <source src="video.mp4" type="video/mp4">
    </video>
    
    <h1>Sensor Data</h1>
    <br>
    <table class="table">
        <thread>
            <tr>
                <th>ID</th>
                <th>Location</th>
                <th>Time</th>
            </tr>     
        </thread>
        
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "erik";
            $database = "test";

            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error){
                die("Connection failed:" . $connection->connect_error);
            }

            $sql = "SELECT * FROM sensor";
            $result = $connection->query($sql);

            if(!$result) {
                die("Invalid query: " .$connection->error);
            }

            while($row=$result->fetch_assoc()){

                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["location"] . "</td>
                <td>" . $row["dataTime"] . "</td>
            </tr>";

            }

          
            ?>   
            

    </table>
</body>
</html>