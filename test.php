<!DOCTYPE html>
<html>
<body>

<?php
$start_date = strtotime('2019-10-23');
$end_date = strtotime('2019-10-26');
$n_alta = 0;
$n_baixa = ceil(abs($start_date - $end_date)/86400);
$n_adults = 3;
$n_young = 0;
$n_child = 0;
$p_alta = 250;
$p_baixa = 200;
$sur_1 = 40;
$sur_2 = 30;
$visa = 40;
$total;
$average;
  
if ($n_adults == "1"){
  $total = $n_adults*($n_alta*$p_alta + $n_baixa*$p_baixa + ($n_alta + $n_baixa)*$sur_1 + $visa);
  echo $total;
} elseif ($n_adults == "2"){
  $total = $n_adults*($n_alta*$p_alta + $n_baixa*$p_baixa + ($n_alta + $n_baixa)*$sur_2 + $visa);
  echo $total;
} elseif ($n_adults >= "3" && $n_adults <= "10"){
  $total = $n_adults*($n_alta*$p_alta + $n_baixa*$p_baixa + $visa);
  echo $total;
} elseif ($n_adults >= "11" && $n_adults <= "15"){
  $total = ($n_adults-1)*($n_alta*$p_alta + $n_baixa*$p_baixa + $visa) + 0.5*($n_alta*$p_alta + $n_baixa*$p_baixa) + $visa;
  echo $total;
} elseif ($n_adults >= "16"){
  $total = ($n_adults-1)*($n_alta*$p_alta + $n_baixa*$p_baixa + $visa);
  echo $total;
}
$average = $total/$n_adults;
  echo "<br>";
  echo $average;

?>

