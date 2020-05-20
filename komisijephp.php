<?php
$veza = new mysqli('localhost', 'root', '', 'smoke n skulls');
$ime = $_POST["ime"];
$prezime = $_POST["prezime"];
$mail = $_POST["mail"];
$adresa = $_POST["adresa"];
$artist = $_POST["artist"];
$stil = $_POST["stil"];
$papir = $_POST["papir"];
$opis = $_POST["opis"];
$query="INSERT INTO komisije (ime,prezime,mail,adresa,artist,stil,papir,opis) VALUES ('$ime','$prezime','$mail','$adresa','$artist','$stil','$papir','$opis')";
$query_run= mysqli_query($veza, $query);
if($query_run){
?>
<script type="text/javascript">
  alert("Uneseno");
  window.location="zahtjev.html";
</script>
<?php
}else{
  ?>
  <script type="text/javascript">
    alert("Greska");
  </script>
  <?php
}

?>
