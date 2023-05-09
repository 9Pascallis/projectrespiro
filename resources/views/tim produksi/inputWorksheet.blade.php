@extends('layout.dashboard')
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Input Worksheet</h6>
					<hr/>

                    <form>
                    <h6 style="justify-content: left; text-align: left;"><b>INPUT WORKSHEET</b></h6><br>
                    <div class="row" style="margin-left: 20px; margin-right: 20px">
                        <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nomor</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" value="Isi Nomor">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Brand</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" value="Nama Brand">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nama Produk</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Ridingware" disabled>
                                    </div>  
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Rovero" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Sub Kategori</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Deluga" disabled>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-left">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Buyer</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" value="Nama Buyer">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Allocation</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control"value="Allocation">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Target Delivery</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="13-04-2023" disabled>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <br>
                  <br>
                    
						<div class="table-responsive">
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
                        </button>
                           
                        <div class="d-flex justify-content-end">
                            <a href="/worksheet" class="btn btn-outline-info px-3 " role="button" aria-pressed="true">Save Worksheet</a>
                        </div>
                  
                       
                </div>
						</div>
					</div>
				</div>
        
             

          </div>
          <!-- end page content-->
         </div>
@endsection


