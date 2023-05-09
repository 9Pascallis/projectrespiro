@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">PRODUCTION STATUS</h6>
					<hr/>
						<div class="table-responsive">
							<table id="example2" class="table table-bordered table-hover mb-0">
                            <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 10%">Nomor WS</th>
                    <th style="width: 10%">Nama Artikel</th>
                    <th style="width: 10%">Target Delivery</th>
                    <th style="width: 10%">Qty</th>
                    <th style="width: 10%">PPM</th>
                    <th style="width: 10%">Cutting</th>
                    <th style="width: 10%">Sewing</th>
                    <th style="width: 10%">Allocation</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>01823</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>5</td>
                    <td>12-12-2023</td>
                    <td>12-12-2023</td>
                    <td>12-12-2023</td>
                    <td>CV. AGU</td>           
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
<script src="assets/js/search-datatable.js"></script>
@endsection
