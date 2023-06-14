@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
<div class="card">
  <div class="card-body">
      <h6 class="mb-0 text-uppercase" style="justify-content: center; text-align: center; margin-top: 10px">Cutting Output</h6>
      <hr/>
      <div class="table-responsive">
          <table id="example2" class="table table-bordered table-hover mb-0">
              <thead>
                  <tr>
                      <th style="width: 5%">No</th>
                      <th style="width: 5%">Nomor WS</th>
                      <th style="width: 10%">Nama Artikel</th>
                      @foreach ($processCuttings as $processCutting)
                      <th style="width: 5%">{{ $processCutting->id }}</th>
                      @endforeach
                      <th style="width: 5%">Total</th>
                      <th style="width: 5%">Action</th>
                      <th style="width: 5%">View</th>
                  </tr>
              </thead>
              <tbody>
                  @php
                  $no = 1;
                  @endphp
                  @foreach ($worksheets as $worksheet)
                  <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $worksheet->nomor_ws }}</td>
                      <td>{{ $worksheet->productionPlan->konfirmasi_permintaan->permintaan->nama_produk }}</td>
                      @foreach ($processCuttings as $processCutting)
                      <td>
                          @if (isset($data[$worksheet->id][$processCutting->id]))
                          {{ $data[$worksheet->id][$processCutting->id] }}
                          @else
                          -
                          @endif
                      </td>
                      @endforeach
                      <td>
                          @php
                          $total = 0;
                          if (isset($data[$worksheet->id])) {
                              $total = array_sum($data[$worksheet->id]);
                          }
                          echo $total;
                          @endphp
                      </td>
                      <td class="project-actions text-center">
                          <a class="btn btn-outline-info px" href="/input-cutting/{{ $worksheet->id }}"><i class="fas fa-plus"></i> </a>
                      </td>
                      <td class="project-actions text-center">
                          <a class="btn btn-outline-info px" href="/detail-cutting-output/{{ $worksheet->id }}"><i class="fas fa-eye"></i></a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
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
<script src="assets/js/search-datatable.js"></script>
@endsection
