<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Opinie klientów</title>
    <link href="styl3.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Hurtownia spożywcza</h1>
    </header>
    <main>
        <h2>Opinie naszych klientów</h2>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "hurtownia");
            $result = mysqli_query($conn, 
            "SELECT zdjecie, imie, opinia FROM klienci
            INNER JOIN opinie
            ON klienci.id = opinie.Klienci_id
            WHERE Typy_id = 2 || Typy_id = 3");
            while($row = mysqli_fetch_array($result))
                echo "<div class='opinie'><img src='".$row["zdjecie"]."' alt='klient'><q>".$row['opinia']."</q><h4>".$row["imie"]."</h4></div>";
            mysqli_close($conn);
        ?>
    </main>
    <footer>
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </footer>
    <footer>
        <h3>Nasi top klienci</h3>
        <ol>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "hurtownia");
                $result = mysqli_query($conn, "SELECT imie, nazwisko, punkty FROM klienci ORDER BY 3 DESC LIMIT 3");
                while($row = mysqli_fetch_array($result))
                    echo "<li>".$row["imie"]." ".$row["nazwisko"].", ".$row["punkty"]."</li>";
            ?>
        </ol>
    </footer>
    <footer>
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </footer>
    <footer>
        <h3>Autor: jakubekgranie on github</h3>
    </footer>
</body>
</html>