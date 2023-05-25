@extends('layout.dashboard')
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
        <form action="/filter-worksheet" method="GET">
            <div class="row">
                <div class="col-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text btn btn-info text-white" id="basic-addon1"><i
                                    class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" name="start_date" id="start_date"
                            placeholder="Start Date" readonly>
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text btn btn-info text-white" id="basic-addon1"><i
                                    class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" name="end_date" id="end_date" placeholder="End Date"
                            readonly>
                    </div>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-outline-info">Filter</button>
                    <a href="/budgeting"><button type="button" class="btn btn-outline-info">Clear</button></a>
                </div>
            </div>
        </form>
        <hr/>
        <br>
        <div class="table-responsive">
            <table id="example2" class="table mb-0 table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 30%">Nama Produk</th>
                        <th style="width: 25%">Target Delivery</th>
                        <th style="width: 25%">Kategori</th>
                        <th style="width: 25%">Sub Kategori</th>
                        <th style="width: 15%">Allocation</th>
                        <th style="width: 15%">HPP</th>
                        <th style="width: 15%; text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($productionPlan as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->permintaan->nama_produk}}</td>
                            <td>{{$item->permintaan->target_delivery}}</td>
                            <td>{{$item->permintaan->kategori->nama_kategori}}</td>
                            <td>{{$item->permintaan->sub_kategori->nama_sub_kategori}}</td>
                            <td>{{$item->allocation->nama_allocation}}</td>
                            <td>{{$item->HPP}}</td>
                            <td class="project-actions text-center">
                                <a class="btn btn-outline-warning px-2" href="/input-worksheet-{{ $item->id }}"><i
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
