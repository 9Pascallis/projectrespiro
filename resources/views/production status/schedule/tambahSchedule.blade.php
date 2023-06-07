@extends('layout.dashboard')
@section('title', 'Production Status')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">
            Konfirmasi Permintaan Produksi</h6>
        <hr />
        <div class="table-responsive">
            <table id="example2" class="table mb-0 table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 30%">Nama Produk</th>
                        <th style="width: 25%">Target Delivery</th>
                        <th style="width: 15%; text-align: center">Status</th>
                        <th style="width: 15%; text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($schedule as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->nama_produk}}</td>
                        <td>{{date('d-m-Y', strtotime($item->target_delivery))}}</td>                      
                        <td class="text-center project-state">
                            @if (empty($item->ppm))
                            <span class="badge bg-light-danger text-danger w-100">Data Belum diinput</span>    
                            @else
                            <span class="badge bg-light-success text-success w-100">Data Telah diinput</span>    
                            @endif
                          </td>
                        <td class="project-actions text-center">
                            <a class="btn btn-outline-warning px-2" href="/input-schedule/{{ $item->id }}"><i
                                    class="fas fa-solid fa-plus"></i></a>
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
@endsection
