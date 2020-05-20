<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" author="Rea Franković" content="Art Blog"/>
    <title>Smoke & Skulls Arts</title>
    <link rel="stylesheet" href="css/mojizgled.css" type="text/css" />
    <link rel="icon" href="slike/favicon.ico" />
</head>
<body>
<header id="top">
    <center><a href="main.html">
        <img src="slike/logo.jpg" alt="Skulls&Roses logo"/>
    </a></center>
</header>

<nav>
    <ul>
        <li><a href="main.html">Naslovnica</a></li>
        <li><a href="galerija.html">Galerija</a>
        <li><a href="komisije.html">Komisije</a></li>
        <li><a href="ispis_komisija.php">Lista Komisija</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>
</nav>

<article>
    <?php
$veza = new mysqli('localhost', 'root', '', 'smoke n skulls');
$komisije = "SELECT * FROM komisije;";
$result = mysqli_query($veza, $komisije);
$result_check = mysqli_num_rows($result);


if ($result_check > 0)
    {
    while ($row = mysqli_fetch_assoc($result))
    {
    echo "ID: " . $row['komisija_id'] . "<br>";
    echo "Ime: " . $row['ime'] . "<br>";
    echo "Prezime: " . $row['prezime'] . "<br>";
    echo "Email: " . $row['mail'] . "<br>";
    echo "Adresa: " . $row['adresa'] . "<br>";
    echo "Umjetnik: " . $row['artist'] . "<br>";
    echo "Stil: " . $row['stil'] . "<br>";
    echo "Papir: " . $row['papir'] . "<br>";
    echo "Opis: " . $row['opis'] . "<br>";
    echo "<br>";
    ?>
    <form class="" action="edit.php" method="post">
      <input type="text" name="editid" value="<?php echo $row["komisija_id"]; ?>" style="display:none;">
      <input type="submit" name="editgumb" value="edit">
      <input type="submit" name="obrisigumb" value="obrisi">
    </form> <br> <hr> <br>
    <?php
    }
    }
    ?>


</article>
<footer id='kontakt'>

    <br>

    <ul>
        <li>
            <a href="https://www.instagram.com/ap0kalipsa/"target="_blank"><img src="slike/insta.png" alt="Instagram icon"  title="@ap0kalipsa" height:"20px"/></a>
            <b>|</b> Instagram:<a href="https://www.instagram.com/ap0kalipsa/"target="_blank"> @ap0kalipsa</a>
        </li>

        <li>
            <a href="tel:+385992505337"><img src="slike/phone.png" alt="Phone icon" title="+385 99 2505 337" height:"20px"/></a>
            <b>|</b> Phone:<a href="tel:+385992505337"> +385 99 2505 337</a>
        </li>

        <li>
            <a href="mailto:rea.frankovic@gmail.com"><img src="slike/mail.png" alt="Mail icon" title="rea.frankovic@gmail.com" height:"20px"/></a>
            <b>|</b> Mail:<a href="mailto:rea.frankovic@gmail.com"> rea.frankovic@gmail.com</a>
        </li>
    </ul>

    <a href="#top"><img src="slike/up.png" alt="Up icon"  title="Take me back up"  align="right"; height="50px";/></a>

    <br><br><center><hr><br>
        &copy;Smoke&Skulls; Rea Franković</center>
</footer>
</body>
</html>
