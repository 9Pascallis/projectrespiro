@extends('layout.dashboard')
@section('assets')
    <link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	  <link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	  <link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
	  <link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
@endsection
@section('content')		
				
		    <!-- Main content -->
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>APPROVAL PERMINTAAN PRODUKSI</b> </h5>
                </div>
                <!-- /.card-header -->
                <br>
                <div class="card-body">
                    <!-- General Form Elements -->
                    <form>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Target Delivery</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                        </div>  
                    </div>
                    <br><br>
                        <div class="row">
                            <div class="col-md-2">      
                                <label for="item_quantity">Warna</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">S</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">M</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">L</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">XL</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">XXL</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">XXXL</label>
                            </div>
                           
                            <div class="col-md-2">
                                <label for="item_quantity">Total</label>
                            </div>
                        </div>
                        <div class="duplicate my-2">
                        <div class="row">
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" name="colour[]" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                           
                            <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            
                        </div>
                        </div>
                        <button class="btn btn-outline-info px-2">
                        Input Color
                        </button>
                        <br><br>
                        <div class="d-flex justify-content-end">
                            <a href="/dashboard-konfirmasi" class="btn btn-outline-success px-3 " role="button" aria-pressed="true">Approval Permintaan</a>
                        </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection
@section('js')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="assets/js/form-date-time-pickes.js"></script>
@endsection
