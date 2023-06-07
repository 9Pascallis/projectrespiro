@extends('layout.dashboard')
@section('title', 'Budgetting')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Budgeting
        </h6>
        <hr />


        <form action="/filter" method="GET">
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

        <br>
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 15%">Nama Artikel</th>
                        <th style="width: 15%">Target Delivery</th>
                        <th style="width: 10%; text-align: center">HPP</th>
                        <th style="width: 10%; text-align: center">Jumlah</th>
                        <th style="width: 10%; text-align: center">Total HPP</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($production as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->nama_produk}}</td>
                        <td>{{date('d-m-Y', strtotime($item->target_delivery))}}</td>
                        <td style="text-align: center">{{$item->HPP}}</td>
                        <td style="text-align: center">5</td>
                        <td style="text-align: center">Rp. 32.000.000</td>
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
