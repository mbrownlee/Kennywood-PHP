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
   
    echo '<img src="food.jpg" width="250" height="auto"  alt="food" />' , "</br>";
    $sql = "SELECT concession.id, concession.concession_name, concession.concession_description, concession.park_area_id, park_area.area_name FROM concession INNER JOIN park_area ON concession.park_area_id = park_area.id";
    $result = mysqli_query($init, $sql);
    echo "<h2> Get Yo Grub On!</h2>";

    while ($row = mysqli_fetch_array($result)) {
        echo "*~*~*~*~*~*~*~*~*~*~*~*~" . "</br>" . "<h3>" . $row['concession_name'] . "</h3>" . " " . $row['concession_description'] . "</br> " . "Located in: " . $row['area_name'] . "</br>";
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