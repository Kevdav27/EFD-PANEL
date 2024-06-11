<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


if(isset($_POST['submit']))
{
$Sn=$_POST['sn'];
$type=$_POST['type'];
$cus=$_POST['customer'];
$fault=$_POST['faults'];
$status=$_POST['status'];
$date=$_POST['date'];


$query="insert into efdassets(s_n,type,customer,Fault,status,Date) values(?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssss',$Sn,$type,$cus,$fault,$status,$date);
$stmt->execute();
echo"<script>alert('Machine added successfully');</script>";

// $success = "success";
}










if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from efdassets where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   


}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assets</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

  
  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">EFD PANEL</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
  
        </form>
      </div><!-- End Search Bar -->
  
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
  
            </a>
          </li><!-- End Search Icon-->

        <!-- End Profile Iamge Icon -->

     <!-- End Profile Iamge Icon -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     

      <li class="nav-heading">Menu</li>

      <li class="nav-item">
        <a class="nav-link " href="assets.php">
          <i class="bi bi-cpu-fill"></i>
          <span>Assets</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed " href="customer.php">
          <i class="bi bi-question-circle"></i>
          <span>Customer</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Inventory.php">
          <i class="bi bi-envelope"></i>
          <span>Inventory</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="report.php">
          <i class="bi bi-card-list"></i>
          <span>Reports</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">







    
    <div class="pagetitle">
        <h1>EFD Table</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">EFD information </h5>
                <p>Log Records for EFDs worked </p>
                <!-- Vertically centered Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
               Add
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">EFD Asset</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Floating Labels Form -->
              <form class="row g-3" method="post">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName"  name= "sn" placeholder="S/N">
                    <label for="floatingsn">S/N</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="type" class="form-control" id="floatingEmail" placeholder="TYPE">
                    <label for="floatingtype">TYPE</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="customer"  class="form-control" id="floatingPassword" placeholder="CUSTOMER">
                    <label for="floatingPassword">CUSTOMER</label>
                  </div>
                </div>

                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="faults"  class="form-control" id="floatingPassword" placeholder="FAULTS">
                    <label for="floatingPassword">FAULTS</label>
                  </div>
                </div>
                
                



                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" name="status"class="form-control" id="floatingCity" placeholder="STATUS">
                      <label for="floatingCity">STATUS</label>
                    </div>
                  </div>
                </div>
                
           
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="datetime-local" name="date"class="form-control" id="floatingCity" placeholder="Date">
                      <label for="floatingCity">DATE IN</label>
                    </div>
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

                    </div>
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->
  <div class="table-responsive"  >
                <!-- Table with stripped rows -->
                <table class="table table-striped datatable display nowrap">
                   
                  <thead>
                    <tr>
                        <th scope="col">No.</th>
                      <th scope="col">S/N</th>
                      <th scope="col">TYPE</th>
                      <th scope="col">CUSTOMER</th>
                      <th scope="col">FAULTS</th>
                      <th scope="col">STATUS</th>
                      <th scope="col">ACTION</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  <?php	
$aid=$_SESSION['id'];
$ret="select * from efdassets order by date desc";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>

<td><?php echo $row->s_n;?></td>
<td><?php echo $row->type;?></td>
<td><?php echo $row->customer;?></td>
<td><?php echo $row->Fault;?></td>
<td><?php echo $row->status;?></td>

<td>

                         <a href="assetseedit.php?id=<?php echo $row->id;?>" title="Edit Record" class="bi bi-pen-fill"></i></a>


</a>&nbsp;&nbsp;


<a href="assets.php?del=<?php echo $row->id;?>" title="Delete Record" onclick="return confirm('Do you want to delete');"><i class="bi bi-trash"></i></a></td>



</tr>


									<?php
$cnt=$cnt+1;
									 } ?>
                  
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  </div>
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="script.js"></script>



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>