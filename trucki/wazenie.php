<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ważenie samochodów ciężarowych</title>
    <link href="styl.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Ważenie pojazdów we Wrocławiu</h1>
    </header>
    <header>
        <img src="obraz1.png" alt="waga">
    </header>
    <section>
        <h2>Lokalizacje wag</h2>
        <ol>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "wazenietirow");
                $res = mysqli_query($conn, "SELECT ulica FROM lokalizacje;");
                while($row = mysqli_fetch_array($res))
                    echo "<li>ulica ".$row["ulica"]."</li>";
                mysqli_close($conn);
            ?>
        </ol>
        <h2>Kontakt</h2>
        <a href="mailto:wazenie@wroclaw.pl">napisz</a>
    </section>
    <section>
        <h2>Alerty</h2>
        <table>
            <tr>
                <th>
                    rejestracja
                </th>
                <th>
                    ulica
                </th>
                <th>
                    waga
                </th>
                <th>
                    dzień
                </th>
                <th>
                    czas
                </th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "wazenietirow");
                $res = mysqli_query($conn, "SELECT rejestracja, waga, dzien, czas, ulica FROM wagi INNER JOIN lokalizacje ON wagi.lokalizacje_id = lokalizacje.id WHERE waga > 5;");
                while($row = mysqli_fetch_array($res))
                    echo "<tr><td>".$row["rejestracja"]."</td><td>".$row["ulica"]."</td><td>".$row["waga"]."</td><td>".$row["dzien"]."</td><td>".$row["czas"]."</td></tr>";
                mysqli_close($conn);
            ?>
        </table>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "wazenietirow");
            mysqli_query($conn, "INSERT INTO wagi(waga, rejestracja, dzien, czas) VALUES (FLOOR(RAND() * 10) + 1, 'DW12345', CURRENT_DATE(), CURRENT_TIME());");
            header("refresh: 10");
            mysqli_close($conn);
        ?>
    </section>
    <section>
        <img src="obraz2.jpg" alt="tir">
    </section>
    <footer>
        <p>Stronę wykonał: jakubekgranie on GitHub</p>
    </footer>
</body>
</html>