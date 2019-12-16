 <?php
//--- inisialisasi array 'S'
$S=array();
//--- menghitung nilai preferensi S untuk tiap-tiap alternatif
foreach($X as $i=>$x){
  //--- inisialisasi nilai S untuk alternatif ke-i
  $S[$i]=1;
  //--- iterasi tiap-tiap data hasil evaluasi sebagai x
  foreach($x as $j=>$value){
    //--- mengalikan dengan pangkat negatif dari nilai untuk kriteria ke j
    //--- jika merupakan kriteria biaya/cost
    if($criterias[$j]['attribute']=='cost')
      $S[$i]*=pow($value,-$W[$j]);
    //--- mengalikan dengan pangkat positif dari nilai untuk kriteria ke j
    //--- jika merupakan kriteria keuntungan/benefit
    else
      $S[$i]*=pow($value,$W[$j]);
  }
}
?> 