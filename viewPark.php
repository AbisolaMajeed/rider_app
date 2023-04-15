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
            <h1>View Parks</h1>
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
          <h3 class="card-title">View Parks</h3>

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
                      <th>Name</th>
                      <th>State</th>
                      <th>LGA</th>
                      <th>Address</th>
                      <th>No. of Registered Riders</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1.</td>
                      <td>Mission Motorcycle Park</td>
                      <td>
                        Lagos
                      </td>
                      <td>Alimosho</td>
                      <td>12, Mission Street, Igando</td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Unity Metro Mootorcycle Park</td>
                      <td>
                        Kwara
                      </td>
                      <td>Ilorin East</td>
                      <td>Unity Busstop, Ilorin</td>
                      <td>30</td>
                      
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