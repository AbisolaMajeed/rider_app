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
            <h1>Generel Settings</h1>
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
          <h3 class="card-title">General Settings</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-edit"></i> Edit</button>
           
          </div>
        </div>
        <div class="card-body">
           <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Item</th>
                      <th>Value</th>
                      <th>Payment Duration</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Ticket Charges</td>
                      <td>
                         &#8358; 20,000
                      </td>
                      <td>12 months</td>
                      <!-- <td><span class="badge bg-danger">55%</span></td> -->
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Minimum Ticket Charges</td>
                      <td>
                         &#8358; 2,000
                      </td>
                      <td>12 months</td>
                   
                    </tr>
                  
                  </tbody>
                </table>
        </div>
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