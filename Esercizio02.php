<?php
$lista=array(
    1=>"capone",
    2=>"dune",
    3=>"the hunt",
    4=>"bloodshot",
    5=>"tornare a vincere",
    6=>"l'uomo invisibile",
    7=>"sergio",
    8=>"tigertail",
    9=>"la famiglia willoughby",
    10=>"coffee & kareem",
    11=>"emma",
    12=>"spenser confidential",
);
echo "<h1> LISTA FILM : </h1>";
foreach($lista as $val){
    echo "$val </br>";
}

echo '
<form action="Esercizio02.php" method="get">
film <input type="text" name="film"><br><br>
posti <input type="text" name="posti"><br><br>
nome <input type="text" name="lname"><br><br>
cognome <input type="text" name="fname"><br><br>
<input type="submit" value="SALVA">
</form>
';
if(!empty($_GET["fname"])&&!empty($_GET["lname"])){
    if(!empty($_GET["film"])&&!empty($_GET["posti"]))
    echo "Nome: ".$_GET["fname"]."<br> cognome: ".$_GET["lname"]."<br> film: ".$_GET["film"]."<br> posti: ".$_GET["posti"];
}

for($i=0;$i<12;$i++){
    if($lista[$i]!=$_GET["film"])
    echo"sbagliato";
    }
?>