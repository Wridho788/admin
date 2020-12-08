<?php 

// koneksi
$conn = new mysqli('localhost', 'root', '', 'data_dummy');

$table = "excel";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard CHAMP A1
        <small>Comprehensive Analytics & Monitoring Performance Area 1</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content-header">
      <h3>Resume Daily Usage Performance all <b>AREA 1-ALL</b> update 01/31/2020</h3>
    </section>
<!-- box footer 1 -->
    <div class="box-footer">
      <div class="row">
        
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
        <!-- /.row -->
    </div>


    <!-- box footer 2 -->
    <div class="box-footer" style="margin-top: 20px;">
      <div class="row">
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                  <?php
                      // mengambil data barang
                      $data_dummy = mysqli_query($koneksi,"SELECT * FROM excel");
                      
                      // menghitung data barang
                      $jumlah_revenue = mysqli_num_rows($data_dummy); 
                      $formattedNum = number_format($jumlah_revenue, 2);               
                    ?>  
                  <h5 class="description-header">
                    <?php echo "Rp $formattedNum";?>  
                </h5>
                    <span class="description-text">DU Last Month</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                
              </div>
        <!-- /.row -->
    </div>
    <!-- /.content -->
  </div>