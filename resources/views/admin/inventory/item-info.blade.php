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
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr data-item-id="1">
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="2">
											<td>Trident</td>
											<td>Internet
												Explorer 5.0
											</td>
											<td>Win 95+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="3">
											<td>Trident</td>
											<td>Internet
												Explorer 5.5
											</td>
											<td>Win 95+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="4">
											<td>Trident</td>
											<td>Internet
												Explorer 6
											</td>
											<td>Win 98+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="5">
											<td>Trident</td>
											<td>Internet Explorer 7</td>
											<td>Win XP SP2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="6">
											<td>Trident</td>
											<td>AOL browser (AOL desktop)</td>
											<td>Win XP</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="7">
											<td>Gecko</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="8">
											<td>Gecko</td>
											<td>Firefox 1.5</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="9">
											<td>Gecko</td>
											<td>Firefox 2.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="10">
											<td>Gecko</td>
											<td>Firefox 3.0</td>
											<td>Win 2k+ / OSX.3+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="11">
											<td>Gecko</td>
											<td>Camino 1.0</td>
											<td>OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="12">
											<td>Gecko</td>
											<td>Camino 1.5</td>
											<td>OSX.3+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="13">
											<td>Gecko</td>
											<td>Netscape 7.2</td>
											<td>Win 95+ / Mac OS 8.6-9.2</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="14">
											<td>Gecko</td>
											<td>Netscape Browser 8</td>
											<td>Win 98SE+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="15">
											<td>Gecko</td>
											<td>Netscape Navigator 9</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="16">
											<td>Gecko</td>
											<td>Mozilla 1.0</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="17">
											<td>Gecko</td>
											<td>Mozilla 1.1</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="18">
											<td>Gecko</td>
											<td>Mozilla 1.2</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="19">
											<td>Gecko</td>
											<td>Mozilla 1.3</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="20">
											<td>Gecko</td>
											<td>Mozilla 1.4</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="21">
											<td>Gecko</td>
											<td>Mozilla 1.5</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="22">
											<td>Gecko</td>
											<td>Mozilla 1.6</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="23">
											<td>Gecko</td>
											<td>Mozilla 1.7</td>
											<td>Win 98+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="24">
											<td>Gecko</td>
											<td>Mozilla 1.8</td>
											<td>Win 98+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="25">
											<td>Gecko</td>
											<td>Seamonkey 1.1</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="26">
											<td>Gecko</td>
											<td>Epiphany 2.20</td>
											<td>Gnome</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="27">
											<td>Webkit</td>
											<td>Safari 1.2</td>
											<td>OSX.3</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="28">
											<td>Webkit</td>
											<td>Safari 1.3</td>
											<td>OSX.3</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="29">
											<td>Webkit</td>
											<td>Safari 2.0</td>
											<td>OSX.4+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="30">
											<td>Webkit</td>
											<td>Safari 3.0</td>
											<td>OSX.4+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="31">
											<td>Webkit</td>
											<td>OmniWeb 5.5</td>
											<td>OSX.4+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="32">
											<td>Webkit</td>
											<td>iPod Touch / iPhone</td>
											<td>iPod</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="33">
											<td>Webkit</td>
											<td>S60</td>
											<td>S60</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="34">
											<td>Presto</td>
											<td>Opera 7.0</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="35">
											<td>Presto</td>
											<td>Opera 7.5</td>
											<td>Win 95+ / OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="36">
											<td>Presto</td>
											<td>Opera 8.0</td>
											<td>Win 95+ / OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="37">
											<td>Presto</td>
											<td>Opera 8.5</td>
											<td>Win 95+ / OSX.2+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="38">
											<td>Presto</td>
											<td>Opera 9.0</td>
											<td>Win 95+ / OSX.3+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="39">
											<td>Presto</td>
											<td>Opera 9.2</td>
											<td>Win 88+ / OSX.3+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="40">
											<td>Presto</td>
											<td>Opera 9.5</td>
											<td>Win 88+ / OSX.3+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="41">
											<td>Presto</td>
											<td>Opera for Wii</td>
											<td>Wii</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="42">
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="43">
											<td>Presto</td>
											<td>Nintendo DS browser</td>
											<td>Nintendo DS</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="44">
											<td>KHTML</td>
											<td>Konqureror 3.1</td>
											<td>KDE 3.1</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="45">
											<td>KHTML</td>
											<td>Konqureror 3.3</td>
											<td>KDE 3.3</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="46">
											<td>KHTML</td>
											<td>Konqureror 3.5</td>
											<td>KDE 3.5</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="47">
											<td>Tasman</td>
											<td>Internet Explorer 4.5</td>
											<td>Mac OS 8-9</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="48">
											<td>Tasman</td>
											<td>Internet Explorer 5.1</td>
											<td>Mac OS 7.6-9</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="49">
											<td>Tasman</td>
											<td>Internet Explorer 5.2</td>
											<td>Mac OS 8-X</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="50">
											<td>Misc</td>
											<td>NetFront 3.1</td>
											<td>Embedded devices</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="51">
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="52">
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="53">
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="54">
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="55">
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr data-item-id="56">
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr class="gradeU" data-item-id="57">
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
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