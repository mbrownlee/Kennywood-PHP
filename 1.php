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
    $sql = "SELECT ride.id, ride.ride_name, ride.ride_description, ride.park_area_id, park_area.area_name FROM ride INNER JOIN park_area ON ride.park_area_id = park_area.id WHERE park_area_id=1";
    $result = mysqli_query($init, $sql);
    echo '<img src="coaster.jpg" width="250" height="auto"  alt="coaster" />' , "</br>";
    
    echo "<h2> Coaster Canyon Rides </h2>";
    while ($row = mysqli_fetch_array($result)) {
        echo "*~*~*~*~*~*~*~*~*~*~*~*~" . "</br>" . "<h3>" . $row['ride_name'] . "</h3>" . " " . $row['ride_description'] . "</br> ";
    }
    $sql2 = "SELECT concession.id, concession.concession_name, concession.concession_description, concession.park_area_id, park_area.area_name FROM concession INNER JOIN park_area ON concession.park_area_id = park_area.id WHERE park_area_id=1";
    $result2 = mysqli_query($init, $sql2);
    echo "<h2> Coaster Canyon Food </h2>";
    while ($row = mysqli_fetch_array($result2)) {
        echo "*~*~*~*~*~*~*~*~*~*~*~*~" . "</br>" . "<h3>" . $row['concession_name'] . "</h3>" . " " . $row['concession_description'] . "</br> ";
    }

    ?>
    </br>
    </br>
 
    <style>
        .container {
            background-color: lightsteelblue;
        }
        h2 {
            color: darkblue;
            text-decoration: underline;
        }

    </style>
</body>

</html>