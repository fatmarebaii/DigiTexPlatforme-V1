<?php

header("content-Type: application/json");
require_once 'config.php';


//QTE ENGAGEE TOTALE 
$quer = "SELECT `pack_qte`,'prod_line'  FROM `p4_pack_operation` WHERE `cur_date` = DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y')
AND `pack_num` NOT IN (SELECT `pack_num` FROM `p4_pack_operation` WHERE `p4_pack_operation`.`cur_date` < DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y')
GROUP BY `pack_num` ORDER BY `cur_date`) GROUP BY `pack_num`;";
$rsl= $con->query($quer);

$tabl=[];
while ($items = $rsl->fetch_assoc()){
    $tabl[]=$items;
}

$ieng = 0;
$qengaged = 0;
$qengaged1 = 0;
$qengaged3 = 0;
while ($ieng < count($tabl)) {
        $qengaged +=$tabl[$ieng]['pack_qte'];
        switch ($tabl[$ieng]['prod_line']) {
            case 'ISA201':
                $qengaged1 +=$tabl[$ieng]['pack_qte'];
                break;
            case 'ISA203':
                $qengaged3 +=$tabl[$ieng]['pack_qte'];
                break;
            }
    $ieng++;
}

//QTE ENCOURS TOTALE
$query = "SELECT DISTINCT pack_num, pack_qte, prod_line FROM `p4_pack_operation`";
$rslt = $con->query($query);

$tab = [];
while ($item = $rslt->fetch_assoc()) {
    $tab[] = $item;
}


$ienc = 0;
$qencours = 0;
$qencours1 = 0;
$qencours3 = 0;
while ($ienc < count($tab)) {
        $qencours +=$tab[$ienc]['pack_qte'];
        switch ($tab[$ienc]['prod_line']) {
            case 'ISA201':
                $qencours1 +=$tab[$ienc]['pack_qte'];
                break;
            case 'ISA203':
                $qencours3 +=$tab[$ienc]['pack_qte'];
                break;
            }
    $ienc++;
}

//QTE FABRIQUEE TOTALE
$query2 = "SELECT DISTINCT pack_num, qte_fp, qte, prod_line FROM `p12_control` WHERE  cur_day = DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y')";
$rslt2 = $con->query($query2);

$tab2 = [];
while ($item2 = $rslt2->fetch_assoc()) {
    $tab2[] = $item2;
}

$qdf = 0;
$qfab = 0;
$ifab = 0;
$cq = 0;

$qdf1 = 0;
$qfab1 = 0;
$ifab1 = 0;
$cq1 = 0;

$qdf2 = 0;
$qfab2 = 0;
$ifab1 = 0;
$cq2 = 0;
while ($ifab < count($tab2)) {
    $qfab += $tab2[$ifab]['qte'];
    $qdf += $tab2[$ifab]['qte_fp'];
    $cq = ($qdf / $qfab) * 100;
    switch ($tab2[$ifab]['prod_line']) {
        case 'ISA201':
            $qfab1 += $tab2[$ifab]['qte'];
            $qdf1 += $tab2[$ifab]['qte_fp'];
            $cq1 = ($qdf1 / $qfab1) * 100;
            break;
        case 'ISA203':
            $qfab2 += $tab2[$ifab]['qte'];
            $qdf2 += $tab2[$ifab]['qte_fp'];
            $cq2 = ($qdf2 / $qfab2) * 100;
            break;
        }
    $ifab++;
}

//performance
$query1 = "SELECT `performance` FROM `p9_prod_performance_h` WHERE `prod_line` LIKE '%ISA201%' AND `cur_date` = DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y') ORDER BY `id` DESC LIMIT 1";
$rslt1 = $con->query($query1);

$tab1 = [];
while ($item1 = $rslt1->fetch_assoc()) {
    $tab1[] = $item1;
}
$i1 = 0;
$performance1 = 0;
while ($i1 < count($tab1)) {
    $performance1 += $tab1[$i1]['performance'];
    $i1++;
}
$query3 = "SELECT `performance` FROM `p9_prod_performance_h` WHERE `prod_line` LIKE '%ISA203%' AND `cur_date` = DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y') ORDER BY `id` DESC LIMIT 1";
$rslt3 = $con->query($query3);

$tab3 = [];
while ($item3 = $rslt3->fetch_assoc()) {
    $tab3[] = $item3;
}
$i3 = 0;
$performance3 = 0;
while ($i3 < count($tab3)) {
    $performance3 += $tab3[$i3]['performance'];
    $i3++;
}

// Nbr des opératrices présent: 
$queryP = "SELECT DISTINCT`operator_reg_num`,`prod_line` FROM `p5_presence` where `cur_date`= DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y')";
$rsltP = $con->query($queryP);
$tabP = [];
while ($itemP = $rsltP -> fetch_assoc()){
    $tabP[] = $itemP;
}
$iP=0;
$pres1=0;
$pres2=0;
$presence = count($tabP);
while ($iP < count($tabP)){
switch ($tabP[$iP]['prod_line']) {
    case 'ISA201':
        $pres1++;
        break;
    case 'ISA203':
        $pres2++;
        break;
    }
}
//Quantité d'une semaine
$query4 = "SELECT DISTINCT pack_num, pack_qte, `cur_date` FROM `p4_pack_operation` WHERE cur_date BETWEEN DATE_FORMAT(CURRENT_DATE - 5, '%d/%m/%Y') AND DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y')  ";
$rslt4 = $con->query($query4);

$tab4 = [];
while ($item4 = $rslt4->fetch_assoc()) {
    $tab4[] = $item4;
}
$i4=0;
$q1=0;
$q2=0;
$q3=0;
$q4=0;
$q5=0;
$q6=0;

while ($i4 < count($tab4)) {

switch ($tab4[$i4]['cur_date']) {
    case date('d/m/Y'):
        $q1+= $tab4[$i4]['pack_qte'];
        break;
    case date('d/m/Y', strtotime("-1 day")):
        $q2+= $tab4[$i4]['pack_qte'];
        break;
    case date('d/m/Y', strtotime("-2 day")):
        $q3+= $tab4[$i4]['pack_qte'];
        break;
    case date('d/m/Y', strtotime("-3 day")):
        $q4+= $tab4[$i4]['pack_qte'];
        break;
    case date('d/m/Y', strtotime("-4 day")):
        $q5+= $tab4[$i4]['pack_qte'];
        break;
    case date('d/m/Y', strtotime("-5 day")):
        $q6+= $tab4[$i4]['pack_qte'];
        break;
}
    $i4++;
}

$obj=0;
$obj1=0;
$obj3=0;
//AFFICHAGE
    echo json_encode([
        "qengaged" => $qengaged,
        "qengaged1" => $qengaged1,
        "qengaged3" => $qengaged3,
        "qencours" => $qencours,
        "qencours1" => $qencours1,
        "qencours3" => $qencours3,
        "qfab" => $qfab,
        "qfab1" => $qfab1,
        "qfab3" => $qfab2,
        "df" => $qdf,
        "cq" => round($cq, 2),
        "cq1"=> round($cq1, 2),
        "cq3"=> round($cq2, 2),
        "messagePresence"=> "présence",
        "presence" => $presence,
        "presence1" => $pres1,
        "presence3" => $pres2,
        "messagePerformance" => "performance",
        "performance" => (($performance1 + $performance3) / 2),
        "perf1"=> $performance1,
        "perf3"=> $performance3,
        "messageDate"=> "les dates de la semiane d'aujourd'hui",
        "j1"=> date('d/m/Y'),
        "j2"=> date('d/m/Y', strtotime("-1 day")),
        "j3"=> date('d/m/Y', strtotime("-2 day")),
        "j4"=> date('d/m/Y', strtotime("-3 day")),
        "j5"=> date('d/m/Y', strtotime("-4 day")),
        "j6"=> date('d/m/Y', strtotime("-5 day")),
        "messageQte" => "quantité engagée durant la semaine",
        "q1"=>$q1,
        "q2"=>$q2,
        "q3"=>$q3,
        "q4"=>$q4,
        "q5"=>$q5,
        "q6"=>$q6,
        "messageObjectif"=> "OBJECTIF",
        "obj"=>$obj,
        "obj1"=>$obj1,
        "obj3"=>$obj3,
    ]);
    
