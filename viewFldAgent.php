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
            <h1>View Field Agents</h1>
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
          <h3 class="card-title">View Field Agents</h3>

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
                      <th>Agent Name</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Status</th>
                      <th>Date Created</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <tr>
                      
                      <td>1.</td>
                      <td>Gabriel Grillo</td>
                      <td>Jacob Ifeanyi</td>
                      <td>
                         jacifeanyi@yahoo.com
                      </td>
                      <td>Jacob</td>
                      <td>ACTIVE</td>
                      <td>05-09-2021</td>
                      <td>
                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
    
                      </td>
                    </tr>
                    <td>2.</td>
                      <td>Loveth Obi</td>
                      <td>Chisom Chukwu</td>
                      <td>
                        chukwusom@gmail.com
                      </td>
                      <td>Chisom</td>
                      <td>INACTIVE</td>
                      <td>09-09-2021</td>
                      <td>
                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                        
                     </td>
                    <tr>
                      <td>3.</td>
                      <td>Gabriel Grillo</td>
                      <td>Teresa Ade</td>
                      <td>
                        teresa.ade@gmail.com
                      </td>
                      <td>Mother Teresa</td>
                      <td>ACTIVE</td>
                      <td>19-09-2021</td>
                      <td>
                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                        
                     </td>
                     <tr>
                      <td>4.</td>
                      <td>Gabriel Grillo</td>
                      <td>Tayo Oguntade</td>
                      <td>
                        oguntayo@gmail.com
                      </td>
                      <td>Tboy</td>
                      <td>ACTIVE</td>
                      <td>21-09-2021</td>
                      <td>
                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                        
                     </td>
                     
                    
                      <!-- <td><span class="badge bg-danger">55%</span></td> -->
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