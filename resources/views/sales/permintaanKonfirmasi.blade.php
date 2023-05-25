@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">
            Permintaan Produksi</h6>
        <div class="col-12">
            <a href="/input-permintaan" class="btn btn-success" role="button" aria-pressed="true">input request</a>
        </div><br>
        <hr />
        <div class="table-responsive">
            <table id="example2" class="table mb-0 table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 30%">Nama Produk</th>
                        <th style="width: 18%">Target Delivery</th>
                        <th style="width: 15%">Jenis Produk</th>
                        <th style="width: 15%">Kategori</th>
                        <th style="width: 15%">Sub Kategori</th>
                        <th style="width: 15%">Total</th>
                        <th style="width: 15%; text-align: center">View</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($permintaan as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->nama_produk}}</td>
                        <td>{{$item->target_delivery}}</td>
                        <td>{{$item->jenis_produk->nama_jenis_produk}}</td>
                        <td>{{$item->kategori->nama_kategori}}</td>
                        <td>{{$item->sub_kategori->nama_sub_kategori}}</td>
                        <td>8400</td>
                        <td class="project-actions text-center">
                            <a class="btn btn-outline-info px-2" href="/detail-permintaan"><i class="fas fa-eye"></i>
                            </a>
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

    @if(Session::has('destroy'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('destroy') }}");
    @endif

</script>
@endsection
