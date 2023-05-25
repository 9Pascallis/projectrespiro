@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Detail
            Permintaan</h6>
        <hr />
        <div class="table-responsive">
            <table id="example" class="table mb-0 table-hover">
                <!-- General Form Elements -->
                <form>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Ridingware" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Target Delivery</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="12/12/2022" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Jacket" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Rovero" disabled>
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Sub Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Deluga" disabled>
                    </div>
                  </div> --}}
                </form>
                <br>

                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 15%">Warna</th>
                        <th style="width: 10%; text-align: center">XS</th>
                        <th style="width: 10%; text-align: center">S</th>
                        <th style="width: 10%; text-align: center">M</th>
                        <th style="width: 10%; text-align: center">L</th>
                        <th style="width: 10%; text-align: center">XL</th>
                        <th style="width: 10%; text-align: center">XXL</th>
                        <th style="width: 10%; text-align: center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Merah</td>
                        <td style="text-align: center">200</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">300</td>
                        <td style="text-align: center">200</td>
                        <td style="text-align: center">500</td>
                        <td style="text-align: center">600</td>
                        <td style="text-align: center">200</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Orange</td>
                        <td style="text-align: center">400</td>
                        <td style="text-align: center">300</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">400</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">500</td>
                        <td style="text-align: center">700</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Biru</td>
                        <td style="text-align: center">300</td>
                        <td style="text-align: center">200</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">600</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">300</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hijau</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">500</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">600</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">100</td>
                        <td style="text-align: center">600</td>
                    </tr>
                    <tr>
                        <td>5</td disabled>
                        <td><b>TOTAL</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: center"><b>1500</b></td>
                    </tr>
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
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/save.js"></script>
@endsection
