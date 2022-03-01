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
										<tr data-item-id="1">
											<td>Trident</td>
											<td>Internet</td>
											<td>Win 95+</td>
											<td>Win 95+</td>
                                            <td>Win 95+</td>
                                            <td>Win 95+</td>
                                            <td>Win 95+</td>
                                            
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
			
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
@endpush
@push('script')

<!-- Examples -->
<script src="{{ asset('assets/admin/js/examples/examples.datatables.editable.js') }}"></script>

@endpush