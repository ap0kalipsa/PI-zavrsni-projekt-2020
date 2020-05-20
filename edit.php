<?php
$veza = new mysqli('localhost', 'root', '', 'smoke n skulls');
$id= $_POST["editid"];
if(isset($_POST["unos"])){
  $ime = $_POST["ime"];
  $prezime = $_POST["prezime"];
  $mail = $_POST["mail"];
  $adresa = $_POST["adresa"];
  $artist = $_POST["artist"];
  $stil = $_POST["stil"];
  $papir = $_POST["papir"];
  $opis = $_POST["opis"];
  $query="UPDATE komisije SET ime='$ime', prezime='$prezime', mail='$mail', adresa='$adresa', artist='$artist', stil='$stil', papir='$papir', opis='$opis' WHERE komisija_id = '$id'";
  $query_run= mysqli_query($veza, $query);
  if($query_run){
  ?>
  <script type="text/javascript">
    alert("Uneseno");
    window.location="ispis_komisija.php";
  </script>
  <?php
  }else{
    ?>
    <script type="text/javascript">
      alert("Greska");
    </script>
    <?php
  }
}

if(isset($_POST["obrisigumb"])){
  $query="DELETE FROM komisije WHERE komisija_id='$id'";
  $query_run= mysqli_query($veza, $query);
  if($query_run){
  ?>
  <script type="text/javascript">
    alert("Obrisano");
    window.location="ispis_komisija.php";
  </script>
  <?php
  }else{
    ?>
    <script type="text/javascript">
      alert("Greska");
    </script>
    <?php
  }
}

if(isset($_POST["editgumb"])){
$komisije = "SELECT * FROM komisije WHERE komisija_id='$id' LIMIT 1;";
$result = mysqli_query($veza, $komisije);
$result_check = mysqli_num_rows($result);

if ($result_check > 0)
{
while ($row = mysqli_fetch_assoc($result))
{
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8" author="Rea Franković" content="Art Blog"/>
      <title>Smoke & Skulls Arts</title>
      <link rel="stylesheet" href="css/mojizgled.css" type="text/css" />
      <link rel="icon" href="slike/favicon.ico" />
    </head>
    <body>
    <article>
    <form method="POST" action="edit.php" >
      <input type="text" name="editid" value="<?php echo $id; ?>" style="display:none;">
    <fieldset>
      <legend>Osobni podatci</legend>

      <br>
      <label for="ime">Ime:</label>
      <input id="ime" type="text" name="ime" value="<?php echo $row['ime']; ?>" required>
      <br>

                <br>
                <label for="prezime">Prezime:</label>
                <input id="prezime" type="text" name="prezime" value="<?php echo $row['prezime']; ?>" required>
                <br><br>

                <br>

      <label for="mail">E-mail:</label>
      <input id="mail" type="email" name="mail" value="<?php echo $row['mail']; ?>" required>
      <br><br>

                <label for="adresa">Adresa:</label>
                <input id="adresa" type="text" name="adresa" value="<?php echo $row['adresa']; ?>" required>
                <br><br>

      </fieldset>


      <fieldset>
      <legend>Opis komisije</legend>

                    <br>

                    <label for="artist">Umjetnik:</label>
                    <select id="artist" name="artist">
                        <option value="rea" <?php if($row['artist']=="rea")echo "selected" ?>>Rea Franković</option>
                        <option value="dino" <?php if($row['artist']=="dino")echo "selected" ?>>Dino Čujko</option>
                    </select>
                    <br><br>

      <label for="stil">Stil izrade:</label>
      <select id="stil" name="stil">
      <option value="lined" <?php if($row['stil']=="lined")echo "selected" ?>>Izvucen, bezbojan dizajn</option>
      <option value="b&w" <?php if($row['stil']=="b&w")echo "selected" ?>>Crno-bijel dizajn</option>
      <option value="color" <?php if($row['stil']=="color")echo "selected" ?>>Obojen dizajn</option>
      </select>
      <br><br>


      <label for="papir">Velicina papira:</label>


      <input type="radio" id="A4" name="papir" value="A4" <?php if($row['papir']=="A4")echo "checked='checked'" ?>>
      <label for="A4">A4</label>

      <input type="radio" id="A5" name="papir" value="A5"<?php if($row['papir']=="A5")echo "checked='checked'" ?>>
      <label for="A5">A5</label>

      <input type="radio" id="A6" name="papir" value="A6"<?php if($row['papir']=="A6")echo "checked='checked'" ?>>
      <label for="A6">A6</label>
      <br><br>


      <label for="opis">Opis motiva, kompozicije etc.:</label>
      <textarea name="opis" > <?php echo $row['opis']; ?></textarea>
      <br><br>
    </fieldset>

    <br>
      <button type="submit" name="unos" value="posalji" onclick="" style="	background-color: #262626;
                                                color:white;
                                                font-weight:bold;
                                                border:none;
                                                padding:10px 30px;
                                                border-radius:5px;">
        Editiraj </button>



    </form>
    </article>
  </body>
</html>
<?php
}
}
}
?>
