<style>
	.breadcrumb-item+.breadcrumb-item::before {
		float: left;
		padding-right: var(--bs-breadcrumb-item-padding-x);
		color: var(--bs-breadcrumb-divider-color);
		content: var(--bs-breadcrumb-divider, "•");
	}

	
	.accordion-body {
    	/* padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x); */
	}

	.select2-container--default .select2-selection--single .select2-selection__arrow b {
		border-color: #888 transparent transparent transparent;
		border-style: none;
		border-width: 5px 4px 0 4px;
		height: 0;
		left: 50%;
		margin-left: -4px;
		margin-top: -2px;
		position: absolute;
		top: 50%;
		width: 0;
	}

	.border-top {
		border-top: 2px; !important;
	}

	.form-check-input[type="checkbox"] {
		border-radius: 0.25em;
		border-color: #5a6a85;
	}
	 

	
</style>

<style>
	/* Default fixed columns styling */

	i.fas.fa-sun{
		color: yellow;
	}
	table.dataTable tbody tr > .dtfc-fixed-left,
	table.dataTable tbody tr > .dtfc-fixed-right {
		z-index: 1;
		background-color: #ffffff;
		color: #000;
	}

	/* Light theme styles (default) */
	table.dataTable {
		background-color: #ffffff;
	}

	table.dataTable thead {
		background-color: #f1f1f1;
		color: #000;
	}

	table.dataTable tbody tr {
		background-color: #ffffff;
		color: #000;
	}

	/* Dark theme styles */
	body.dark-theme table.dataTable thead tr > .dtfc-fixed-right {
		background-color: #25304a;
		color: #fff;
	}

	body.dark-theme table.dataTable tbody tr > .dtfc-fixed-left,
	body.dark-theme table.dataTable tbody tr > .dtfc-fixed-right {
		background-color: #25304a;
		color: #fff;
	}

	body.dark-theme table.dataTable {
		background-color: #222;
	}

	body.dark-theme table.dataTable thead {
		background-color: #25304a;
		color: #fff;
	}

	body.dark-theme table.dataTable tbody tr {
		background-color: #25304a;
		color: #fff;
	}

</style> 

<!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Add User Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="add-user" autocomplete="off">
					<div id="adduser_content_cebu">

					</div>
					<br>
					<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
					<button type="reset" class="btn btn-danger"  value="Reset"> Reset</button>
						
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
				Close
				</button>
			</div>
		</div>
	</div>
</div>
<!-- Edit -->

<div class="modal fade" id="editUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User Form</h4>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">
                <form id="editUser" method="post">
                    <div id="edituser_content"></div>
                </form>
            </div>
				<div class="modal-footer">
					<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">Close
					</button>
				</div>
        </div>
    </div>
</div>


<div class="modal fade" id="editUserModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User Form</h4>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">
                <form id="editUser" method="post">
                    <div id="edituser_content2"></div>
                </form>
            </div>
			<div class="modal-footer">
				<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
				Close
				</button>
			</div>
        </div>
    </div>
</div>

<div class="modal fade" id="editUserModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title">User Task</h4>
				<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
				</div>
            <div class="modal-body">
                <div id="userTasks_content">

                </div>
            </div>
			<div class="modal-footer">
				<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
				Close
				</button>
			</div>

        </div>
    </div>
</div>

<div class="body-wrapper">
  	<div class="container-fluid">
    	<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
               	<div class="row align-items-center">
                 	<div class="col-9">
                   		<h4 class="fw-semibold mb-8">Users </h4>
                   		<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="<?= base_url('profile')?>">Home </a>
								</li>
								<li class="breadcrumb-item" aria-current="page">Users (CEBO)</li>
							</ol>
                   		</nav>
                 	</div>
                 	<div class="col-3">
                   	<div class="text-center mb-n5">
                     	<img src="<?=base_url()?>assets/images/breadcrumb/ChatBc.png" alt="modernize-img" class="img-fluid mb-n4" />
                   	</div>
                </div>
            </div>
        </div>
    </div>

    <div class="datatables">
        <div class="card border-top border-primary">
            <div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal" onclick=adduser_content_cebu()><i class="fa fa-plus" aria-hidden="true"></i> Add User Cebu</a>
						</div>
					</div>
				</div> <br>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group ">
							<form class="form-horizontal">
								<label class="form-label" for="usergroup">User Group:</label>
								<select style="width: 50%; padding:5px; border-style: none;" class=" select2 form-control" name="usergroup" id="usergroup">
									<option></option>;'
									<?php
									$data1 = $this->Admin_Model->getUserGroup();

									foreach ($data1 as $value) {?>
										<option value="<?=$value->group_id?>"> <?=$value->groupname?> </option>
									<?php } ?>
								</select>
							</form>
						</div>	
					</div>
				</div>
					<br>
					<div class="table-responsive">
						<table id="dt-users1" class="table w-100 table-striped table-bordered display text-nowrap">
										
							<thead>
								<th class="wd-lg-30p"><span>Fullname</span></th>
								<th class="wd-lg-8p"><span>Username</span></th>
								
								<th class="wd-lg-8p"><span>Status</span></th>
								<th class="wd-lg-8p"><span>Action</span></th>
							</thead>
							<tbody>

							</tbody>
					
						</table>
					</div>
               	</div>
            </div>
             
             
             
        </div>
    </div>
</div>
</div>
     
</script>
<script src="<?=base_url()?>assets/js/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/libs/jquery-ui/dist/jquery-ui.min.js"></script>

<script>

    $("form#add-user-cebu").submit(function (e) {
        e.preventDefault();
        var effect = $(this).attr('data-effect');
        $('#addUserModal').addClass(effect);
        let formData = $(this).serialize();
        let tasks = $("input[name='tasks[]']:checked").length;
        let groups = $("input[name='groups[]']:checked").length;
        if (tasks == 0) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                icon: 'warning',
                title: 'Please choose at least one task!',
            });
            return;
        }
        if (groups == 0) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                icon: 'warning',
                title: 'Please choose at least one group!',
            });
            return;
        }


        $.ajax({
            type: "POST",
            url: "<?= site_url('store_user_cebu'); ?>",
            data: formData,
            success: function (data) {
                if (trimfield(data) == 'User-exists') {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                        icon: 'warning',
                        title: 'User already exist!',
                    });
                    $('div#addUserModal').modal('hide');
                }
                if (trimfield(data) == 'ok') {
                    Swal.fire({
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                        icon: 'success',
                        title: 'Success',
                        text: 'User added successfully!',
                    });
                    $('div#addUserModal').modal('hide');
                    window.setTimeout(function () { location.reload() }, 2000);
                }
            }
        });
    });
</script>
<script >
  	$(document).ready(function () {

		var table;
		function viewUser(usergroup) {
			var table = $('#dt-users1').DataTable({
					"ajax": {
							"url": "<?php echo base_url('employee/user_list_cebu'); ?>",
							"type": "POST",
							"data": function (d) {
									return $.extend({}, d, {
											usergroup: usergroup
									});
							}
					},

					"destroy": true,
					'serverSide': true,
					'stateSave': true,
					'processing': true,
					'lengthMenu': [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Max"]],
					'pageLength': 10,
					'scrollCollapse': true,
					// 'scrollY': '70vh',
					// "order": [[0, 'asc']],
					"scrollX": true,
					"fixedColumns": {
							"leftColumns": 1,
							"rightColumns": 2,
							"width": 200
					},
					"columnDefs": [{
							"targets": [1,2],
							"orderable": false,
							"searchable": false,
							"className": "text-center",
					}],
					"order": [[0, 'asc']],
			});

			$('#dt-users1').on('click', 'a.action', function () {
				let [action, ids] = this.id.split('-');

				if (!$(this).parents('tr').hasClass('selected')) {
					table.$('tr.selected').removeClass('selected');
					$(this).parents('tr').addClass('selected');
				}

				if (action == "edit") {
					// Initialize the modal
					var editUserModal = new bootstrap.Modal(document.getElementById('editUserModal'), {
							backdrop: 'static',
							keyboard: false
					});

					// Show the modal
					editUserModal.show();

					// Perform AJAX call to fetch content
					$.ajax({
							type: "POST",
							url: "<?= site_url('edituser_content'); ?>",
							data: {
									ids
							},
							success: function(data) {
									$("div.emp-details").show(); // Show the loader
									$("div#edituser_content").html(data); // Insert content into modal
							}
					});
				}

				if (action == "edit2") {
					// Initialize the modal
					var editUserModal2 = new bootstrap.Modal(document.getElementById('editUserModal2'), {
							backdrop: 'static',
							keyboard: false
					});

					// Show the modal
					editUserModal2.show();

					// Perform AJAX call to fetch content
					$.ajax({
							type: "POST",
							url: "<?= site_url('edituser_content2'); ?>",
							data: {
									ids
							},
							success: function(data) {
									$("div.emp-details").show(); // Show the loader
									$("div#edituser_content2").html(data); // Insert content into modal
							}
					});
				}

		

				if (action == "edit3") {

					// Initialize the modal
					var editUserModal3 = new bootstrap.Modal(document.getElementById('editUserModal3'), {
							backdrop: 'static',
							keyboard: false
					});

					// Show the modal
					editUserModal3.show();

					// Perform AJAX call to fetch content
					$.ajax({
							type: "POST",
							url: "<?= site_url('userTasks_content'); ?>",
							data: {
									ids
							},
							success: function(data) {
									$("div.emp-details").show(); // Show the loader
									$("div#userTasks_content").html(data); // Insert content into modal
							}
					});
				}

					
			});

		}
		let usergroup = $('#usergroup').val();
		viewUser(usergroup);

		$('#usergroup').on('change', function () {
			let usergroup = this.value;
			viewUser(usergroup);
		});

	});

	function trimfield(str) {
		return str.replace(/^\s+|\s+$/g, '');
	}
	function viewAddForm(emp_id) {

		

		// Initialize the modal
		var editUserModal2 = new bootstrap.Modal(document.getElementById('addUserModal'), {
								backdrop: 'static',
								keyboard: false
							});

		// Show the modal
		editUserModal2.show();

		$.ajax({
			type: "POST",
			url: "<?= site_url('adduser_content'); ?>",
			data : {
					emp_id
			},
			success: function(data) {

					$("div#adduser_content").html(data);
			}
		});
	}

</script>


<script src="<?=base_url()?>assets/js/vendor.min.js"></script>
<!-- Import Js Files -->
<script src="<?=base_url()?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="<?=base_url()?>assets/js/theme/app.horizontal.init.js"></script>
<script src="<?=base_url()?>assets/js/theme/theme.js"></script>
<script src="<?=base_url()?>assets/js/theme/app.min.js"></script>
<script src="<?=base_url()?>assets/js/theme/sidebarmenu.js"></script>

<!-- solar icons -->
<script src="<?=base_url()?>assets/cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="<?=base_url()?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="<?=base_url()?>assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="<?=base_url()?>assets/cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/js/datatable/datatable-advanced.init.js"></script>
<script src="<?=base_url();?>assets/js/fixed.js"></script>	
<script src="<?=base_url();?>assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?=base_url();?>assets/js/forms/sweet-alert.init.js"></script>
<script src="<?=base_url();?>assets/js/plugins/toastr-init.js"></script>
<script src="<?=base_url();?>assets/libs/select2/dist/js/select2.min.js"></script>
<script src="<?=base_url();?>assets/js/forms/select2.init.js"></script>
<script src="<?=base_url();?>assets/js/password.js"></script>

   
</body>


</html>
