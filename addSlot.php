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
            <h1>Add Slot</h1>
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
          <h3 class="card-title">Add Slot</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"> -->
              <!-- <i class="fas fa-edit"></i> Edit</button> -->
           
          </div>
        </div>
        <div class="card-body">
                            <div class="form-group row">
                                        
                                        <div class="col-sm-3">
                                            <div class="text-left">
                                                <label for="" class="">Agent Name</label>
                                                <p>Gabriel Grillo</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="text-center">
                                            <label for="" class="">Available Slot</label>
                                                <p>35 Slots</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="text-center">
                                            <label for="" class="">Total Allocated Slot</label>
                                                <p>355 Slots</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="text-right">
                                            <label for="" class="">Registered Riders</label>
                                                <p>90 Riders</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
            <!-- form start -->
            <form class="" role="form">
                                  
                                    
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="" class="">Amount<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="amount" class="form-control">
                                            </div>
                                        </div> 

                                         <div class="col-sm-4 mt-4">
                                          <!--   <div class="form-group">
                                                <label for="" class="">Amount<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="amount" class="form-control">
                                            </div> -->

                                      <div class="box-footer text-left mt-2">
                                    <!-- <button type="submit" class="btn btn-info btn-sm">SAVE</button> -->
                                    <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                                </div>

                                        </div>
                                
                                    </div>

                                  

        <div>

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