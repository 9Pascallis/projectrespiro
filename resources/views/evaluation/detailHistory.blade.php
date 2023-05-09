@extends('layout.dashboard')
@section('assets')
      <link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	  <link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	  <link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
	  <link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
      <link href="assets/css/checkbox.css" rel="stylesheet" />
@endsection
@section('content')		
				
		 <!-- Main content -->
         <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>Detail History</b> </h5>
                </div>
                <!-- /.card-header -->
                <br>
                <div class="card-body">
                    <!-- General Form Elements -->
                    <form>
                    <div class="row" style="margin-left: 20px; margin-right: 20px">
                    <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nomor WS</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Challenger" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Nama Artikel</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Challenger" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Target Delivery</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="23 Februari, 2023" disabled>
                                    </div>
                                </div>   
                                
                                <div class="row mb-3">
                                     <label for="inputText" class="col-sm-3 col-form-label">HPP</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dengan-rupiah">
                                  </div>
                                  |
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dengan-rupiah">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                     <label for="inputText" class="col-sm-3 col-form-label">CMT</label>
                                     <div class="col-sm-4">
                                     <input type="text" class="form-control" id="rupiah" >
                                     </div>
                                     |
                                     <div class="col-sm-4">
                                     <input type="text" class="form-control" id="rupiah" >
                                     </div>
                             </div>  
                             <div class="card-header">
                             </div>
                               <br>
                            <div class="card-body">
                        <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">PPM</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                    </div>
                                    |
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                </div>
                        </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Cutting Start</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                    </div>
                                    |
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                </div>
                        </div>

                        <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Cutting Finish</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                    </div>
                                    |
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                </div>
                        </div>
                        <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Sewing Start </label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                </div>
                                |
                                <div class="col-sm-4">
                                <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Sewing Finish</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                </div>
                                |
                                <div class="col-sm-4">
                                <input type="text" class="form-control datepicker picker__input" readonly="" id="P574143203" aria-haspopup="true" aria-readonly="false" aria-owns="P574143203_root">
                                </div>
                            </div>
                            
                                                
                    </form> 
                    <div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 10%">Sewing</th>
                    <th style="width: 5%; text-align: center">1</th>
                    <th style="width: 5%; text-align: center">2</th>
                    <th style="width: 5%; text-align: center">3</th>
                    <th style="width: 5%; text-align: center">4</th>
                    <th style="width: 5%; text-align: center">5</th>
                    <th style="width: 5%; text-align: center">6</th>
                    <th style="width: 5%; text-align: center">7</th>
                    <th style="width: 5%; text-align: center">8</th>
                    <th style="width: 5%; text-align: center">9</th>
                    <th style="width: 5%; text-align: center">5</th>
                    <th style="width: 5%; text-align: center">11</th>
                    <th style="width: 5%; text-align: center">12</th>
                    <th style="width: 5%; text-align: center">13</th>
                    <th style="width: 5%; text-align: center">14</th>
                    <th style="width: 5%; text-align: center">15</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Total</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">300</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">600</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">300</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">600</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">600</td>
                  </tr>
                
                  
                  </tfoot>
                </table>


                <div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 10%">Cutting</th>
                    <th style="width: 5%; text-align: center">1</th>
                    <th style="width: 5%; text-align: center">2</th>
                    <th style="width: 5%; text-align: center">3</th>
                    <th style="width: 5%; text-align: center">4</th>
                    <th style="width: 5%; text-align: center">5</th>
                    <th style="width: 5%; text-align: center">6</th>
                    <th style="width: 5%; text-align: center">7</th>
                    <th style="width: 5%; text-align: center">8</th>
                    <th style="width: 5%; text-align: center">9</th>
                    <th style="width: 5%; text-align: center">5</th>
                    <th style="width: 5%; text-align: center">11</th>
                    <th style="width: 5%; text-align: center">12</th>
                    <th style="width: 5%; text-align: center">13</th>
                    <th style="width: 5%; text-align: center">14</th>
                    <th style="width: 5%; text-align: center">15</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Total</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">300</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">600</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">100</td>
                    <td style="text-align: center">300</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">600</td>
                    <td style="text-align: center">200</td>
                    <td style="text-align: center">500</td>
                    <td style="text-align: center">600</td>
                  </tr>
                
                  
                  </tfoot>
                </table>
              
              </div>
                </div>
                
                <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/rupiah.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="assets/js/form-date-time-pickes.js"></script>
@endsection
