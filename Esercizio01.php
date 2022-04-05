<?php
echo '
<form action="Esercizio01.php" method="get">
nome <input type="text" name="fname"><br><br>
cognome <input type="text" name="lname"><br><br>
<input type="submit" value="SALVA">
</form>
';


if(!empty($_GET["fname"])&&!empty($_GET["lname"])){
    echo "Nome: ".$_GET["fname"]." cognome: ".$_GET["lname"];
}
?>