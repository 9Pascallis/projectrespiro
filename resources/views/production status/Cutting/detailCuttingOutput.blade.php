@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				
          <div class="card">
            <div class="card-header">
                <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>DETAIL CUTTING OUTPUT</b> </h5>
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
                            value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->target_delivery }}" disabled> 
                        </div>                                    
                    </div>  
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
				
                              
                    
                  
      @if ($cutting->where('id_process_cutting', 1)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 1</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 1)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
              </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 2)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 2</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 2)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 3)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 3</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 3)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 4)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 4</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 4)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 5)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 5</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 5)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 6)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 6</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 6)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 7)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 7</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 7)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 8)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 8</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 8)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 9)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 9</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 9)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 10)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 10</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 10)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 11)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 11</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 11)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 12)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 12</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 12)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 13)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 13</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 13)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 14)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 14</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 14)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif

      @if ($cutting->where('id_process_cutting', 15)->count() > 0)
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="example2" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Cutting ke 15</th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <th style="width: 5%">No</th>
                              <th style="width: 10%; text-align: center">Warna</th>
                              <th style="width: 10%; text-align: center">Ukuran</th>
                              <th style="width: 10%; text-align: center">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                          $no = 1;
                          $total = 0;
                          @endphp
                          @foreach ($cutting as $item)
                              @if ($item->id_process_cutting == 15)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                      <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                      <td style="text-align: center">{{ $item->total }}</td>
                                  </tr>
                                  @php
                                  $total += $item->total;
                                  @endphp
                              @endif
                          @endforeach
                          <tr>
                              <th style="width: 10%; text-align: center">Total</th>
                              <th></th>
                              <th></th>
                              <th style="text-align: center">{{ $total }}</th>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      @endif
        
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
							</table>
						</div>
					</div>
				</div>
             

          </div>
          <!-- end page content-->
         </div>
@endsection
@section('js')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
@endsection
