@extends('layout.dashboard')
@section('title', 'Confirm Request')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection
@section('content')


<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">
            Konfirmasi Permintaan Produksi</h6>
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
                        <th style="width: 15%">Total</th>
                        <th style="width: 15%;text-align: center">Status</th>
                        <th style="width: 15%; text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($konfirm as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama_produk}}</td>
                            <td>{{ date('d-m-Y', strtotime($item->target_delivery))}}</td>
                            <td>{{$item->jumlah}}</td>
                            <td class="text-center project-state">
                                @if ($item->status == 'accept')
                                <span class="badge bg-light-success text-success w-100">Data Telah diinputkan</span>    
                                @elseif ($item->status == 'decline')
                                <span class="badge bg-light-success text-success w-100">Data Telah diinputkan</span> 
                                @else
                                <span class="badge bg-light-danger text-danger w-100">Data Belum diinputkan</span> 
                                @endif
                              </td>
                            
                           
                              {{-- <td>{{ $item->status ?? 'Data Belum diinputkan' }}</td> --}}

                              <td class="project-actions text-center">
                                <a class="btn btn-outline-warning px-2" href="/konfirmasi-permintaan/{{ $item->id}}"><i
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
