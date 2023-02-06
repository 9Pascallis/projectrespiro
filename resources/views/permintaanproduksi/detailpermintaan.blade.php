@extends('layouts.master')
@section('title', 'Detail Permintaan')
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
                  <li class="breadcrumb-item"><a href="/dashboardpermintaansales">Dashboard</a></li>
                  <li class="breadcrumb-item active">Detail Permintaan</li>
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
                <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>DETAIL PERMINTAAN PRODUKSI</b> </h5>
              </div>
              <!-- /.card-header -->
              <br>
              <div class="row mb-2">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                  <div style="justify-content: right; text-align: end; margin-right: 20px">
                    <td>
                      <div class="btn-group" style="margin-left: 20px">
                        <button type="button" class="btn btn-info">Excel</button>
                          <button type="button" class="btn btn-info">PDF</button>
                          <button type="button" class="btn btn-info">Print</button>
                      </div>
                    </td>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <!-- General Form Elements -->
                <form>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Artikel</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="Ridingware" disabled>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Target Delivery</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="12/12/2022" disabled>
                    </div>  
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Jenis Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="Jacket" disabled>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="Rovero" disabled>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Sub Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="Deluga" disabled>
                    </div>
                  </div>

                  <br>
                <table id="example1" class="table table-bordered table-striped">
                    
                  <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 15%">Warna</th>
                    <th style="width: 10%; text-align: center">XS</th>
                    <th style="width: 10%; text-align: center">S</th>
                    <th style="width: 10%; text-align: center">M</th>
                    <th style="width: 10%; text-align: center">L</th>
                    <th style="width: 10%; text-align: center">XL</th>
                    <th style="width: 10%; text-align: center">XXL</th>
                    <th style="width: 10%; text-align: center">Total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Merah</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">300</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">600</td>
                    <td style="text-align: center">200</td>                  
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Orange</td>
                    <td style="text-align: center">400</td>
                    <td style="text-align: center">300</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">400</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">700</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Biru</td>
                    <td style="text-align: center">300</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">600</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">300</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Hijau</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">600</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">600</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><b>TOTAL</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: center"><b>1500</b></td>
                  </tr>
                  </tfoot>
                </table>
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
