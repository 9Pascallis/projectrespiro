@extends('layout.dashboard')
@section('assets')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
				<h5 class="mb-0 text-uppercase text-center">View Sub Kategori</h5><hr><br>
			<!-- JUDUL END -->

			<div class="col-12">
				<a href="add-sub-kategori" class="btn btn-success" role="button" aria-pressed="true">+ Create sub kategori</a>
			</div><br>
			@if ($message = Session::get('success'))
				<div class="alert alert-dismissible fade show py-2 bg-success">
					<div class="d-flex align-items-center">
						<div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
						</div>
						<div class="ms-3">
							<div class="text-white">{{ $message }}</div>
						</div>
						</div>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif

			<!-- ISI -->
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Sub Kategori</th>
								<th>TGL BERGABUNG</th>
								<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
							
								<tr>
									<td>no++</td>
									<td>sub kategori</td>
                                    <td>created_at</td>
									<td class="text-center">
										<a class="btn btn-sm btn-outline-danger px-2 delete"  href="#"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							
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