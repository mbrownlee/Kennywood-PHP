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
   
    echo '<img src="carnival-party.jpg" width="250" height="auto"  alt="flags" />' . '<img src="carnival-party.jpg" width="250" height="auto"  alt="flags" />' . "</br>";
    $sql = "SELECT park_area.id, park_area.area_name, park_area.area_description FROM park_area";
    $result = mysqli_query($init, $sql);
    echo "<h2> Welcome to Kennywood!</h2>";

    while ($row = mysqli_fetch_array($result)) {
        echo "*~*~*~*~*~*~*~*~*~*~*~*~" . "</br>" . "<h3>" . $row['area_name'] . "</h3>" . " " . $row['area_description'] . "</br> " ;
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