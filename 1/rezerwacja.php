<?php
    if(isset($_POST["data"], $_POST['ilosc'], $_POST['telefon'], $_POST['zgoda'])){
        echo "Dodano rezerwację do bazy";
        $conn = mysqli_connect("localhost", "root", "", "baza");
        mysqli_query($conn, "INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES ('".$_POST['data']."', ".$_POST['ilosc'].", '".$_POST['telefon']."');");
        mysqli_close($conn);
    }
?>