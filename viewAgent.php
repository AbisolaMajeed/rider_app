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
            <h1>View Agents</h1>
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
          <h3 class="card-title">View Agents</h3>

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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Status</th>
                      <th>Date Created</th>
                      <th>Current Slot</th>
                      <th>Action</th>
                      <th>Allocate Slot</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1.</td>
                      <td>Gabriel Grillo</td>
                      <td>
                         gabgrill@yahoo.com
                      </td>
                      <td>Gabriel</td>
                      <td>ACTIVE</td>
                      <td>07-09-2021</td>
                      <td>125</td>
                      <td>
                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-light btn-sm"><a href="agentDetails.php" style="text-decoration:none;">
                        <i class="fas fa-eye"></i>    View</a></button>
                      </td>
                      <td style="font-size:20px;">
                        
                        <a href="addSlot.php" class="btn btn-success btn-sm">+Add</a>
                        <a href="removeSlot.php" class="btn btn-danger btn-sm">-Remove</a>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Loveth Obi</td>
                      <td>
                        lovethobi@gmail.com
                      </td>
                      <td>Lovely009</td>
                      <td>INACTIVE</td>
                      <td>30-09-2021</td>
                      <td>220</td>
                      <td>
                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-light btn-sm"><a href="#" style="text-decoration:none;">
                        <i class="fas fa-eye"></i>    View</a></button>
                     </td>
                     <td style="font-size:20px;">
                       
                        <a href="addSlot.php" class="btn btn-success btn-sm">+Add</a>
                        <a href="removeSlot.php" class="btn btn-danger btn-sm">-Remove</a>
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