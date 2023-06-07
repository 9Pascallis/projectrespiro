@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Dashboard
            Schedule</h6>
        <div class="col-12">
            <a href="/tambah-schedule" class="btn btn-success" role="button" aria-pressed="true">Tambah Schedule</a>
        </div>
        <hr />
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 10%">Nomor WS</th>
                        <th style="width: 10%">Nama Produk</th>
                        <th style="width: 10%">Target Delivery</th>
                        <th style="width: 10%">PPM</th>
                        <th style="width: 10%">Cutting Start</th>
                        <th style="width: 10%">Cutting Finish</th>
                        <th style="width: 10%">Sewing Start</th>
                        <th style="width: 10%">Sewing Finish</th>
                        <th style="width: 10%; text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($schedule as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->worksheet->nomor_ws}}</td>
                        <td>{{$item->worksheet->productionPlan->konfirmasi_permintaan->permintaan->nama_produk}}</td>
                        <td>{{date('d-m-Y', strtotime($item->worksheet->productionPlan->konfirmasi_permintaan->permintaan->target_delivery))}}
                        </td>
                        <td>{{ date('d-m-Y', strtotime($item->ppm))}}</td>
                        @if ($item->cutting_mulai == null)
                        <td style="width: 10%; text-align: center">-</td>
                        @else
                        <td>{{date('d-m-Y', strtotime($item->cutting_mulai))}}</td>
                        @endif
                        @if ($item->cutting_selesai == null)
                        <td style="width: 10%; text-align: center">-</td>
                        @else
                        <td>{{date('d-m-Y', strtotime($item->cutting_selesai))}}</td>
                        @endif
                        @if ($item->sewing_mulai == null)
                        <td style="width: 10%; text-align: center">-</td>
                        @else
                        <td>{{date('d-m-Y', strtotime($item->sewing_mulai))}}</td>
                        @endif
                        @if ($item->sewing_selesai == null)
                        <td style="width: 10%; text-align: center">-</td>
                        @else
                        <td>{{ date('d-m-Y', strtotime($item->sewing_selesai)) }}</td>
                        @endif
                        <td class="project-actions text-center">
                            <a class="btn btn-outline-warning px-2" href="/edit-schedule/{{ $item->id }}"><i
                                    class="fas fa-solid fa-plus"></i></a>
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
@endsection
