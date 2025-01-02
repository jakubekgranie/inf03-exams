<?php
    $conn = mysqli_connect("localhost", "root", "", "ee09");
    $zapytanie = "INSERT INTO ratownicy(nrKaretki, ratownik1, ratownik2, ratownik3) VALUES(".$_POST["nrKaretki"].", '".$_POST["ratownik1"]."', '".$_POST["ratownik2"]."', '".$_POST["ratownik3"]."');";
    mysqli_query($conn, $zapytanie);
    echo "Do bazy zostało wysłane zapytanie: ".$zapytanie;
    mysqli_close($conn);
?>