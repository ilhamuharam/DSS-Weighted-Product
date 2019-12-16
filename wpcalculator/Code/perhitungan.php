 <?php
//--- perhitungan jumlah bobot total
$sigma_w=array_sum($W);
//--- pembagian tiap-tiap bobot dengan total jumlah bobot
foreach($W as $j=>$w){
  $W[$j]=$w/$sigma_w;
}
?> 