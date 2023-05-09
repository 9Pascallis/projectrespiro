@extends('layout.dashboard')
@section('assets')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')		
				
				<div class="card">
					<div class="card-body">
					<h6 class="mb-0 text-uppercase " style="justify-content: center; text-align: center; margin-top: 10px">Worksheet</h6>
					<hr/>
						<div class="table-responsive">
							<table id="example2" class="table mb-0 table-hover">
                            <thead>
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 15%">Nomor WS</th>
                    <th style="width: 15%">Nama Artikel</th>
                    <th style="width: 15%">Target Delivery</th>
                    <th style="width: 15%">Allocation</th>
                    <th style="width: 15%">Total</th>
                    <th style="width: 15%; text-align: center">Status</th>
                    <th style="width: 10%; text-align: center">View</th>
                    <th style="width: 10%; text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>201234</td>
                    <td>Challenger</td>
                    <td>12-12-2023</td>
                    <td>CV.Glove</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                      <span class="badge bg-light-success text-success w-100">Sudah di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-worksheet"><i class="fas fa-folder"></i> </a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-worksheet"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>201234</td>
                    <td>Ridingware</td>
                    <td>13-12-2023</td>
                    <td>CV.Glove</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                      <span class="badge bg-light-success text-success w-100">Sudah di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-worksheet"><i class="fas fa-folder"></i> </a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-worksheet"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                  <tr>
                    <td>3</td>
                    <td>201234</td>
                    <td>Sporty</td>
                    <td>14-12-2023</td>
                    <td>CV.Glove</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                      <span class="badge bg-light-success text-success w-100">Sudah di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-worksheet"><i class="fas fa-folder"></i> </a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-worksheet"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                  <tr>
                    <td>4</td>
                    <td>201234</td>
                    <td>Casual</td>
                    <td>15-12-2023</td>
                    <td>CV.Glove</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                     <span class="badge bg-light-danger text-danger w-100">Belum di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-worksheet"><i class="fas fa-folder"></i> </a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-worksheet"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                  <tr>
                    <td>5</td>
                    <td>201234</td>
                    <td>Metal</td>
                    <td>16-12-2023</td>
                    <td>CV.Glove</td>
                    <td>8400</td>
                    <td class="text-center project-state">
                    <span class="badge bg-light-danger text-danger w-100">Belum di Buat</span>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-info px-2" href="/detail-worksheet"><i class="fas fa-folder"></i> </a>
                    </td>
                    <td class="project-actions text-center">
                      <a class="btn btn-outline-warning px-2" href="/input-worksheet"><i class="fas fa-pencil-alt"></i></a>
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
