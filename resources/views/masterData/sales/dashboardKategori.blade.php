@extends('layout.dashboard')
@section('title', 'kategori')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')



<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Kategori</h6>
        <hr><br>
        <!-- JUDUL END -->

        <div class="col-12">
            <a href="/tambah-Kategori" class="btn btn-success" role="button" aria-pressed="true">+ Create kategori</a>
        </div><br>
       
        <!-- ISI -->
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>TGL BERGABUNG</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($kategori as $item)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{$item->nama_kategori}}</td>
                        <td>{{$item->created_at->format('d-m-Y')}}</td>
                        <td class="text-center">
                            <a href="/hapus-Kategori{{$item->id }}"><button type="button"
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
<script src="https://code.jquery.com/jquery-3.6.4.slim.js"
    integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
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
