@extends('layouts.admin.app')

@push('style')


@endpush
@section('main_content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Item Management</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Inventory</span></li>

								<li><span>Item Management</span></li>
								
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

								<h2 class="card-title">Item Information</h2>
								
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
									<tbody id="tabledody">
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