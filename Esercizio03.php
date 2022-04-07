<?php
$lista=array(
    1=>"1-capone",
    2=>"2-dune",
    3=>"3-the hunt",
    4=>"4-bloodshot",
    5=>"5-tornare a vincere",
    6=>"6-l'uomo invisibile",
    7=>"7-sergio",
    8=>"8-tigertail",
    9=>"9-la famiglia willoughby",
    10=>"10-coffee & kareem",
    11=>"11-emma",
    12=>"12-spenser confidential",
);

echo "<h1> LISTA FILM : </h1>";




echo '
<form action="Esercizio03.php" method="get">
-capone:<input type="radio" name="film"><br>
-dune:<input type="radio" name="film"><br>
-the hunt:<input type="radio" name="film"><br>
-bloodshot:<input type="radio" name="film"><br>
-tornare a vincere:<input type="radio" name="film"><br>
-luomo invisibile:<input type="radio" name="film"><br>
-sergio:<input type="radio" name="film"><br>
-tigertail:<input type="radio" name="film"><br>
-la famiglia willoughby:<input type="radio" name="film"><br>
-coffee & kareem:<input type="radio" name="film"><br>
-emma:<input type="radio" name="film"><br>
-spenser confidential:<input type="radio" name="film"><br>
posti <input type="number" name="posti"><br><br>
nome <input type="text" name="lname"><br><br>
cognome <input type="text" name="fname"><br><br>
<input type="submit" value="SALVA">
</form>
';


if(!empty($_GET["fname"])&&!empty($_GET["lname"])){
    if(!empty($_GET["film"])&&!empty($_GET["posti"]))
    echo "Nome: ".$_GET["fname"]."<br> cognome: ".$_GET["lname"]."<br> film: ".$_GET["film"]."<br> posti: ".$_GET["posti"];
}




?>