@extends('layout.dashboard')
@section('assets')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
				<h5 class="mb-0 text-uppercase text-center">Dashboard User</h5><br>
			<!-- JUDUL END -->

			<div class="col-12">
				<a href="/tambah-user" class="btn btn-success" role="button" aria-pressed="true">+ Tambah User</a>
			</div>
			<hr>
			<br>

			<!-- ISI -->
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Role</th>
								<th>Username</th>
								<th>Password</th>
								<th>TGL BERGABUNG</th>
								<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($user as $item)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$item->role->nama_role}}</td>
								<td>{{$item->username}}</td>
								<td>{{$item->password}}</td>
								<td>{{$item->created_at->format('d-m-Y')}}</td>
								<td class="text-center">
									<a href="/hapus-user{{$item->id }}"><button type="button"
											class="btn btn-sm btn-outline-danger px-2 delete"><i
												class="fas fa-trash"></i></button></a>
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
<script src="assets_admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets_admin/js/table-datatable.js"></script>
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