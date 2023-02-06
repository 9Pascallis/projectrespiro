@extends('layouts.master')
@section('title', 'Input Worksheet')
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
                  <li class="breadcrumb-item"><a href="/dashboardworksheet">Dashboard</a></li>
                  <li class="breadcrumb-item active">Input Worksheet</li>
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
                <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>INPUT WORKSHEET</b> </h5>
              </div>
              <!-- /.card-header -->
              {{-- <div class="row mb-2">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                  <div style="justify-content: right; text-align: end; margin-right: 20px">
                    <td>
                      <div class="btn-group" style="margin-left: 20px">
                          <button type="button" class="btn btn-info">PDF</button>
                          <button type="button" class="btn btn-info">Print</button>
                      </div>
                    </td>
                  </div>
                </div>
              </div> --}}
              <div class="card-body">
                <!-- General Form Elements -->
                <form>
                    <h6 style="justify-content: left; text-align: left;"><b>INPUT WORKSHEET</b></h6><br>
                    <div class="row" style="margin-left: 20px; margin-right: 20px">
                        <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nomor</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" value="Isi Nomor">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Brand</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" value="Nama Brand">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nama Produk</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" value="Ridingware" disabled>
                                    </div>  
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" value="Rovero" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Sub Kategori</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" value="Deluga" disabled>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-left">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Buyer</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Buyer">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">CMT/FOB</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama CMT/FOB">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Tanggal Input</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="09-12-2022" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Target Delivery</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="13-04-2023" disabled>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div><br>
                  <br>
                <table id="example1" class="table table-bordered table-striped">
                    <h6 style="justify-content: left; text-align: left;"><b>DETAIL WARNA</b></h6><br>
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
