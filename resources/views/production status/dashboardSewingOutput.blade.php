@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Sewing Output</h6>
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
                    <th style="width: 5%">1</th>
                    <th style="width: 5%">2</th>
                    <th style="width: 5%">3</th>
                    <th style="width: 5%">4</th>
                    <th style="width: 5%">5</th>
                    <th style="width: 5%">6</th>
                    <th style="width: 5%">7</th>
                    <th style="width: 5%">8</th>
                    <th style="width: 5%">9</th>
                    <th style="width: 5%">10</th>
                    <th style="width: 5%">11</th>
                    <th style="width: 5%">12</th>
                    <th style="width: 5%">13</th>
                    <th style="width: 5%">14</th>
                    <th style="width: 5%">15</th>
                    <th style="width: 5%">Total</th>
                    <th style="width: 5%">View</th>
                    <th style="width: 5%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>01823</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>200</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-sewing-output"><i class="fas fa-eye"></i> </a>
                    </td>      
                    <td class="project-actions text-center">
                    <a class="btn btn-outline-warning px-2" href="/input-sewing-output"><i class="fas fa-pen"></i> </a>
                  </td>          
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
