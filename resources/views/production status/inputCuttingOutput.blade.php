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
                    <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>INPUT CUTTING OUTPUT</b> </h5>
                </div>
                <!-- /.card-header -->
                <br>
                <div class="card-body">
                    <!-- General Form Elements -->
                    <form>
                    <div class="row" style="margin-left: 20px; margin-right: 20px">
                    <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nomor WS</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Challenger" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nama Artikel</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Challenger" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Target Delivery</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="23 Februari, 2023" disabled>
                                    </div>
                                </div>   
                                <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Cutting</label>
                                 <div class="col-sm-8">
                                      <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">-</option>
                                        <option>Cutting ke 1</option>
                                        <option>Cutting ke 2</option>
                                        <option>Cutting ke 3</option>
                                        <option>Cutting ke 4</option>
                                        <option>Cutting ke 5</option>
                                        <option>Cutting ke 6</option>
                                        <option>Cutting ke 7</option>
                                        <option>Cutting ke 8</option>
                                        <option>Cutting ke 9</option>
                                        <option>Cutting ke 10</option>
                                        <option>Cutting ke 11</option>
                                        <option>Cutting ke 12</option>
                                        <option>Cutting ke 13</option>
                                        <option>Cutting ke 14</option>
                                        <option>Cutting ke 15</option>
                                        </select>
                                    </div>  
                                </div>

                            <div>
                                <div class="row">
                            <div class="col-md-2">
                                <label for="item_quantity">Warna</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">XS</label>
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
                                <a href="#" class="btn btn-outline-danger">
                                <span class="fas fa-trash"></span>
                                </a> 
                            </div>
                        </div>
                        </div>
                        <button class="btn btn-outline-info">
                                               Input Color
                        </button>
                        <br><br>
                    </div>
                    </form>                          
                        <div class="d-flex justify-content-end">
                            <a href="/dashboard-cutting-output" class="btn btn-outline-info px-3 " role="button" aria-pressed="true">Save</a>
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
<script src="assets/js/rupiah.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="assets/js/form-date-time-pickes.js"></script>
@endsection
