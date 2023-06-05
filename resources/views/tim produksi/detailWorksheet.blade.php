@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Detail Worksheet</h6>
					<hr/>
						<div class="table-responsive">
							<table id="example2" class="table mb-0 table-hover">
                               <!-- General Form Elements -->
                               <form>
                  
                    <div class="row" style="margin-left: 20px; margin-right: 20px">
                        <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nomor</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="id_production_plan" class="form-control"
                                      value="{{  $worksheet->nomor_ws}}"
                                      disabled>                                    </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Brand</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="id_production_plan" class="form-control"
                                    value="{{  $worksheet->nama_brand}}"
                                    disabled>                                  </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nama Produk</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="id_production_plan" class="form-control"
                                      value="{{ $worksheet->productionPlan->konfirmasi_permintaan->permintaan->nama_produk }}"
                                      disabled>                                    </div>  
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="id_production_plan" class="form-control"
                                      value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->kategori->nama_kategori }}"
                                      disabled>                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Sub Kategori</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="id_production_plan" class="form-control"
                                      value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->sub_kategori->nama_sub_kategori }}"
                                      disabled>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-left">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Buyer</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="id_production_plan" class="form-control"
                                      value="{{  $worksheet->nama_buyer}}"
                                      disabled>                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Allocation</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="id_production_plan" class="form-control"
                                      value="{{ $worksheet->productionPlan->allocation->nama_allocation }}" disabled>                                     </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Target Delivery</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="id_production_plan" class="form-control"
                                      value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->target_delivery }}"
                                      disabled>                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div><br>
                  <br>
                    
                  
                  <thead>
                    
						<div class="table-responsive" >
							<table  class="table table-striped table-bordered">
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
                </div>

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
@endsection
