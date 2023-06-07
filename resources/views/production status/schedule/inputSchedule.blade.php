@extends('layout.dashboard')
@section('assets')
    <link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	  <link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	  <link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
	  <link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
@endsection
@section('content')		
<style>
    /* Menyembunyikan semua menu saat awal */
    .menu {
        display: none;
    }
</style>
				
		 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>INPUT SCHEDULE</b> </h5>
                </div>
                <!-- /.card-header -->
                <br>
                <div class="card-body">
                    <!-- General Form Elements -->
                    <div class="row" style="margin-left: 20px; margin-right: 20px">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">NOMOR WS</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="id_production_plan" class="form-control"
                                        value="{{ $worksheet->nomor_ws }}" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nama Artikel</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="id_production_plan" class="form-control"
                                        value="{{ $worksheet->productionPlan->konfirmasi_permintaan->permintaan->nama_produk }}" disabled>
                                    </div>
                                </div>   
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Target Delivery</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="id_production_plan" class="form-control"
                                        value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->target_delivery }}" disabled> </div>                                    </div>
                       
                                <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Process</label>
                                 <div class="col-sm-8">
                                    <select class="form-select"  id="dropdown" onchange="showMenu()">
                                        <option value=""></option>
                                        <option value="PPM">PPM</option>
                                        <option value="CUTTING">CUTTING</option>
                                        <option value="SEWING">SEWING</option>
                                    </select>
                                    </div>  
                                </div>
                           
                        <form action="/insert-schedule" method="POST">
                        @csrf
                        <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">

                        
                                <div id="PPM" class="menu">
                                    <div class="row mb-3" id="PPM" class="menu">
                                        <label for="inputText" class="col-sm-3 col-form-label" id="PPM" >PPM</label>
                                        <div class="col-sm-8" id="PPM" >
                                            <input type="date" name="ppm" class="form-control">
                        
                                        </div>
                                    </div>
                                </div>
                            
                                <div id="CUTTING" class="menu">
                                    <div class="row mb-3" id="CUTTING" >
                                        <label for="inputText" class="col-sm-3 col-form-label">Cutting</label>
                                        <div class="col-sm-4">
                                        <input type="date" name="cutting_mulai" class="form-control">
                                        </div>
                                        _
                                        <div class="col-sm-4" >
                                        <input type="date" name="cutting_selesai" class="form-control">
                                    </div>
                                </div>
                                </div>
                            
                                <div id="SEWING" class="menu">
                                    <div class="row mb-3" id="SEWING" >
                                        <label for="inputText" class="col-sm-3 col-form-label">Sewing</label>
                                        <div class="col-sm-4">
                                        <input type="date" name="sewing_mulai" class="form-control">
                                        </div>
                                        _
                                        <div class="col-sm-4"  >
                                        <input type="date" name="sewing_selesai" class="form-control">
                                        </div>
                                    </div>            
                                </div>               
                        <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-info"> Save</button>
                        </div>
                    </form>   
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
<script>
    function showMenu() {
        // Mendapatkan nilai dropdown yang dipilih
        var dropdown = document.getElementById("dropdown");
        var selectedValue = dropdown.value;

        // Menyembunyikan semua menu
        var menus = document.getElementsByClassName("menu");
        for (var i = 0; i < menus.length; i++) {
            menus[i].style.display = "none";
        }

        // Menampilkan menu yang sesuai dengan nilai dropdown yang dipilih
        if (selectedValue !== "") {
            var selectedMenu = document.getElementById(selectedValue);
            selectedMenu.style.display = "block";
        }
    }
</script>
@endsection
