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
            <h1>Create Rider</h1>
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
          <h3 class="card-title">Applicant</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-edit"></i> Edit</button> -->
           
          </div>
        </div>
        <div class="card-body">
            <!-- form start -->
            <form class="" role="form">
                                        <div class="row">
                                       <!--  <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Date Created<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="dateCreated" value="<?php echo date('Y-d-m');?>" class="form-control" readonly>
                                            </div>
                                        </div> -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">First Name<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Last Name<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Other Names<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>   <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Blood Group<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>  

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Phone No<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>  

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">NIN<span class="text-danger"></span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                      <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Reg No./Plate No<span class="text-danger"></span>*</label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Make of motorcycle<span class="text-danger"></span>*</label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                       <div class="col-sm-6">  
                                            <div class="form-group">
                                                <label for="" class="">International Passport No<span class="text-danger"></span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Date of birth<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                              <label>Rider's Type <span class="text-danger">*</span> </label>
                                              <select class="form-control">
                                                <option>Commercial</option>
                                                <option>Courier</option>
                                                <option>Private</option>
                                                
                                              </select>
                                            </div>
                                        </div>
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                              <label>Marital Status <span class="text-danger">*</span> </label>
                                              <select class="form-control">
                                                <option>Single</option>
                                                <option>Divorce</option>
                                                <option>Married</option>
                                                
                                              </select>
                                            </div>
                                        </div>



                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Address<span class="text-danger"></span></label>
                            
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">State<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">LGA<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-sm-6">
                                          
                                            <div class="form-group">
                                                <label for="" class="">Park Name<span class="text-danger">*</span></label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Select Park</option>
                                                    <option value="">Mission Motorcycle Park</option>
                                                    <option value="">Unity Metro Park</option>
                                                    
                                                </select>
                                            
                                            </div>
                                        </div>  

                                         <div class="col-sm-6">
                                          <div class="form-group">
                                            <label for="exampleInputFile">Picture</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                           <!--  <div class="form-group">
                                                <label for="" class="">Compose Message<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3"></textarea>
                                            </div>
 -->                                        </div>
                                      
                                        <div class="box-footer text-center">
                                    <!-- <button type="submit" class="btn btn-info btn-sm">SAVE</button> -->
                                    <!-- <button type="submit" class="btn btn-info btn-sm">SUBMIT</button> -->
                                </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                
                                <!-- /.box-footer -->
                            </form>

        </div>
        <!-- /.card-body -->






          <div class="card">
        <div class="card-header">
          <h3 class="card-title">Spouse</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-edit"></i> Edit</button> -->
           
          </div>
        </div>
        <div class="card-body">
            <!-- form start -->
            <form class="" role="form">
                                        <div class="row">
                                   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class=""> Name<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Address<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                      
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Phone No<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>  

                                       
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">State<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">LGA<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>

                                      

                                       
                                        <div class="col-sm-6">
                                           <!--  <div class="form-group">
                                                <label for="" class="">Compose Message<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3"></textarea>
                                            </div>
 -->                                        </div>
                                    
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                
                                <!-- /.box-footer -->
                            </form>

        </div>
        <!-- /.card-body -->



          <div class="card">
        <div class="card-header">
          <h3 class="card-title">Next of kin</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-edit"></i> Edit</button> -->
           
          </div>
        </div>
        <div class="card-body">
            <!-- form start -->
            <form class="" role="form">
                                        <div class="row">
                                       <!--  <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Date Created<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="dateCreated" value="<?php echo date('Y-d-m');?>" class="form-control" readonly>
                                            </div>
                                        </div> -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">First Name<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Last Name<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Other Names<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>  

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Relationship<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Mobile no<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>  

                                      
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Address<span class="text-danger"></span></label>
                            
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">State<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">LGA<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>

                                       
                                      
                                        <div class="col-sm-6">
                                           <!--  <div class="form-group">
                                                <label for="" class="">Compose Message<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3"></textarea>
                                            </div>
 -->                                        </div>
                    
                                        <div class="box-footer text-center">
                               
                                </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                
                                <!-- /.box-footer -->
                            </form>

        </div>
        <!-- /.card-body -->



          <div class="card">
        <div class="card-header">
          <h3 class="card-title">Owner/Company</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-edit"></i> Edit</button> -->
           
          </div>
        </div>
        <div class="card-body">
            <!-- form start -->
            <form class="" role="form">
                                        <div class="row">
                                       <!--  <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Date Created<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="dateCreated" value="<?php echo date('Y-d-m');?>" class="form-control" readonly>
                                            </div>
                                        </div> -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">First Name<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Last Name<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div> 

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Others Name<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>  

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Phone No<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>  

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">TIN<span class="text-danger"></span></label>
                            
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Address<span class="text-danger"></span></label>
                            
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">State<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">LGA<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>

                                        

                                        <div class="col-sm-6">
                                           <!--  <div class="form-group">
                                                <label for="" class="">Compose Message<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3"></textarea>
                                            </div>
 -->                                        </div>
                                        <!-- div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Target Area</label>
                            
                                                <input type="text" name="" id="" class="form-control" placeholder="Hotel/Hospital/School">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="" class="">Location<span class="text-danger">*</span></label>
                            
                                                <input type="text" name="" id="" class="form-control">
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-sm-6">
                                            <div class="form-group">
                                                 <label for="" class="">Send To(Select State)<span class="text-danger">*</span></label>
                            
                                                <select name="" id="" class="form-control select2" multiple>
                                                    <option value="">South West</option>
                                                    <option value="">Central West</option>
                                                    <option value="">North West</option>
                                                    <option value="">North East</option>
                                                    <option value="">South East</option>
                                                    <option value="">Others/NHQ</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="box-footer text-center">
                                    <!-- <button type="submit" class="btn btn-info btn-sm">SAVE</button> -->
                                    <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                                </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                
                                <!-- /.box-footer -->
                            </form>

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