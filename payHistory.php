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
            <h1>Bridget Nwosu Transaction History</h1>
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
          <h3 class="card-title">Total Transaction Amount:  &#8358;22,000</h3>

          <div class="card-tools">
             <p>Current Status : ACTIVE</p>
            
          </div>
        </div>
        <div class="card-body">
           <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Amount(&#8358;)</th>
                      <th>Payment Date</th>
                      <th>Agent</th>
                      <th>Field Agent</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1.</td>
                      <td>&#8358;15,000</td>
                      <td>
                         27-08-2021
                      </td>
                     
              
                      <td>Solver Clent</td>
                      <td>James Luke </td>
                    
                    </tr>
                  <tr>
                      <td>2.</td>
                      <td>&#8358;2,000</td>
                      <td>
                         29-0-2020
                      </td>
                     
              
                      <td>Solver Clent</td>
                      <td>James Luke </td>
                    
                    </tr> 

                    <tr>
                      <td>3.</td>
                      <td>&#8358;5,000</td>
                      <td>
                         29-0-2020
                      </td>
                     
              
                      <td>Solver Clent</td>
                      <td>James Luke </td>
                    
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