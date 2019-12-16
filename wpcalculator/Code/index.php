<?php
// definisi alternatif sebagai array
$alternatif = array("Ngemplak","Kalasan","Kota Gede");
$jum_alternatif=count($alternatif);
// definisi kriteria sebagai array
$kriteria = array ("jarak pasar","jumlah penduduk","jarak pabrik","jarak gudang","harga tanah");
$jum_kriteria=count($kriteria);
// bobot kepentingan
$w = array(5,3,4,4,2);
// perbaikan bobot kepentingan
$totalW=5+3+4+4+2;
$wp[0]=round(($w[0]/$totalW),2);
$wp[1]=round(($w[1]/$totalW),2);
$wp[2]=round(($w[2]/$totalW),2);
$wp[3]=round(($w[3]/$totalW),2);
$wp[4]=round(($w[4]/$totalW),2);
// definisi array untuk nilai alternatif tiap kriteria
//A[x][y] -> x untuk alternatif, y untuk kriteria
$A[0][0]=0.75;$A[0][1]=2000;$A[0][2]=18;$A[0][3]=50;$A[0][4]=500;
$A[1][0]=0.50;$A[1][1]=1500;$A[1][2]=20;$A[1][3]=40;$A[1][4]=450;
$A[2][0]=0.90;$A[2][1]=2050;$A[2][2]=35;$A[2][3]=35;$A[2][4]=800;

// perhitungan vektor S
// C2 dan C4 nilai keuntungan bernilai +, C1,C3,C5 kriteria biaya bernilai -
for ($i=0;$i<$jum_alternatif;$i++)
     {
   $S[$i]=1;
    for($j=0;$j<$jum_kriteria;$j++)
   {
   if ($j==0 or $j==2 or $j==4) {$p=0-$wp[$j];} else {$p=$wp[$j];}  
   $S[$i]=$S[$i]*pow($A[$i][$j],$p);
    }
   $totalS=$totalS+$S[$i];
      }
// perhitungan vektor V
$rangkingawal=0;
for ($i=0;$i<$jum_alternatif;$i++)
     {
   $V[$i]=$S[$i]/$totalS;
   if ($V[$i]>$rangkingawal)
            {
               $rangkingawal=$V[$i]; $pilihan=$alternatif[$i];$hasil=$V[$i]; $urutan=$i;
             }
  
       }
// Hasil Akhir
echo "Hasil perangkingan yang di pilih adalah Vektor V ke-".$urutan." yaitu :<br><b>".$pilihan."</b> dengan nilai <b>".$hasil."</b>";
?>