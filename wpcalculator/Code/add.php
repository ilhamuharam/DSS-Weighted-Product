 <?php
//--- query mengambil nilai data-data kriteria
$sql="SELECT id_criteria,criteria,weight
      FROM wp_criterias
      ORDER BY id_criteria";
$result=$db->query($sql);
//--- inisialisasi array kriteria 'C'
$C=array();
//--- inisialisasi array weight/bobot 'W'
$W=array();
//--- inisialisasi jumlah kriteria 'n'
$n=0;
while($criteria=$result->fetch_assoc()){
  $W[$id_criteria]=$criteria['weight'];
  $C[]=$criteria;
  ++$n;
}
$result->free();

//--- query mengambil nilai data-data hasil evaluasi
$sql="SELECT id_criteria,criteria,weight
      FROM wp_evaluations
      ORDER BY id_alternative,id_criteria";
$result=$db->query($sql);
//--- inisialisasi array X
$X=array();
$alternative='';
//--- inisialisasi jumlah alternative 'm'
$m=0;
while($row=$result->fetch_assoc()){
  if($row['id_alternative']!=$alternative){
    $X[$row['id_alternative']]=array();
    $alternative=$row['id_alternative'];
    ++$m;
  }
  $X[$row['id_alternative']][$row['id_criteria']]=$row['value'];
}
$result->free();
?> 