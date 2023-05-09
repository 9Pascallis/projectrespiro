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
                                    <label for="inputText" class="col-sm-3 col-form-label">Nomor WS</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="isi nomor" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nama Artikel</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Ridingware" disabled>
                                    </div>  
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-left">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Target-Delivery</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="13-04-2023" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Total Qty</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Allocation" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                  <br>
                    
                  
                  <thead>
                    
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
                            <tr>
                  <th></th>
                  <th>Cutting ke 1</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  </tr>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 15%">Warna</th>
                    <th style="width: 10%; text-align: center">XS</th>
                    <th style="width: 10%; text-align: center">S</th>
                    <th style="width: 10%; text-align: center">M</th>
                    <th style="width: 10%; text-align: center">L</th>
                    <th style="width: 10%; text-align: center">XL</th>
                    <th style="width: 10%; text-align: center">XXL</th>
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
@endsection
