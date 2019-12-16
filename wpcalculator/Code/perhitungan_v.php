 <?php
//--- inisialisasi vektor V
$V=array();
//--- perhitungan jumlah total nilai preferensi S
$sigma_s=array_sum($S);
//--- pembagian tiap-tiap bobot dengan jumlah total nilai preferensi S
foreach($S as $j=>$s){
  $V[$j]=$s/$sigma_s;
}
?> 