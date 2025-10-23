<style>
	.breadcrumb-item+.breadcrumb-item::before {
		float: left;
		padding-right: var(--bs-breadcrumb-item-padding-x);
		color: var(--bs-breadcrumb-divider-color);
		content: var(--bs-breadcrumb-divider, "•");
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

	
	.accordion-body {
    	/* padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x); */
	}

	

	.border-top {
		border-top: 2px; !important;
	}

	.form-check-input[type="checkbox"] {
		border-radius: 0.25em;
		border-color: #5a6a85;
	}
	 
	@media print {
		table td:last-child {display:none}
		table th:last-child {display:none}
	}

	
    /* Disable overflow hidden for the button group */
    .btn-group.no-overflow {
        overflow: visible;
    }
    
    
	/* Add this CSS to fix the border radius */
	.btn-group .btn:first-child {
		border-top-left-radius: 5px;  
		border-bottom-left-radius: 5px;  
	}


	.ui-datepicker {
		background-color: white; /* or your desired background */
		border: 1px solid #ccc; /* border color */
		padding: 0.2em; /* padding */
	}

	.ui-datepicker .ui-datepicker-header {
		background-color: #5d87ff; /* the top part background */
		color: white; /* text color for the header */
	}

	.ui-datepicker .ui-datepicker-calendar th {
		background-color: #5d87ff; /* header for the days of the week */
		color: white;
	}

	.ui-datepicker .ui-state-default {
		background-color: #f5f5f5; /* normal day background */
	}

	.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
		border: 1px solid #dad55e;
		background: #5d87ff;
		color: #777620;
		display: block;
		padding: .2em;
		text-align: right;
		text-decoration: none;
		
	}

	.ui-datepicker td a, .ui-datepicker .ui-state-highlight {
		padding: 0.3em; /* Same padding for all states */
		margin: 0; /* Ensure no extra margin */
		display: block; /* Make sure it's a block element */
		width: 100%; /* Take up the full width of the cell */
		height: 100%; /* Take up the full height of the cell */
		box-sizing: border-box; /* Ensure padding is included in the width/height */
	}

	.ui-state-highlight {
			background-color: #5d87ff !important; /* Your highlight background */
			color: white !important; /* Your highlight text color */
			border-radius: 0 !important; /* Ensure no extra border radius */
	}

	.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button {
		font-family: 'PLUS JAKARTA SANS';
		font-size: 1em;
	}


</style>


<!-- Add -->
<div class="modal fade" id="addRfsModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Add RFS Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form onsubmit="return require_rfs();" action="<?php echo base_url('Request/rfs_create') ?>" id="addRequestRfs" method="post" enctype="multipart/form-data">
					<div id="rfs_content"></div>
					<hr>
						<label class="form-label">Attachments (optional)</label>
                                <p style="color: red;"><b>Note:</b> Max. file size is 20MB</p>

                                
									<label class="form-label">Browse a file &nbsp;</label>
									<input type="file" class="form-control" name="upload_file1" id="upload_file1" />
									<span id="fileSizeError" style="color: red; display: none;">File size exceeds
										20MB.</span>
									<span id="fileSizeMessage"></span>
									<div id="moreImageUpload"></div>
									<div style="clear:both;"></div>
									<div style="padding-top: 10px;" id="moreImageUploadLink">
										<a class="btn btn-secondary btn-sm" href="javascript:void(0);" id="attachMore"><i
												class="fa fa-plus" aria-hidden="true"></i> Add more file</a>
									</div>
                                
                                
                                <br>
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

<div class="modal fade" id="addTorModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Add TOR Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form onsubmit="return require_tor();" action="<?php echo base_url('Request/tor_create') ?>" id="addRequestTor" method="post" enctype="multipart/form-data">
					<div id="tor_content"></div>
					<hr>
						<label class="form-label">Attachments (optional)</label>
                                <p style="color: red;"><b>Note:</b> Max. file size is 20MB</p>

                                
									<label class="form-label">Browse a file &nbsp;</label>
									<input type="file" class="form-control" name="upload_file2" id="upload_file2" />
									<span id="fileSizeError" style="color: red; display: none;">File size exceeds
										20MB.</span>
									<span id="fileSizeMessage"></span>
									<div id="moreImageUpload2"></div>
									<div style="clear:both;"></div>
									<div style="padding-top: 10px;" id="moreImageUploadLink2">
										<a class="btn btn-secondary btn-sm" href="javascript:void(0);" id="attachMore2"><i
												class="fa fa-plus" aria-hidden="true"></i> Add more file</a>
									</div>
                                
                                
                                <br>
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

<div class="modal fade" id="addIsrModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Add TOR Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form onsubmit="return require_isr();" action="<?php echo base_url('Request/isr_create') ?>" id="addRequestIsr" method="post" enctype="multipart/form-data">
					<div id="isr_content"></div>
					<hr>
						<label class="form-label">Attachments (optional)</label>
                                <p style="color: red;"><b>Note:</b> Max. file size is 20MB</p>

                                
									<label class="form-label">Browse a file &nbsp;</label>
									<input type="file" class="form-control" name="upload_file3" id="upload_file3" />
									<span id="fileSizeError" style="color: red; display: none;">File size exceeds
										20MB.</span>
									<span id="fileSizeMessage"></span>
									<div id="moreImageUpload3"></div>
									<div style="clear:both;"></div>
									<div style="padding-top: 10px;" id="moreImageUploadLink3">
										<a class="btn btn-secondary btn-sm" href="javascript:void(0);" id="attachMore3"><i
												class="fa fa-plus" aria-hidden="true"></i> Add more file</a>
									</div>
                                
                                
                                <br>
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
<div class="modal fade" id="editRfsModal" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Edit RFS Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form onsubmit="return require_update_rfs();" action="<?php echo base_url('Request/rfsupdate') ?>" id="editRfs" method="post" enctype="multipart/form-data">  
				<div id="editrfs_content"></div>
					<hr>
						<label class="form-label">Choose a file to add more file/s</label>
                                <p style="color: red;"><b>Note:</b> Max. file size is 20MB</p>

                                
									<label class="form-label">Browse a file &nbsp;</label>
									<input type="file" class="form-control" name="upload_file4" id="upload_file4" />
									<span id="fileSizeError" style="color: red; display: none;">File size exceeds
										20MB.</span>
									<span id="fileSizeMessage"></span>
									<div id="moreImageUpload4"></div>
									<div style="clear:both;"></div>
									<div style="padding-top: 10px;" id="moreImageUploadLink4">
										<a class="btn btn-secondary btn-sm" href="javascript:void(0);" id="attachMore4">
											<i class="fa fa-plus" aria-hidden="true"></i> Add more file</a>
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

<div class="modal fade" id="editTorModal" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Edit TOR Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form onsubmit="return require_update_tor();" action="<?php echo base_url('Request/torupdate') ?>" id="editTor" method="post" enctype="multipart/form-data">  
				<div id="edittor_content"></div>
					<hr>
						<label class="form-label">Choose a file to add more file/s</label>
                                <p style="color: red;"><b>Note:</b> Max. file size is 20MB</p>

                                
									<label class="form-label">Browse a file &nbsp;</label>
									<input type="file" class="form-control" name="upload_file5" id="upload_file5" />
									<span id="fileSizeError" style="color: red; display: none;">File size exceeds
										20MB.</span>
									<span id="fileSizeMessage"></span>
									<div id="moreImageUpload5"></div>
									<div style="clear:both;"></div>
									<div style="padding-top: 10px;" id="moreImageUploadLink5">
										<a class="btn btn-secondary btn-sm" href="javascript:void(0);" id="attachMore5">
											<i class="fa fa-plus" aria-hidden="true"></i> Add more file</a>
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

<div class="modal fade" id="editIsrModal" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Edit ISR Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form onsubmit="return require_update_isr();" action="<?php echo base_url('Request/isrupdate') ?>" id="editIsr" method="post" enctype="multipart/form-data">  
				<div id="editisr_content"></div>
					<hr>
						<label class="form-label">Choose a file to add more file/s</label>
                                <p style="color: red;"><b>Note:</b> Max. file size is 20MB</p>

                                
									<label class="form-label">Browse a file &nbsp;</label>
									<input type="file" class="form-control" name="upload_file4" id="upload_file4" />
									<span id="fileSizeError" style="color: red; display: none;">File size exceeds
										20MB.</span>
									<span id="fileSizeMessage"></span>
									<div id="moreImageUpload4"></div>
									<div style="clear:both;"></div>
									<div style="padding-top: 10px;" id="moreImageUploadLink4">
										<a class="btn btn-secondary btn-sm" href="javascript:void(0);" id="attachMore4">
											<i class="fa fa-plus" aria-hidden="true"></i> Add more file</a>
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



<div class="body-wrapper">
  	<div class="container-fluid">
    	<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
               	<div class="row align-items-center">
                 	<div class="col-9">
                   		<h4 class="fw-semibold mb-8">Requests </h4>
                   		<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="<?= base_url('profile')?>">Home </a>
								</li>
								<li class="breadcrumb-item" aria-current="page">Requests </li>
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
					<div class="col-md-3">
						<label for="usergroup" class="form-label">User Group:</label>
						<select class="form-select select-group" name="usergroup" id="usergroup">
							<?php
							$data1 = $this->Admin_Model->getUserGroup();
							foreach ($data1 as $value) { ?>
								<option value="<?=$value->group_id?>"> <?=$value->groupname?> </option>
							<?php } ?>
						</select>
					</div>

					<div class="col-md-3">
						<label for="request_type" class="form-label">Request Type:</label>
						<select class="form-select select-type" name="request_type" id="request_type">
							<option>RFS</option>
							<option>TOR</option>
							<option>ISR</option>
						</select>
					</div>
				</div>

				
					<br>
					<div class="table-responsive">
						<table id="dt-pending" class="table w-100 table-striped table-bordered display text-nowrap" style="border-radius: 10px;">
										
							<thead>
								<th style="text-align: center;" >Control No.</th>
								<th class="wd-lg-30p">Transaction Date</th>
								<th class="wd-lg-30p">Requested To</th>
								<th class="wd-lg-30p">Company Name</th>
								<th class="wd-lg-30p">BU</th>
								<th class="wd-lg-30p">Requested By</th>
								<th class="wd-lg-30p">Purpose</th>
								<th class="wd-lg-30p">Processed by</th>
								<th class="wd-lg-30p">Status</th>
								<th class="wd-lg-30p">Actions</th>  
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
    $(document).ready(function(){
            
        // Ensure Select2 is properly initialized
		$('#usergroup, #request_type').select2();

		// Get selected values after initialization
		let usergroup = $('#usergroup').val(); 
		let typeofrequest = $('#request_type').val();

		viewPendingRequest(usergroup, typeofrequest);

		// Attach change event to both selects
		$('select').on('change', function() {
			let usergroup = $('#usergroup').val(); 
			let typeofrequest = $('#request_type').val();
			viewPendingRequest(usergroup, typeofrequest);
		});

		function viewPendingRequest(usergroup,typeofrequest) {

			var table = $('table#dt-pending').DataTable({
				"destroy": true,
				'serverSide': true,
				'processing': true,
				// 'responsive': true,
				"ajax": {
					url: "<?php echo site_url('Admin/pending_request_list'); ?>",
					type: "POST",
					data : {
						usergroup:         usergroup,
						typeofrequest:              typeofrequest,
					}
				},

				"order": [ [ 0, 'desc' ]],

				"scrollX": true,
				"fixedColumns":   {
					"leftColumns": 1,
					"rightColumns": 3,
					"width": 200
				},

				"columnDefs": [
					{
						"targets": [6, 7, 8,9],
						"orderable": false,
					},
					{
						"targets": [0],
						"className": "text-center",
					},
					{
						"searchable": false,
						"targets": 1
					},
					
				]
			});


			$('table#dt-pending').on('click', 'a', function() {

				let [action, ids] = this.id.split('-');

				if (!$(this).parents('tr').hasClass('selected')) {
					table.$('tr.selected').removeClass('selected');
					$(this).parents('tr').addClass('selected');
				}

				if (action == "RFS") {

					$("div#ApproveRfsModal").modal({
						backdrop: true,
						keyboard: true,
						show: false
					});

				}

				if (action == "TOR") {

					$("div#ApproveTorModal").modal({
						backdrop: true,
						keyboard: true,
						show: false
					});

				}

				if (action == "ISR") {

					$("div#ApproveIsrModal").modal({
						backdrop: true,
						keyboard: true,
						show: false
					});

					
				}

				if (action == "rem1") {

					$("div#addRemarksModal").modal({
						backdrop: true,
						keyboard: true,
						show: false
					});

				}

				if (action == "rem2") {

					$("div#editRemarksModal").modal({
						backdrop: true,
						keyboard: true,
						show: false
					});

				}
			});
		}

    });

    
</script>




