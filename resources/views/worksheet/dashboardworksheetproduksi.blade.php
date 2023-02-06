@extends('layouts.master')
@section('title', 'Dashboard Worksheet')
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
                  <li class="breadcrumb-item active">Dashboard Worksheet</li>
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
                <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>DASHBOARD WORKSHEET</b> </h5>
              </div>
              <!-- /.card-header -->
              <br>
              <div class="row mb-2">
                <div class="col-sm-9">
                    {{-- <td>
                        <div class="btn-group" style="margin-left: 20px">
                          <a href="/inputpermintaan" class="btn btn-primary btn-md " role="button" aria-pressed="true">+ Tambah Permintaan</a>
                        </div>
                    </td> --}}
                </div>
                <div class="col-sm-3">
                    <div style="justify-content: right; text-align: end; margin-right: 20px">
                        <div class="card-tools">
                            <div class="input-group input-group-md">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="card-body">

                
                <table id="example1" class="table table-bordered table-striped">
                    
                  <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 25%">Nama Artikel</th>
                    <th style="width: 20%">Target Delivery</th>
                    <th style="width: 15%">Total</th>
                    <th style="width: 15%; text-align: center">Status</th>
                    <th style="width: 10%; text-align: center">View</th>
                    <th style="width: 10%; text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                      <span class="badge badge-success">Sudah di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-info btn-sm" href="/inputpermintaan"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Ridingware</td>
                    <td>13-12-2023</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                      <span class="badge badge-success">Sudah di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-info btn-sm" href="/inputpermintaan"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                  <tr>
                    <td>3</td>
                    <td>Sporty</td>
                    <td>14-12-2023</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                      <span class="badge badge-success">Sudah di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-info btn-sm" href="/inputpermintaan"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                  <tr>
                    <td>4</td>
                    <td>Casual</td>
                    <td>15-12-2023</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                      <span class="badge badge-dark">Belum di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-info btn-sm" href="/inputpermintaan"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                  <tr>
                    <td>5</td>
                    <td>Metal</td>
                    <td>16-12-2023</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                      <span class="badge badge-dark">Belum di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-info btn-sm" href="/inputpermintaan"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                  </tfoot>
                </table>
                <br><br>
                <!-- Alert Delete-->
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Hapus Permintaan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus permintaan produksi?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paginations -->
                <div class="d-flex justify-content-end">
                    <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                    </nav>
                </div>
                <!-- End Paginations -->
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