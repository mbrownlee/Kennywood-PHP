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

        $url = $row['id'];
        echo "*~*~*~*~*~*~*~*~*~*~*~*~" . "</br>" . "<h3>" . $row['area_name'] . "</h3>" . " " . $row['area_description'] . "</br> " . "<form action='$url.php'>" . "<button class='btn'>" . "Park Details" . "</button>" . "</form>" . "</br>";
        // '<a href="'.$url.'"><input type="button" name="' .  $row["area_name"]. '" value="'. "Park Details".'"></a>'. "</br> ";
    }


    ?>
    </br>
    </br>

    <style>
        .container {
            background-color: lightsteelblue;
        }

        .btn {
            padding: 10px 15px;
            background-color: darkblue;
            color: white;
            border: 1px solid #6D6981;
            background-color: 250ms;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: slateblue;
            color: white;
            border: 1px solid #6D6981;
            background-color: 250ms;
            border-radius: 5px;
        }
    </style>
</body>

</html>