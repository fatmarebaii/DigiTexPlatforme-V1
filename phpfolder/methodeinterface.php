<?php
header('Content-Type: application/json');
// Connexion à la base de données

$con = mysqli_connect("127.0.0.1", "root", "", "db_isa");
//$con = mysqli_connect("localhost", "root", "", "db_isa");
if ($con) {
    // echo "DB connected";
} else {
    echo "DB connection is failed";
    exit();
}

//Récupération des données totale de la table p1_of

$sql="SELECT * FROM `p1_of`";
$of = mysqli_query($con, $sql);

// Récupération des données de la table p1_of avec des Ofs Distincts
$sqlof = "SELECT DISTINCT p1_of.of_num , client, assembly_shop , of_state , p3_gamme.model FROM `p1_of` LEFT JOIN `p3_gamme` ON p1_of.of_num= p3_gamme.of_num;";
$p1_of = mysqli_query($con, $sqlof);

// Récupération des données de la table p2_packet
$sqlpacket = "SELECT DISTINCT`pack_num`, `of_num`,`qte` FROM `p2_packet`";
$p2_packet = mysqli_query($con, $sqlpacket);

// Stockage des données dans un tableau associatif
if (mysqli_num_rows($of) > 0) {
    while($rowp_of_all = mysqli_fetch_assoc($of)) {
        $of_all[] = $rowp_of_all;
    }
}

if (mysqli_num_rows($p1_of) > 0) {
    while($rowp1_of = mysqli_fetch_assoc($p1_of)) {
        $of_distinct[] = $rowp1_of;
    }
}

if (mysqli_num_rows($p2_packet) > 0) {
    while($rowp2_packet = mysqli_fetch_assoc($p2_packet)) {
        $pack[] = $rowp2_packet;
    }
}

$of=[];
$client=[];
$atelier=[];
$state=[];
$qte=[];
$model=[];
$gammeof=[];

for ($i=0; $i<count($of_distinct); $i++){
    $of[$i]=$of_distinct[$i]['of_num'];
    $client[$i]=$of_distinct[$i]['client'];
    $atelier[$i]=$of_distinct[$i]['assembly_shop'];
    $state[$i]=$of_distinct[$i]['of_state'];
    $model[$i]=$of_distinct[$i]['model'];

    //Atelier (si un of se fait sur plus d'un seul atelier)
    for($j=0; $j<count($of_all); $j++){
        if ($of_distinct[$i]['of_num']==$of_all[$j]['of_num'] && $of_distinct[$i]['assembly_shop']!=$of_all[$j]['assembly_shop']){

            $atelier[$i]=$atelier[$i].$of_all[$j]['assembly_shop'];}
    }

    //Quantité de chaque OF
    $qte[$i]=0;
    for($l=0; $l<count($pack); $l++){
        if ($of_distinct[$i]['of_num']==$pack[$l]['of_num']){
            $qte[$i]+=$pack[$l]['qte'];
        }
    }

    $methode[$i]= array (["of"=>$of[$i],
"Client"=>$client[$i],
"Atelier"=>$atelier[$i],
"Statut"=>$state[$i],
"qte"=>$qte[$i],
"model"=>$model[$i]
]);
}
// Fermeture de la connexion à la base de données
mysqli_close($con);

// Envoi des données au format JSON
header('Content-Type: application/json');
echo json_encode($methode);