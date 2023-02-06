@extends('layouts.master')
@section('title', 'Approval Permintaan')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="/dashboardapprovalpermintaan">Dashboard</a></li>
                  <li class="breadcrumb-item active">Approval Permintaan</li>
                </ol>
              </div>
          <div class="col-sm-6">
            <div id="tanggalwaktu" class="breadcrumb float-sm-right"></div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Artikel</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Target Delivery</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control">
                        </div>  
                    </div>
                    <br><br>
                        <div class="row">
                            <div class="col-md-3">      
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
                        <div class="duplicate my-2">
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
                                <a href="#" class="button-remove btn btn-danger">
                                <span class="fas fa-trash"></span>
                                </a> 
                            </div>
                        </div>
                        </div>
                        <button class="btn-add1 btn btn-info mb-3">
                        + Tambah Warna
                        </button>
                        <br><br>
                        <div class="d-flex justify-content-end">
                            <a href="/dashboardapprovalpermintaan" class="btn btn-primary btn-md " role="button" aria-pressed="true">Approval Permintaan</a>
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
  </div>
  <!-- /.content-wrapper -->

  
  @endsection
