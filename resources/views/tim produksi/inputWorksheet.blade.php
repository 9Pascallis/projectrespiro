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

           
        </div>
    </div>
</div>
</div>



</div>
<!-- end page content-->
</div>
@endsection
