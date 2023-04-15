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
            <h1>Pending Kit</h1>
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
          <h3 class="card-title">Pending Kit</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"> -->
              <!-- <i class="fas fa-edit"></i> Edit</button> -->
           
          </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Payment Date</th>
                      <th>Name</th>
                      <th>Agent Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>02-09-2021</td>
                      <td>Lawrence Oghor</td>
                      <td>Gabriel Grillo</td>
                      <td><a href="#" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Send</a>  </td>
                      <!-- <td><span class="badge bg-danger">55%</span></td> -->
                    </tr>
                    <tr>
                    <td>2.</td>
                      <td>05-09-2021</td>
                      <td>Helen Shina</td>
                      <td>Gabriel Grillo</td>
                      <td><a href="#" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Send</a>  </td>
                   
                    </tr>
                    <tr>
                    <td>3.</td>
                      <td>06-09-2021</td>
                      <td>Barbra White</td>
                      <td>Gabriel Grillo</td>
                      <td><a href="#" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Send</a>  </td>
                   
                    </tr>
                    <tr>
                    <td>4.</td>
                      <td>12-09-2021</td>
                      <td>Halima Yusuf</td>
                      <td>Gabriel Grillo</td>
                      <td><a href="#" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Send</a>  </td>
                   
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