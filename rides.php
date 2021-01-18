<html>

<body class="container">

    <style>
        .body {
            background-color: lightsteelblue;
        }
       
    </style>
      
    <?php

    include('nav.php');
   
   
    include_once 'db_sql.php';
    $sql = "SELECT ride.id, ride.ride_name, ride.ride_description, ride.park_area_id, park_area.area_name FROM ride INNER JOIN park_area ON ride.park_area_id = park_area.id";
    $result = mysqli_query($init, $sql);
    echo "<h2> Our Rides </h2>";
    echo '<img src="amusement-park.jpg" width="350" height="auto"  alt="park" />' , "</br>";

    while ($row = mysqli_fetch_array($result)) {
        echo "*~*~*~*~*~*~*~*~*~*~*~*~" . "</br>" . "<h3>" . $row['ride_name'] . "</h3>" . " " . $row['ride_description'] . "</br> " . "Located in: " . $row['area_name'] . "</br>";
    }


    ?>
    </br>
    </br>
 
    <style>
        .container {
            background-color: lightsteelblue;
        }
    </style>
</body>

</html>