@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Permintaan Produksi</h6>
					<hr/>
              
						<div class="table-responsive">
							<table id="example2" class="table mb-0 table-hover">
              <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 30%">Nama Produk</th>
                    <th style="width: 20%">Target Delivery</th>
                    <th style="width: 10%">Total</th>
                    <th style="width: 15%; text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>8400</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Ridingware</td>
                    <td>13-12-2023</td>
                    <td>8400</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                    </td>
                    </td>
                </tr>
                  <tr>
                    <td>3</td>
                    <td>Sporty</td>
                    <td>14-12-2023</td>
                    <td>8400</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                    </td>
                </tr>
                  <tr>
                    <td>4</td>
                    <td>Casual</td>
                    <td>15-12-2023</td>
                    <td>8400</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                    </td>
                </tr>
                  <tr>
                    <td>5</td>
                    <td>Metal</td>
                    <td>16-12-2023</td>
                    <td>8400</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                    </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Challenger</td>
                  <td>12-12-2023</td>
                  <td>8400</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Ridingware</td>
                  <td>13-12-2023</td>
                  <td>8400</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                  </td>
                  </td>
              </tr>
                <tr>
                  <td>8</td>
                  <td>Sporty</td>
                  <td>14-12-2023</td>
                  <td>8400</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                  </td>
              </tr>
                <tr>
                  <td>9</td>
                  <td>Casual</td>
                  <td>15-12-2023</td>
                  <td>8400</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
                  </td>
              </tr>
                <tr>
                  <td>10</td>
                  <td>Metal</td>
                  <td>16-12-2023</td>
                  <td>8400</td>
                  <td class="project-actions text-center">
                    <a class="btn btn-outline-warning px-2" href="/input-permintaan"><i class="fas fa-pen"></i></a>
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