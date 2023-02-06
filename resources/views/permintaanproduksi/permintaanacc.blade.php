@extends('layouts.master')
@section('title', 'Dashboard Permintaan')
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
                  <li class="breadcrumb-item active">Permintaan ACC</li>
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
                <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>PERMINTAAN PRODUKSI ACC</b> </h5>
              </div>
              <!-- /.card-header -->
              <br>
              <div class="row mb-2">
                <div class="col-sm-9">
                    <td>
                        <div class="btn-group" style="margin-left: 20px">
                          <a href="/inputpermintaan" class="btn btn-primary btn-md " role="button" aria-pressed="true">+ Tambah Permintaan</a>
                        </div>
                    </td>
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
                    <th style="width: 30%">Nama Produk</th>
                    <th style="width: 18%">Target Delivery</th>
                    <th style="width: 15%">Total</th>
                    <th style="width: 17%">Tanggal Approval</th>
                    <th style="width: 15%; text-align: center">View</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>8400</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>        
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Ridingware</td>
                    <td>13-12-2023</td>
                    <td>8400</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>        
                </tr>
                  <tr>
                    <td>3</td>
                    <td>Sporty</td>
                    <td>14-12-2023</td>
                    <td>8400</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>        
                </tr>
                  <tr>
                    <td>4</td>
                    <td>Casual</td>
                    <td>15-12-2023</td>
                    <td>8400</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>        
                </tr>
                  <tr>
                    <td>5</td>
                    <td>Metal</td>
                    <td>16-12-2023</td>
                    <td>8400</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                    </td>        
                </tr>
                <tr>
                  <td>6</td>
                  <td>Challenger</td>
                  <td>12-12-2023</td>
                  <td>8400</td>
                  <td>12-12-2023</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                  </td>        
                </tr>
                <tr>
                  <td>7</td>
                  <td>Ridingware</td>
                  <td>13-12-2023</td>
                  <td>8400</td>
                  <td>12-12-2023</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                  </td>  
                <tr>
                  <td>8</td>
                  <td>Sporty</td>
                  <td>14-12-2023</td>
                  <td>8400</td>
                  <td>12-12-2023</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                  </td>        
              </tr>
                <tr>
                  <td>9</td>
                  <td>Casual</td>
                  <td>15-12-2023</td>
                  <td>8400</td>
                  <td>12-12-2023</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                  </td>        
              </tr>
                <tr>
                  <td>10</td>
                  <td>Metal</td>
                  <td>16-12-2023</td>
                  <td>8400</td>
                  <td>12-12-2023</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-primary btn-sm" href="/detailpermintaan"><i class="fas fa-folder"></i> View</a>
                  </td>        
              </tr>
                  </tfoot>
                </table>
                <br><br>
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
