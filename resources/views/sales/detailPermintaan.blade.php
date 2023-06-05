@extends('layout.dashboard')
@section('assets')
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Detail
            Permintaan</h6>
        <hr />
      
                <!-- General Form Elements -->
                <form>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_permintaan" class="form-control"
                                value="{{ $permintaan->nama_produk }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Target Delivery</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_permintaan" class="form-control"
                                value="{{ $permintaan->target_delivery }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_permintaan" class="form-control"
                                value="{{ $permintaan->jenis_produk->nama_jenis_produk }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_permintaan" class="form-control"
                            value="{{ $permintaan->kategori->nama_kategori }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Sub Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_permintaan" class="form-control"
                        value="{{ $permintaan->sub_kategori->nama_sub_kategori }}" disabled>
                    </div>
                  </div>
                </form>
                <br>

                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 10%; text-align: center">Warna</th>
                        <th style="width: 10%; text-align: center">Ukuran</th>
                        <th style="width: 10%; text-align: center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($item_produk as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td style="text-align: center">{{$item->warna->nama_warna}}</td>
                        <td style="text-align: center">{{$item->ukuran->jenis_ukuran}}</td>
                        <td style="text-align: center">{{$item->total}}</td>
                    </tr> 
                    @endforeach
                    
                    </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </table>
</div>
</div>
</div>


</div>
<!-- end page content-->
</div>
@endsection
@section('js')
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/save.js') }}"></script>
@endsection
