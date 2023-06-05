@extends('layout.dashboard')
@section('title', 'Input Worksheet')
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Barang
            Mentah</h6>
        <hr />

        <div class="row" style="margin-left: 20px; margin-right: 20px">
            <div class="text-left">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-1 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_production_plan" class="form-control"
                            value="{{ $worksheet->productionPlan->konfirmasi_permintaan->permintaan->nama_produk }}"
                            disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-1 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_production_plan" class="form-control"
                            value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->kategori->nama_kategori }}"
                            disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-1 col-form-label">Sub Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_production_plan" class="form-control"
                            value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->sub_kategori->nama_sub_kategori }}"
                            disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-1 col-form-label">Allocation</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_production_plan" class="form-control"
                            value="{{ $worksheet->productionPlan->allocation->nama_allocation }}" disabled> </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-1 col-form-label">Target Delivery</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_production_plan" class="form-control"
                            value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->target_delivery }}"
                            disabled> </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/worksheet" class="btn btn-secondary" role="button" aria-pressed="true">Back</a>
                    &ensp;
                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#exampleVerticallycenteredModal">Tambah Shell Fabric</button>
                    &ensp;
                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#exampleVerticallycenteredModal0">Tambah Linning</button>
                    &ensp;
                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#exampleVerticallycenteredModal1">Tambah Interlining</button>
                    &ensp;
                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#exampleVerticallycenteredModal2">Tambah Trimming</button>
                </div>
            </div>


            <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Shell Fabric</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/insert-shell-fabric" method="POST">
                                @csrf
                                <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kode</label>
                                    <div class="col-sm-8">
                                        <input type="string" name="kode" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="description" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Unit</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="unit" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Cons</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cons" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Color</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="color" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">QTY</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="qty" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Remarks</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="remarks" class="form-control" required>
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


            <div class="modal fade" id="exampleVerticallycenteredModal0" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Linning</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/insert-linning" method="POST">
                                @csrf
                                <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kode</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kode" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="description" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Unit</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="unit" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Cons</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cons" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Color</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="color" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">QTY</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="qty" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Remarks</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="remarks" class="form-control" required>
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


            <div class="modal fade" id="exampleVerticallycenteredModal1" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Interlining</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/insert-interlinning" method="POST">
                                @csrf
                                <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kode</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kode" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="description" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Unit</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="unit" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Cons</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cons" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Color</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="color" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">QTY</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="qty" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Remarks</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="remarks" class="form-control" required>
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


            <div class="modal fade" id="exampleVerticallycenteredModal2" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Trimming</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/insert-trimming" method="POST">
                                @csrf
                                <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kode</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kode" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="description" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Unit</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="unit" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Cons</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cons" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Color</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="color" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">QTY</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="qty" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Remarks</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="remarks" class="form-control" required>
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
</div>


<div class="card">
    <div class="card-body">
            <table id="example2" class="table table-striped table-bordered">
                <tr>
                <th></th>
                <th>Shell Fabric</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
                <tr>
                  <th style="width: 5%">No</th>
                  <th style="width: 15%">Kode</th>
                  <th style="width: 10%; text-align: center">Description</th>
                  <th style="width: 10%; text-align: center">Unit</th>
                  <th style="width: 10%; text-align: center">Cons</th>
                  <th style="width: 10%; text-align: center">Color</th>
                  <th style="width: 10%; text-align: center">Qty</th>
                  <th style="width: 10%; text-align: center">Remarks</th>
                </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($shell_fabric as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $item->kode }}</td>
                      <td style="text-align: center">{{ $item->description }}</td>
                      <td style="text-align: center">{{ $item->unit }}</td>
                      <td style="text-align: center">{{ $item->cons }}</td>
                      <td style="text-align: center">{{ $item->color }}</td>
                      <td style="text-align: center">{{ $item->qty }}</td>
                      <td style="text-align: center">{{ $item->remarks }}</td>
                    </tr>
                    @endforeach
                </tfoot>
              </table>
    </div>
</div>

<div class="card">
    <div class="card-body">
            <table id="example2" class="table table-striped table-bordered">
                <tr>
                <th></th>
                <th>Linning</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
                <tr>
                  <th style="width: 5%">No</th>
                  <th style="width: 15%">Kode</th>
                  <th style="width: 10%; text-align: center">Description</th>
                  <th style="width: 10%; text-align: center">Unit</th>
                  <th style="width: 10%; text-align: center">Cons</th>
                  <th style="width: 10%; text-align: center">Color</th>
                  <th style="width: 10%; text-align: center">Qty</th>
                  <th style="width: 10%; text-align: center">Remarks</th>
                </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($linning as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $item->kode }}</td>
                      <td style="text-align: center">{{ $item->description }}</td>
                      <td style="text-align: center">{{ $item->unit }}</td>
                      <td style="text-align: center">{{ $item->cons }}</td>
                      <td style="text-align: center">{{ $item->color }}</td>
                      <td style="text-align: center">{{ $item->qty }}</td>
                      <td style="text-align: center">{{ $item->remarks }}</td>
                    </tr>
                    @endforeach
                </tfoot>
              </table>
    </div>
</div>


<div class="card">
    <div class="card-body">
            <table id="example2" class="table table-striped table-bordered">
                <tr>
                <th></th>
                <th>Interlining</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
                <tr>
                  <th style="width: 5%">No</th>
                  <th style="width: 15%">Kode</th>
                  <th style="width: 10%; text-align: center">Description</th>
                  <th style="width: 10%; text-align: center">Unit</th>
                  <th style="width: 10%; text-align: center">Cons</th>
                  <th style="width: 10%; text-align: center">Color</th>
                  <th style="width: 10%; text-align: center">Qty</th>
                  <th style="width: 10%; text-align: center">Remarks</th>
                </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($interlining as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $item->kode }}</td>
                      <td style="text-align: center">{{ $item->description }}</td>
                      <td style="text-align: center">{{ $item->unit }}</td>
                      <td style="text-align: center">{{ $item->cons }}</td>
                      <td style="text-align: center">{{ $item->color }}</td>
                      <td style="text-align: center">{{ $item->qty }}</td>
                      <td style="text-align: center">{{ $item->remarks }}</td>
                    </tr>
                    @endforeach
                </tfoot>
              </table>
    </div>
</div>


<div class="card">
    <div class="card-body">
            <table id="example2" class="table table-striped table-bordered">
                <tr>
                <th></th>
                <th>Trimming</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
                <tr>
                  <th style="width: 5%">No</th>
                  <th style="width: 15%">Kode</th>
                  <th style="width: 10%; text-align: center">Description</th>
                  <th style="width: 10%; text-align: center">Unit</th>
                  <th style="width: 10%; text-align: center">Cons</th>
                  <th style="width: 10%; text-align: center">Color</th>
                  <th style="width: 10%; text-align: center">Qty</th>
                  <th style="width: 10%; text-align: center">Remarks</th>
                </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($trimming as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{ $item->kode }}</td>
                      <td style="text-align: center">{{ $item->description }}</td>
                      <td style="text-align: center">{{ $item->unit }}</td>
                      <td style="text-align: center">{{ $item->cons }}</td>
                      <td style="text-align: center">{{ $item->color }}</td>
                      <td style="text-align: center">{{ $item->qty }}</td>
                      <td style="text-align: center">{{ $item->remarks }}</td>
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
