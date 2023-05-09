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
                    <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>INPUT PERMINTAAN PRODUKSI</b> </h5>
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
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Produk</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-</option>
                                <option>Jacket</option>
                                <option>Glove</option>
                                <option>Rainsuit</option>
                                <option>T-Shirt</option>
                                <option>Pants</option>
                                <option>Accessories</option>
                                <option>Footwear</option>
                                <option>Bag</option>
                                <option>Headware</option>
                                </select>
                        </div>  
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-</option>
                                <option>Essenzo</option>
                                <option>Veloce</option>
                                <option>Rovero</option>
                                <option>Adrenal</option>
                                <option>Travelride</option>
                                </select>
                        </div>  
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Sub Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-</option>
                                <option>Solare</option>
                                <option>Equillio</option>
                                <option>Ciero</option>
                                <option>Deluga</option>
                                </select>
                        </div>  
                    </div>

                    <br><br>
                    <!-- jacket, glove, rainsweet, tshirt -->
                    <div>
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
                        <div class="duplicate1 my-2">
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
                            <div class="col-md-1">
                                <a href="#" class="btn btn-outline-danger remove">
                                <span class="fas fa-trash"></span>
                                </a> 
                            </div>
                        </div>
                        </div>
                        <button class="btn btn-outline-info add-more">
                                               Input Color
                        </button>
                        <br><br>
                    </div>
                    <!-- headware,bag -->
                    <div>
                        <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="item_quantity">Warna</label>
                            </div>
                            <div class="col-md-2">      
                                <label for="item_quantity">Allsize</label>
                            </div>
                            <div class="col-md-2">
                                <label for="item_quantity">Total</label>
                            </div>
                        </div>
                        <div class="duplicate2 my-2">
                        <div class="row">
                            <div class="col-md-3">      
                            <div class="form-group">
                                <input type="text" name="colour[]" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">
                                <a href="#" class="button-remove btn btn-outline-danger remove">
                                <span class="fas fa-trash"></span>
                                </a> 
                            </div>
                        </div>
                        </div>
                        <button class="btn btn-outline-info add-more">
                        Input Color
                        </button>
                        <br><br>
                    </form>
                    </div>
                    <!-- pants -->
                    <div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="item_quantity">Warna</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">30</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">32</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">34</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">36</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">38</label>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="item_quantity">Total</label>
                            </div>
                        </div>
                        <div class="duplicate3 my-2">
                        <div class="row">
                            <div class="col-md-3">      
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
                            <div class="col-md-1">
                                <a href="#" class="btn btn-outline-danger remove">
                                <span class="fas fa-trash"></span>
                                </a> 
                            </div>
                        </div>
                        </div>
                        <button class="btn btn-outline-info add-more">
                                               Input Color

                        </button>
                        <br><br>
                    </div>
                        <div class="d-flex justify-content-end">
                            <a href="/permintaan-belum-konfirmasi" class="btn btn-outline-info " role="button" aria-pressed="true">Input Request</a>
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
    <!-- /.content -->
@endsection
@section('js')


<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="assets/js/form-date-time-pickes.js"></script>
<script src="assets/js/custom.js"></script>
@endsection
