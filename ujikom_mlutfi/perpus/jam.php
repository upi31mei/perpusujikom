<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="mentah/SlideTextAnimation/style.css">
</head>
<body>
  <style>
 
  .jam-digital-malasngoding {
    overflow: hidden;
    padding: 10px;
    position: absolute;
  }
  .kotak{
 
    align-items: center;
    float: left;
    padding: 6px;
  }
  .jam-digital-malasngoding p {
    color: #fff;
    float: right;
    font-size: 15px;
    text-align: center;
  }
  .titik{
    color: #fff;
    float: right;
    font-size: 15px;
    text-align: center;
  }
 
</style>
 
<div class="jam-digital-malasngoding">
  <div class="kotak">
    <p id="jam"> </p>

  </div>

<div class="kotak">
<b>:</b>
  </div>

  <div class="kotak">
    <p id="menit"></p>
  </div>

<div class="kotak">
<b>:</b>
  </div>

  <div class="kotak">
    <p id="detik"></p>
  </div>
</div>
 
<center>
  <a href="https://www.malasngoding.com/membuat-jam-analog-dan-digital-dengan-javascript"></a>
</center>

<?php
print date('l, d F Y');
?>

<script>
  window.setTimeout("waktu()", 1000);
 
  function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = waktu.getHours();
    document.getElementById("menit").innerHTML = waktu.getMinutes();
    document.getElementById("detik").innerHTML = waktu.getSeconds();
  }
</script>

</body>
</html>