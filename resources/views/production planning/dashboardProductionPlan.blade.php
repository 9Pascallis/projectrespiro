@extends('layout.dashboard')
@section('title', 'Dashboard Production Plan')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">
            PRODUCTION PLAN</h6>
            <div class="col-12">
                <a href="/request-production" class="btn btn-success" role="button" aria-pressed="true">Request Production Plan</a>
              </div>
        <hr>
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 10%">Nama Artikel</th>
                        <th style="width: 10%">Target Delivery</th>
                        <th style="width: 10%">Allocation</th>
                        <th style="width: 10%">Jumlah</th>
                        <th style="width: 10%">HPP</th>
                        <th style="width: 10%">CMT</th>
                        <th style="width: 10%">Cutting</th>
                        <th style="width: 10%">Sewing</th>
                        <th style="width: 10%">Closing</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($productionPlan as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->konfirmasi_permintaan->permintaan->nama_produk}}</td>
                        <td>{{$item->konfirmasi_permintaan->permintaan->target_delivery}}</td>
                        <td>{{$item->allocation->nama_allocation}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>{{$item->HPP}}</td>
                        <td>{{$item->CMT}}</td>
                        <td>{{$item->cutting_mulai}}</td>
                        <td>{{$item->sewing_mulai}}</td>
                        <td>{{$item->closing_mulai}}</td>
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
