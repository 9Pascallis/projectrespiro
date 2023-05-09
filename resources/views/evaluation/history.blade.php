@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endsection
@section('content')		
				
<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">History</h6>
					<hr/>
						<div class="table-responsive">
							<table id="example2" class="table mb-0 table-hover">
								<thead>
                 <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 15%">Nomor WS</th>
                    <th style="width: 15%">Nama Artikel</th>
                    <th style="width: 15%">Target Delivery</th>
                    <th style="width: 15%">Total</th>
                    <th style="width: 15%">HPP</th>
                    <th style="width: 15%">CMT</th>
                    <th style="width: 15%">PPM</th>
                    <th style="width: 15%">CUTTING</th>
                    <th style="width: 15%">SEWING</th>
                    <th style="width: 15%">ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>11092</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>8400</td> 
                    <td>Rp. 120.000,00</td>
                    <td>Rp. 120.000,00</td>
                    <td>12-12-2023</td>         
                    <td>12-12-2023</td>
                    <td>12-12-2023</td>
                     <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-history"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                  <td>2</td>
                    <td>11092</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>8400</td> 
                    <td>Rp. 120.000,00</td>
                    <td>Rp. 120.000,00</td>
                    <td>12-12-2023</td>         
                    <td>12-12-2023</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-history"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                  <td>3</td>
                    <td>11092</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>8400</td> 
                    <td>Rp. 120.000,00</td>
                    <td>Rp. 120.000,00</td>
                    <td>12-12-2023</td>         
                    <td>12-12-2023</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-history"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                  <td>4</td>
                    <td>11092</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>8400</td> 
                    <td>Rp. 120.000,00</td>
                    <td>Rp. 120.000,00</td>
                    <td>12-12-2023</td>         
                    <td>12-12-2023</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-history"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                  <td>5</td>
                    <td>11092</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>8400</td> 
                    <td>Rp. 120.000,00</td>
                    <td>Rp. 120.000,00</td>
                    <td>12-12-2023</td>         
                    <td>12-12-2023</td>
                    <td>12-12-2023</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-history"><i class="fas fa-eye"></i></a>
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
<script src="assets/js/table-datatable.js"></script>
@endsection
