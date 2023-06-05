@extends('layout.dashboard')
@section('title', 'Input Confirm')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0" style="justify-content: center; text-align: center; margin-top: 10px">Input
                            Item Produk</h6>
                    </div>
                    <div class="card-body">
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
                        <div class="d-flex justify-content-end">
                            <a href="/dashboard-permintaan" class="btn btn-secondary" role="button" aria-pressed="true">Back</a>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal">Tambah Warna dan Ukuran</button>
                        </div>
                    </div>
                </div>
             
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 10%; text-align: center">Warna</th>
                                <th style="width: 10%; text-align: center">Ukuran</th>
                                <th style="width: 10%; text-align: center">Total</th>
                                <th style="width: 10%; text-align: center">Hapus</th>
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
                                <td class="text-center">
                                    <a href="/hapus-item-produk{{$item->id }}"><button type="button" class="btn btn-sm btn-outline-danger px-2 delete">Hapus</button></a>
                            </tr> 
                            @endforeach
                            </tfoot>
                    </table>
                </div>
                    </div>
                </div>
            </div>

            



            <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Warna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/insert-warna" method="POST">
                                @csrf
                                <input type="hidden" name="id_permintaan" value="{{ $permintaan->id }}">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                    <div class="col-sm-8">
                                        <select class="form-select" style="width: 100%;" name="id_warna" required>
                                            @foreach ($warna as $color )
                                            <option value="{{ $color->id }}">{{ $color->nama_warna }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                    <div class="col-sm-8">
                                        <select class="form-select" style="width: 100%;" name="id_ukuran" required>
                                            @foreach ($ukuran as $size )
                                            <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Total</label>
                                    <div class="col-sm-8">
                                        <input type="number" name="total" class="form-control" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
@section('js')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
@endsection
