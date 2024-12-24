<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Wrocław</title>
    <link href="styl2.css" rel="stylesheet">
</head>
<body>
    <header>
        <img src="logo.png" alt="meteo">
    </header>
    <header>
        <h1>Prognoza dla Wrocławia</h1>
    </header>
    <header>
        <p>maj, 2019 r.</p>
    </header>
    <main>
        <table>
            <tr>
                <th>
                    DATA
                </th>
                <th>
                    TEMPERATURA W NOCY
                </th>
                <th>
                    TEMPERATURA W DZIEŃ
                </th>
                <th>
                    OPADY [mm/h]
                </th>
                <th>
                    CIŚNIENIE [hPa]
                </th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "prognoza");
                $result = mysqli_query($conn, 
                   "SELECT * FROM pogoda 
                           WHERE miasta_id = 1
                           ORDER BY data_prognozy ASC;");
                while($row = mysqli_fetch_array($result))
                    echo "<tr><td>".$row["data_prognozy"]."</td><td>".$row["temperatura_noc"]."</td><td>".$row["temperatura_dzien"]."</td><td>".$row["opady"]."</td><td>".$row["cisnienie"]."</td></tr>";
                mysqli_close($conn);
            ?>
        </table>
    </main>
    <section>
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </section>
    <section>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <footer>
        <p>Stronę wykonał: jakubekgranie on github</p>
    </footer>
</body>
</html>