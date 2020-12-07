<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'chart':
    include 'pages/charts/chartjs.php';
    break;
  }
}else{
    include "pages/beranda.php";
  }
?>