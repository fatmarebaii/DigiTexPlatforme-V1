<?php
require_once 'config.php';
$query = "SELECT DISTINCT `of_num`, `client`, `assembly_shop`, `of_state` FROM `p1_of`";
                $rsl= $con->query($query);
                //$p1_of = $rsl->fetch_all(PDO::FETCH_ASSOC);
                $p1_of = [];
                                        while ($item1 = $rsl->fetch_assoc())
                                        {
                                            $p1_of[] = $item1;
                                        }

                $query1 = "SELECT DISTINCT`pack_num`, `of_num`,`qte` FROM `p2_packet`";
                $rsl1= $con->query($query1);
                    $p2_packet = $rsl1->fetch_all(PDO::FETCH_ASSOC);
                    echo json_encode(
                        $p1_of);
?>