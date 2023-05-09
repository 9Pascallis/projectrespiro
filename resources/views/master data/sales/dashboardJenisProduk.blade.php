@extends('layout.dashboard')
@section('assets')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
				<h5 class="mb-0 text-uppercase text-center">View Jenis Produk</h5><hr><br>
			<!-- JUDUL END -->

			<div class="col-12">
				<a href="/add-jenis-produk" class="btn btn-success" role="button" aria-pressed="true">+ Create Jenis Produk</a>
			</div><br>
	
			<!-- ISI -->
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Jenis Produk</th>
								<th>TGL Dibuat</th>
								<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach ($data as $item)
								<tr>
									<td>{{ $no++}}</td>
									<td>{{$item->nama_jenis_produk}}</td>
                                    <td>{{$item->created_at->format('d-m-Y')}}</td>
									<td class="text-center">
										<button type="button"class="btn btn-sm btn-outline-danger px-2 delete" ></button>
									</td>
								</tr>
								@endforeach
							
						</tbody>
					</table>
				</div>
			<!-- ISI END -->
		</div>
	</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script src="assets_admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets_admin/js/table-datatable.js"></script>
@endsection