@extends('layout.dashboard')
@section('title', 'Permintaan Produksi')
@section('assets')
<link href="{{ asset('assets/plugins/datetimepicker/css/classic.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/datetimepicker/css/classic.time.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/datetimepicker/css/classic.date.css') }}" rel="stylesheet" />
<link rel="stylesheet"
    href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
@endsection
@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>INPUT PERMINTAAN
                                PRODUKSI</b> </h5>
                    </div>
                    <!-- /.card-header -->
                    <br>
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <form action="/insert-Permintaan" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_produk" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Target Delivery</label>
                                <div class="col-sm-10">
                                    <input type="date" name="target_delivery" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Jenis Produk</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" style="width: 100%;" name="id_jenis_produk" required>
                                        <option selected="selected"></option>
                                        @foreach ($jenisproduk as $produk )
                                        <option value="{{ $produk->id }}">{{ $produk->nama_jenis_produk }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" style="width: 100%;" name="id_kategori" required>
                                        <option selected="selected"></option>
                                        @foreach ($kategori as $ktg )
                                        <option value="{{ $ktg->id }}">{{ $ktg->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Sub Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" style="width: 100%;" name="id_sub_kategori" required>
                                        <option selected="selected"></option>
                                        @foreach ($subKategori as $sub )
                                        <option value="{{ $sub->id }}">{{ $sub->nama_sub_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <br><br>
                            <!-- jacket, glove, rainsweet, tshirt -->
                            {{-- <div>
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
                        </div> --}}
                            <!-- headware,bag -->
                            {{-- <div>
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
                        </div> --}}

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-info">Save</button>
                            </div>
                        </form>


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


<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datetimepicker/js/picker.js') }}"></script>
<script src="{{ asset('assets/plugins/datetimepicker/js/picker.date.js') }}"></script>
<script src="{{ asset('assets/js/form-date-time-pickes.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@endsection
