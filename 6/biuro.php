<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Podróże dalekie i bliskie</title>
    <link href="styl6.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Biuro podróży: WESOŁA WYPRAWA</h1>
    </header>
    <section>
        <?php
            if(!isset($_COOKIE["ciastko"])){
                setcookie("ciastko", "1", time() + 3600, "/");
                echo "<p>Witaj! Nasza strona używa ciasteczek</p>";
            }
            else
                echo "<p>Witaj ponownie na naszej stronie</p>";
        ?>
    </section>
    <section>
        <table>
            <tr>
                <td>
                    <img src="polska.jpg" alt="zwiedzanie Krakowa">
                </td>
                <td>
                    <img src="wlochy.jpg" alt="Wenecja i nie tylko">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="grecja.jpg" alt="gorące Greckie wyspy">
                </td>
                <td>
                    <img src="hiszpania.jpg" alt="Słoneczna Barcelona">
                </td>
            </tr>
        </table>
    </section>
    <section>
       <h3>Proponujemy wycieczki</h3>
       <ul>
            <li>autokarowe</li>
            <ol>
                <li>po Polsce z przewodnikiem</li>
                <li>do Niemiec i Czech</li>
            </ol>
            <li>samolotem</li>
            <ol>
                <li>wczasy w Grecji</li>
                <li>zwiedzanie Bardelony</li>
                <li>zwiedzanie Wenecji</li>
            </ol>
       </ul>
       <h3>Pobierz dokumenty</h3>
       <p><a href="regulamin.txt">Regulamin korzystania z usług biura podróży</a></p>
       <p><a href="http://galeria.pl">Tu znajdziesz zdjęcia z naszych wycieczek</a></p>
    </section>
    <footer>
        Stronę przygotował: jakubekgranie on GitHub
    </footer>
</body>
</html>