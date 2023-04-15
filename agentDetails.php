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
            <h1>Agent Details</h1>
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
          <h3 class="card-title">Agent Details</h3>

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
                                            <label for="" class="">Available Tickets</label>
                                                <p>30 Tickets</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="text-right">
                                            <label for="" class="">Registered Riders</label>
                                                <p>20 Riders</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-4">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item">
            <a href="#home" class="nav-link active" data-bs-toggle="tab">Completed Transactions</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link" data-bs-toggle="tab">Pending Transctions</a>
        </li>
        <!-- <li class="nav-item">
            <a href="#messages" class="nav-link" data-bs-toggle="tab">Messages</a>
        </li> -->
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
        <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th colspan="6" style="font-size:20px;">Registered Riders</th>
                    </tr>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Payment ID</th>
                      <th>Payment Date</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <th>Amount Paid(&#8358;)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>0023566710</td>
                      <td>02-09-2021</td>
                      <td>Lawrence Oghor</td>
                      <td>08067756575</td>
                      <td>
                        20,000
                      </td>
                      <!-- <td><span class="badge bg-danger">55%</span></td> -->
                    </tr>
                    <tr>
                    <td>2.</td>
                      <td>0023566711</td>
                      <td>05-09-2021</td>
                      <td>Helen Shina</td>
                      <td>08052324351</td>
                      <td>
                        20,000
                      </td>
                   
                    </tr>
                    <tr>
                    <td>3.</td>
                      <td>0023566712</td>
                      <td>06-09-2021</td>
                      <td>Barbra White</td>
                      <td>09036544565</td>
                      <td>
                        20,000
                      </td>
                   
                    </tr>
                    <tr>
                    <td>4.</td>
                      <td>0023566713</td>
                      <td>12-09-2021</td>
                      <td>Halima Yusuf</td>
                      <td>07026698901</td>
                      <td>
                        20,000
                      </td>
                   
                    </tr>
                  
                  </tbody>
                </table>
                <nav aria-label="...">
  <ul class="pagination">
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



            
        </div>
        
        <div class="tab-pane fade" id="profile">
        <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th colspan="6" style="font-size:20px;">Registered Riders</th>
                    </tr>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Payment ID</th>
                      <th>Payment Date</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <th>Amount Paid(&#8358;)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>0023566719</td>
                      <td>02-09-2021</td>
                      <td>Musa Abdulsalam</td>
                      <td>08067756575</td>
                      <td>
                        15,000
                      </td>
                      <!-- <td><span class="badge bg-danger">55%</span></td> -->
                    </tr>
                    <tr>
                    <td>2.</td>
                      <td>0023566718</td>
                      <td>05-09-2021</td>
                      <td>Mohammed Shittu</td>
                      <td>08052324351</td>
                      <td>
                        5,000
                      </td>
                   
                    </tr>
                    <tr>
                    <td>3.</td>
                      <td>0023566717</td>
                      <td>06-09-2021</td>
                      <td>Adebisi Johnson</td>
                      <td>09036544565</td>
                      <td>
                        12,000
                      </td>
                   
                    </tr>
                    <tr>
                    <td>4.</td>
                      <td>0023566716</td>
                      <td>12-09-2021</td>
                      <td>Azu Amachree</td>
                      <td>07026698901</td>
                      <td>
                        4,000
                      </td>
                   
                    </tr>
                  
                  </tbody>
                </table>
                <nav aria-label="...">
  <ul class="pagination">
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



        </div>
        <!-- <div class="tab-pane fade" id="messages">
            <h4 class="mt-2">Messages tab content</h4>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div> -->
    </div>
</div
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