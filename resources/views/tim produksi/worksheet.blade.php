@extends('layout.dashboard')
@section('title', 'Dashboard Worksheet')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Worksheet</h6>
          <div class="col-12">
            <a href="/request-worksheet" class="btn btn-success" role="button" aria-pressed="true">input worksheet</a>
          </div>
					<hr/>
						<div class="table-responsive">
							<table id="example2" class="table mb-0 table-hover">
                            <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 15%">Nomor WS</th>
                    <th style="width: 15%">Nama Artikel</th>
                    <th style="width: 15%">Target Delivery</th>
                    <th style="width: 15%">Allocation</th>
                    <th style="width: 15%; text-align: center">Tambah Barang Mentah</th>
                    <th style="width: 10%; text-align: center">View</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($worksheet as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $item->nomor_ws }}</td>
                      <td>{{ $item->productionPlan->konfirmasi_permintaan->permintaan->nama_produk }}</td>
                      <td>{{ date('d-m-Y', strtotime($item->productionPlan->konfirmasi_permintaan->permintaan->target_delivery)) }}</td>
                      <td>{{ $item->productionPlan->allocation->nama_allocation }}</td>
                      <td class="project-actions text-center">
                        <a class="btn btn-outline-info px-2" href="/barang-mentah/{{ $item->id }}"><i class="fas fa-plus"></i> </a>
                      </td>
                     
                      <td class="project-actions text-center">
                        <a class="btn btn-outline-secondary px-2" href="/detail-worksheet/{{ $item->id }}"><i class="fas fa-eye"></i> </a>
                      </td>
                    </tr> 
                    @endforeach
                  </tfoot>
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
<script>
  @if(Session::has('create'))
  toastr.options = {
      "closeButton": true,
      "progressBar": true
  }
  toastr.success("{{ session('create') }}");
  @endif

  @if(Session::has('update'))
  toastr.options = {
      "closeButton": true,
      "progressBar": true
  }
  toastr.success("{{ session('update') }}");
  @endif

  @if(Session::has('delete'))
  toastr.options = {
      "closeButton": true,
      "progressBar": true
  }
  toastr.success("{{ session('delete') }}");
  @endif

</script>
@endsection
