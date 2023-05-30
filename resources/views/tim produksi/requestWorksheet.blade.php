@extends('layout.dashboard')
@section('title', 'Worksheet')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection
@section('content')


<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">
            Input Worksheet</h6>
        <br><br>
        <hr/>
        <br>
        <div class="table-responsive">
            <table id="example2" class="table mb-0 table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 30%">Nama Produk</th>
                        <th style="width: 25%">Target Delivery</th>
                        <th style="width: 15%">HPP</th>
                        <th style="width: 15%">Status</th>
                        <th style="width: 15%; text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($worksheet as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama_produk}}</td>
                            <td>{{$item->target_delivery}}</td>
                            <td>{{$item->HPP}}</td>
                            <td class="text-center project-state">
                                @if (empty($item->nomor_ws))
                                <span class="badge bg-light-danger text-danger w-100">Data Belum diinput</span>    
                                @else
                                <span class="badge bg-light-success text-success w-100">Data Telah diinput</span>    
                                @endif
                              </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-outline-warning px-2" href="/input-worksheet/{{ $item->id }}"><i
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
 <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function () {
        $("#start_date").datepicker({
            "dateFormat": "yy-mm-dd"
        });
        $("#end_date").datepicker({
            "dateFormat": "yy-mm-dd"
        });
    });

</script>
@endsection
