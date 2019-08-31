<?php
$from="2018-10-31";
$to ="2018-11-05";
while (strtotime($from)<strtotime($to)){
$from = mktime(0,0,0,date("m",strtotime($from)),date("d",strtotime($from))+1,date("Y",strtotime($from)));
$from=date("Y-m-d", $from);
echo $from."<br/>";
}
?>