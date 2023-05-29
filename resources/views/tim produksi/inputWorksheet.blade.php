@extends('layout.dashboard')
@section('title', 'Input Worksheet')
@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Input
            Worksheet</h6>
        <hr />

        <h6 style="justify-content: left; text-align: left;"><b>INPUT WORKSHEET</b></h6><br>
        <div class="row" style="margin-left: 20px; margin-right: 20px">
                <div class="text-left">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-1 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_production_plan" class="form-control"
                                value="{{ $productionPlan->konfirmasi_permintaan->permintaan->nama_produk }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-1 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_production_plan" class="form-control"
                                value="{{  $productionPlan->konfirmasi_permintaan->permintaan->kategori->nama_kategori }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-1 col-form-label">Sub Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_production_plan" class="form-control"
                                value="{{  $productionPlan->konfirmasi_permintaan->permintaan->sub_kategori->nama_sub_kategori }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-1 col-form-label">Allocation</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_production_plan" class="form-control"
                                value="{{ $productionPlan->allocation->nama_allocation }}" disabled> </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-1 col-form-label">Target Delivery</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_production_plan" class="form-control"
                                value="{{  $productionPlan->konfirmasi_permintaan->permintaan->target_delivery }}" disabled> </div>
                    </div>
                </div>
            <form action="/tambah-worksheet" method="POST">
             @csrf   
             <input type="hidden" name="id_production_plan" value="{{ $productionPlan->id }}">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-1 col-form-label">Nomor</label>
                        <div class="col-sm-10">
                            <input type="text" name="nomor_ws" class="form-control" placeholder="Isi Nomor" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-1 col-form-label">Brand</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_brand" class="form-control" placeholder="Nama Brand" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-1 col-form-label">Buyer</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_buyer" class="form-control" placeholder="Nama Buyer" required>
                        </div>
                    </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-info"> Save</button>
                </div>
            </form>

            <br>
            <br>

            {{-- <div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
                             <h6 style="justify-content: left; text-align: left;"><b>DETAIL WARNA</b></h6><br>
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
                    <td></td>
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

                            <br>
                  <br>
                             <h6 style="justify-content: left; text-align: left;"><b>SHELL FABRIC</b></h6><br>

                            <div class="row">
                            <div class="col-md-2">      
                                <label for="item_quantity">Kode</label>
                            </div>
                            <div class="col-md-3">      
                                <label for="item_quantity">Description</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Unit</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Cons</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Color</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Qty</label>
                            </div>
                            <div class="col-md-2">      
                                <label for="item_quantity">Remarks</label>
                            </div>
                        </div>
                        <div class="duplicate my-2">
                        <div class="row">
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" name="colour[]" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-3">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                           
                           
                            
                        </div>
                        </div>
                        <button class="btn btn-outline-info px-2">
                        Add Shell Fabric
                        </button>

                        <br>
                  <br>
                             <h6 style="justify-content: left; text-align: left;"><b>LINING</b></h6><br>

                            <div class="row">
                            <div class="col-md-2">      
                                <label for="item_quantity">Kode</label>
                            </div>
                            <div class="col-md-3">      
                                <label for="item_quantity">Description</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Unit</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Cons</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Color</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Qty</label>
                            </div>
                            <div class="col-md-2">      
                                <label for="item_quantity">Remarks</label>
                            </div>
                        </div>
                        <div class="duplicate my-2">
                        <div class="row">
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" name="colour[]" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-3">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                           
                           
                            
                        </div>
                        </div>
                        <button class="btn btn-outline-info px-2">
                        Add LINING
                        </button>

                        <br>
                  <br>
                             <h6 style="justify-content: left; text-align: left;"><b>INTERLINING</b></h6><br>

                            <div class="row">
                            <div class="col-md-2">      
                                <label for="item_quantity">Kode</label>
                            </div>
                            <div class="col-md-3">      
                                <label for="item_quantity">Description</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Unit</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Cons</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Color</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Qty</label>
                            </div>
                            <div class="col-md-2">      
                                <label for="item_quantity">Remarks</label>
                            </div>
                        </div>
                        <div class="duplicate my-2">
                        <div class="row">
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" name="colour[]" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-3">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                           
                           
                            
                        </div>
                        </div>
                        <button class="btn btn-outline-info px-2">
                        Add INTERLINING
                        </button>

                        <br>
                  <br>
                             <h6 style="justify-content: left; text-align: left;"><b>TRIMMING</b></h6><br>

                            <div class="row">
                            <div class="col-md-2">      
                                <label for="item_quantity">Kode</label>
                            </div>
                            <div class="col-md-3">      
                                <label for="item_quantity">Description</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Unit</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Cons</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Color</label>
                            </div>
                            <div class="col-md-1">      
                                <label for="item_quantity">Qty</label>
                            </div>
                            <div class="col-md-2">      
                                <label for="item_quantity">Remarks</label>
                            </div>
                        </div>
                        <div class="duplicate my-2">
                        <div class="row">
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" name="colour[]" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-3">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-1">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>
                            <div class="col-md-2">      
                            <div class="form-group">
                                <input type="text" class="form-control" >
                            </div>
                            </div>                          
                        </div>
                        </div>
                        <button class="btn btn-outline-info px-2">
                        Add TRIMMING
                        </button> --}}



        </div>
    </div>
</div>
</div>



</div>
<!-- end page content-->
</div>
@endsection
