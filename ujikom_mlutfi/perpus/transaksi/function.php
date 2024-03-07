<?php

 function terlambat($tgl_dateline, $tglkembali){

 $tgl_dateline_pecah = explode("-", $tgl_dateline);
 $tgl_dateline_pecah = $tgl_dateline_pecah[2]."-".$tgl_dateline_pecah[1]."-".$tgl_dateline_pecah[0];

 $tglkembali_pecah = explode("-", $tglkembali);
 $tglkembali_pecah = $tglkembali_pecah[2]."-".$tglkembali_pecah[1]."-".$tglkembali_pecah[0];


 $selisih = strtotime($tglkembali_pecah)-strtotime($tgl_dateline_pecah);

 $selisih = $selisih/86400;

 if ($selisih>=1) {
 	$hasil_tgl = floor($selisih);

 }else{
 	$hasil_tgl = 0;
 }
return $hasil_tgl;

}
?>