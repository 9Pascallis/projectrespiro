@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Budgeting</h6>
					<hr/>
                    
                <div class="col-sm-3">
                    <td>
                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Pilih Bulan</option>
                                        <option>Januari</option>
                                        <option>Februari</option>
                                        <option>Maret</option>
                                        <option>April</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                        <option>Agustus</option>
                                        <option>Spetember</option>
                                        <option>Oktober</option>
                                        <option>November</option>
                                        <option>Desember</option>
                                        </select>
                    </td>
                </div>
                <br>
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 15%">Nama Artikel</th>
                    <th style="width: 10%; text-align: center">Allocation</th>
                    <th style="width: 10%; text-align: center">HPP</th>
                    <th style="width: 10%; text-align: center">Jumlah</th>
                    <th style="width: 10%; text-align: center">Total HPP</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Challenger</td>
                    <td style="text-align: center">CV.GPS</td>
                    <td style="text-align: center">RP. 8.400.000</td>
                    <td style="text-align: center">5</td>
                    <td style="text-align: center">Rp. 32.000.000</td>               
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Challenger</td>
                    <td style="text-align: center">CV.GPS</td>
                    <td style="text-align: center">RP. 8.400.000</td>
                    <td style="text-align: center">5</td>
                    <td style="text-align: center">Rp. 32.000.000</td>               
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Challenger</td>
                    <td style="text-align: center">CV.GPS</td>
                    <td style="text-align: center">RP. 8.400.000</td>
                    <td style="text-align: center">5</td>
                    <td style="text-align: center">Rp. 32.000.000</td>               
                  </tr>
                 
                  <tr>
                    <td>1</td>
                    <td>Challenger</td>
                    <td style="text-align: center">CV.GPS</td>
                    <td style="text-align: center">RP. 8.400.000</td>
                    <td style="text-align: center">5</td>
                    <td style="text-align: center">Rp. 32.000.000</td>               
                  </tr>
                   <tr>
                    <td>1</td>
                    <td>Challenger</td>
                    <td style="text-align: center">CV.GPS</td>
                    <td style="text-align: center">RP. 8.400.000</td>
                    <td style="text-align: center">5</td>
                    <td style="text-align: center">Rp. 32.000.000</td>               
                  </tr>
                  <tr>
                    <td></td>
                    <td><b>TOTAL</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: center"><b>Rp.128.000.000</b></td>
                  </tr>
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
@endsection
