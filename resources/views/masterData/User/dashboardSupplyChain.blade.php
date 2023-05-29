@extends('layout.dashboard')
@section('assets')
	<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- JUDUL -->
				<h5 class="mb-0 text-uppercase text-center">View Supply Chain</h5><hr><br>
			<!-- JUDUL END -->

			<div class="col-12">
				<a href="tambahadmin" class="btn btn-success" role="button" aria-pressed="true">+ Create Supply Chain</a>
			</div><br>

			<!-- ISI -->
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Username</th>
								<th>Password</th>
								<th>TGL BERGABUNG</th>
								<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
							
								<tr>
									<td>no++</td>
									<td>username</td>
									<td>password</td>
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