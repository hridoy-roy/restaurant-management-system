@extends('layouts.admin.app')

@push('style')


@endpush
@section('main_content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Editable Tables</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Tables</span></li>

								<li><span>Editable</span></li>
								
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									{{-- <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a> --}}
								</div>

								<h2 class="card-title">Default</h2>
								<div class="switch switch-sm switch-info"><input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" /></div>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<button id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
											<th>SL</th>
											<th>Item Name</th>
											<th>Item Group</th>
											<th>Unit</th>
											<th>S Price</th>
											<th>P Price</th>
                     						 <th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($items as $data)
																					
										<tr data-item-id="1">
											<td>{{ $data->id }}</td>
											<td>{{ $data->item_name }}</td>
											<td>{{ $data->group_id }}</td>
											<td>{{ $data->unit_name }}</td>
											<td>{{ $data->sale_price }}</td>
											<td>{{ $data->purchase_price }}</td>
											<td>{{ $data->status }}</td>
											
                                            
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default" onclick="itemDelete({{ $data->id }})"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>
@endsection
@push('specificpagevendor')
    <script src="{{ asset('assets/admin/vendor/select2/js/select2.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/ios7-switch/ios7-switch.js') }}"></script> 
		
@endpush
@push('script')

<!-- Examples -->
<script src="{{ asset('assets/admin/js/examples/examples.datatables.editable.js') }}"></script>

@endpush