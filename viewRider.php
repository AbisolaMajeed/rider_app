<?php
require "head.php";
?>

<body>
  <div  class="hold-transition sidebar-mini layout-fixed" >

    <div class="wrapper">
    
  
    
      <!-- Main Sidebar Container -->

     <?php

      require"aside.php";
     
     ?> 
      
    
      <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Rider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">View Rider</h3>

       <!--    <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-edit"></i> Edit</button>
           
          </div> -->
        </div>
        <div class="card-body">
           <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Rider ID</th>
                      <th>Name</th>
                      <th>Phone No</th>
                      <th>Status</th>
                      <th>Last Payment</th>
                      <th>Payment Expiry </th>
                      <th>Agent</th>
                      <th>Field Agent</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      
                      <td>1.</td>
                      <td>LAG/ALI/ATR/123</td>
                      <td>Bridget Nwosu</td>
                      <td>
                         08012567832
                      </td>
                     
                      <td>ACTIVE</td>
                      <td>27-08-2021</td>
                      <td>26-08-2022</td>
                      <td>Solver Clent</td>
                      <td>James Luke </td>
                      <td>
                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                        <a href="payHistory.php" class="btn btn-warning btn-sm"><i class="fas fa-eye" style="margin-bottom:10px;"></i> View</a>
                        <a href="newpay.php" class="btn btn-success btn-sm"><i class="fas fa-money-bill-alt"></i>  Pay</a>
                      </td>
                    </tr>
                   <tr>
                      <td>2.</td>
                      <td>ILR/ILE/OYN/613</td>
                      <td>Bolaji Ameed</td>
                      <td>
                         08012567855
                      </td>
                     
                      <td>INACTIVE</td>
                      <td>27-02-2020</td>
                      <td>26-02-2021</td>
                      <td>Solver Clent</td>
                      <td>James Luke </td>
                      <td>
                         <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                        <a href="payHistory.php" class="btn btn-warning btn-sm"><i class="fas fa-eye" style="margin-bottom:10px;"></i> View</a>     
                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-money-bill-alt"></i>  Pay </a>               
                      </td>
                    </tr>
                    
                  
                  </tbody>
                </table>
        </div>
        <nav aria-label="...">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li> 
    <li class="page-item active">
      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
        <!-- /.card-body -->
      <!--   <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
 <?php

 require "footer.php";



 ?>