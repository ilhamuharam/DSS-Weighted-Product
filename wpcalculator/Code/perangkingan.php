 <?php
//--- mengurutkan data nilai vektor V dari yang terbesar ke terkecil
arsort($V);
//--- menampilkan data secara terurut dari yang terbesar
$rank=0;
foreach($V as $i=>$v){
echo ++$rank." V{$i} = {$v} <br>";
}
?> 