@extends('layouts.master')
    @section('content')
<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Nasabah</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Pengguna</th>
												<th>Status</th>
												<th>Tanggal Registrasi</th>
											</tr>
										</thead>
										<tbody>
											<?php $i=1;?>

												@foreach($data as $value)
											@if($value->role != 'admin')

											<tr>
												<td>{{ $i }}</td>
												<td>{{$value->name}}</td>
												<td>{{$value->role}}</td>

												<td>{{Carbon\Carbon::parse($value->created_at)->translatedFormat('l, d F Y')}}</td>
												<?php $i++ ?>
												@endif

												@endforeach
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		    @endsection