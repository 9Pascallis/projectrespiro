@extends('layout.dashboard')
@section('title', 'Dashboard Konfirmasi')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Dashboard Konfirmasi</h6>
          <div class="col-12">
            <a href="/before-konfirmasi" class="btn btn-success" role="button" aria-pressed="true">Confirm Request</a>
          </div>
          <hr/>
						<div class="table-responsive">
							<table id="example2" class="table mb-0 table-hover">
                            <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 30%">Nama Produk</th>
                    <th style="width: 25%">Target Delivery</th>
                    <th style="width: 15%">Total</th>
                    <th style="width: 15%; text-align: center">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                  @endphp
                  @foreach ($konfirmPermintaan as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->permintaan->nama_produk}}</td>
                    <td>{{$item->permintaan->target_delivery}}</td>
                    <td>{{ $item->permintaan->jumlah }}</td>
                    <td class="text-center project-state">
                      @if ($item->status == 'accept')
                      <span class="badge bg-light-success text-success w-100">{{$item->status}}</span>    
                      @else
                      <span class="badge bg-light-danger text-danger w-100">{{$item->status}}</span>    
                      @endif
                    </td>
            
                  </tr>
                  @endforeach
                  </tbody>
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
