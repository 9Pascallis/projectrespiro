@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')


<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Jenis
            Produk</h6>
        <!-- JUDUL END -->

        <div class="col-12">
            <a href="/tambah-Jenis-Produk" class="btn btn-success" role="button" aria-pressed="true">+ Create Jenis
                Produk</a>
        </div><br>

        <!-- ISI -->
        <div class="table-responsive">
            <table id="example2" class="table mb-0 table-hover">
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
                        <td>{{$no++}}</td>
                        <td>{{$item->nama_jenis_produk}}</td>
                        <td>{{$item->created_at->format('d-m-Y')}}</td>
                        <td class="text-center">
                            <a href="/hapus-Jenis-Produk{{$item->id }}"><button type="button"
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
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/search-datatable.js"></script>
<script src="assets/js/filter.js"></script>
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
