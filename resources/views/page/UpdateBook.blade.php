<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LibMan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> 
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="\plugins\fontawesome-free\css\all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="\dist\css\adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.topnav')
        <!-- /.navbar -->
      
        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')
      
              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                  <!-- Content Header (Page header) -->
                  <div class="content-header">
                      <div class="container-fluid">
                          <div class="row mb-2">
                              <div class="col-sm-6">
                                  <h1 class="m-0">Update Book</h1>
                              </div><!-- /.col -->
                              <div class="col-sm-6">
                                  <ol class="breadcrumb float-sm-right">
                                      <li class="breadcrumb-item"><a href="\dashboard">Membership</a></li>
                                      <li class="breadcrumb-item"><a href="\dashboard">Register</a></li>
                                  </ol>
                              </div><!-- /.col -->
                          </div><!-- /.row -->
                      </div><!-- /.container-fluid -->
                  </div>
                  <!-- /.content-header -->
                  <div class="content">
                      <div class="container-fluid">
                          <div class="card card-secondary">
                              <div class="card-header">
                                  <h3 class="card-title">Book Update Form</h3>
                              </div>
                              <!-- /.card-header -->
                              <!-- form start -->
                              <form action="{{ url('updateBook', $book->id) }}" method="POST"
                                          enctype="multipart/form-part">
                                  @csrf
                                  <div class="card-body">
                                      <div class="form-group">
                                          <div class="row">
                                              <div class="col-md-8">
                                                  <div class="form-group">
                                                      <label for="exampleInputPassword1">BOOK NAME</label>
                                                      <input type="text" class="form-control" name="name"
                                                          placeholder="enter book name" value="{{ $book->name }}">
                                                  </div>
                                              </div>
      
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">AUTHOR</label>
                                                      <input type="text" class="form-control" name="author"
                                                          placeholder="enter book author" value="{{ $book->author->authorName }}" disabled>
                                                  </div>
                                              </div>
                                          </div>
      
                                          <div class="row">
                                              <div class="col-md-8">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">PUBLISHING YEAR</label>
                                                      <input type="text" class="form-control" name="year"
                                                          placeholder="enter book year" value="{{ $book->year }}">
                                                  </div>
                                              </div>
      
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">PRICE</label>
                                                      <input type="text" class="form-control" name="price"
                                                          placeholder="enter price" value="{{ $book->price }}">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- /.card-body -->
                                  </div>
                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-secondary float-right">Update</button>
                                  </div>
                              </form>
                              <!-- /.row -->
                          </div>
                          <!-- /.container-fluid -->
                      </div>
                  </div>
                  <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->
      
              <!-- Control Sidebar -->
              <aside class="control-sidebar control-sidebar-dark">
                  <!-- Control sidebar content goes here -->
              </aside>
              <!-- /.control-sidebar -->
      
        <!-- Main Footer -->
        @include('layouts.footer')

        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
    <script src="\plugins\jquery\jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="\plugins\bootstrap\js\bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="\dist\js\adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="\plugins\chart.js\Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="\dist\js\pages\dashboard3.js"></script>
      


    </div>
</body>

</html>