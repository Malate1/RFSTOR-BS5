<style>
	.breadcrumb-item+.breadcrumb-item::before {
		float: left;
		padding-right: var(--bs-breadcrumb-item-padding-x);
		color: var(--bs-breadcrumb-divider-color);
		content: var(--bs-breadcrumb-divider, "•");
	}

	/* .select2-container--default .select2-selection--single .select2-selection__arrow b {
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
	} */

	
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
					<div class="col-xs-12 text-left">

						<?php
							if($type == 'RFS'){
							echo'<div class="form-group" >
								<a id="addRFS" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRfsModal" onclick=rfs_content()><i class="fa fa-plus" aria-hidden="true"></i> Add '.$type.'</a>
								</div>';
							}
							
						?>
						<!-- <button class="btn me-1 mb-1 bg-warning-subtle text-warning px-4 fs-4 " data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg"></button> -->

						<?php
							if($type == 'TOR'){
							echo'<div class="form-group">
								<a id="addTOR" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTorModal" onclick=tor_content()><i class="fa fa-plus" aria-hidden="true"></i> Add '.$type.'</a>
								</div>';
							}
						?>

						<?php
							if($type == 'ISR'){
							echo'<div class="form-group">
								<a id="addISR" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addIsrModal" onclick=isr_content()><i class="fa fa-plus" aria-hidden="true"></i> Add '.$type.'</a>
								</div>';
							}
						?>

					</div>
            	</div> <br>
				
				<?php
					if($type == 'RFS'){ ?>
						<div class="text-left">
							<div class="btn-group shadow-0 w-80 no-overflow" role="group">
							<input type="hidden" id="typeofrequest" name="typeofrequest" value="rfs">
								
								<a style="border-top-left-radius: 7px; border-bottom-left-radius: 7px;" id="Pending" class="btn btn-primary active status">Pending</a>
								
								<a id="Approved" class="btn btn-outline-primary status">Completed</a>
								
								<a id="Cancelled" class="btn btn-outline-primary status">Cancelled</a>
							</div>

							
						</div>
					<?php } ?>

					<?php
					if($type == 'TOR'){ ?>
						<div class="text-left">
							<div class="btn-group shadow-0 w-80 no-overflow" role="group">
								<input type="hidden" id="typeofrequest" name="typeofrequest" value="tor">
								
								<a style="border-top-left-radius: 7px; border-bottom-left-radius: 7px;" id="Pending" class="btn btn-primary active status">Pending</a>
								
								<a id="Approved" class="btn btn-outline-primary status">Completed</a>
								
								<a id="Cancelled" class="btn btn-outline-primary status">Cancelled</a>
							</div>
						</div>
					<?php } ?>

					<?php
					if($type == 'ISR'){ ?>
						<div class="text-left" >
							<div class="btn-group shadow-0 w-80 no-overflow" role="group">
								<input type="hidden" id="typeofrequest" name="typeofrequest" value="isr">
								
								<a style="border-top-left-radius: 7px; border-bottom-left-radius: 7px;" id="Pending" class="btn btn-primary active status">Pending</a>
								
								<a id="Approved" class="btn btn-outline-primary status">Completed</a>
								
								<a id="Cancelled" class="btn btn-outline-primary status">Cancelled</a>
							</div>
						</div>
				<?php } ?>

                        
                <br>
				<div class="row">
					<div class="col-3">
						<label for="date_from" class="form-label">Date From</label>
						<div class="input-group">
							<span class="input-group-text">
								<i class="fa fa-calendar"></i>
							</span>
							<input type="text" id="date_from" name="date_from" class="form-control datepicker" autocomplete="off">
							<!-- <input type="text" name="date_from" class="form-control" placeholder="2024-06-04" id="mdate" /> -->
						</div>
					</div>

					<div class="col-3">
						<label for="date_to" class="form-label">Date To</label>
						<div class="input-group">
							<span class="input-group-text">
								<i class="fa fa-calendar"></i>
							</span>
							<input type="text" id="date_to" name="date_to" class="form-control datepicker" autocomplete="off">
							<!-- <input type="text"  name="date_to" class="form-control" placeholder="2024-06-04" id="mdate" /> -->
						</div>
					</div>


					<div class="col-1" style="margin-top: 32px;">
						<button id="clear-date" class="btn btn-warning">
							<i class="fa fa-times"></i>
						</button>
					</div>
				</div>

				
					<br>
					<div class="table-responsive">
						<table id="dt-requests" class="table w-100 table-striped table-bordered display text-nowrap" style="border-radius: 10px;">
										
							<thead>
								<th style="text-align: center;" >Control No.</th>
								<th class="wd-lg-30p">Transaction Date</th>
								<th class="wd-lg-30p">Requested To</th>
								<th class="wd-lg-30p">Company Name</th>
								<th class="wd-lg-30p">BU</th>
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

<script >
  	$(document).ready(function () {

		// var status = $("a.active").attr('id');
		var status = $("a.status.active").attr('id');
        let dateFrom = $("input[name = 'date_from']").val();
        let dateTo = $("input[name = 'date_to']").val();

		console.log(status, dateFrom, dateTo);
        viewRequest(status, dateFrom, dateTo);

        $("a.status").click(function() {

            $("a.status").removeClass('btn-primary active').addClass('btn-outline-primary');
        	$(this).removeClass('btn-outline-primary').addClass('btn-primary active');
            let status = this.id;
            let dateFrom = $("input[name = 'date_from']").val();
            let dateTo = $("input[name = 'date_to']").val();
            viewRequest(status, dateFrom, dateTo);
        });

        $("input[name = 'date_to']").change(function() {

            var status = $("a.status.active").attr('id');
            let dateFrom = $("input[name = 'date_from']").val();
            let dateTo = $(this).val();
            viewRequest(status, dateFrom, dateTo);
        });

		$("button#clear-date").click(function() {
            $("input[name = 'date_from']").val('');
            $("input[name = 'date_to']").val('');
            var status = $("a.status.active").attr('id');
            let dateFrom = $("input[name = 'date_from']").val();
            let dateTo = $(this).val();
            viewRequest(status, dateFrom, dateTo);
        });

		$('.datepicker').datepicker({
            
            changeMonth:true,
            changeYear:true,
            beforeShow: function() {
                setTimeout(function(){
                    $('.ui-datepicker').css('z-index', 99999999999999);
                }, 0);
            },
        });

        

	});

	function trimfield(str) {
		return str.replace(/^\s+|\s+$/g, '');
	}

	function viewRequest(req_status, date_from, date_to) {
   
		var typeofrequest = document.getElementById("typeofrequest").value;
		// var table = $('table#dt-requests').removeAttr('width').DataTable({
		var table = $("table#dt-requests").DataTable({
			"destroy": true,
			'serverSide': true,
			'processing': true,
				//'responsive': true,
				"ajax": {
				url: "<?php echo site_url('requests/list'); ?>",
				type: "POST",
				data : {
					status: req_status,
					typeofrequest: typeofrequest,
					date_from:date_from,
					date_to:date_to
				}
			},
			"order": [ [ 0, 'desc' ]],

			"scrollX": true,
			"fixedColumns":   {
				"leftColumns": 1,
				"rightColumns": 2,
				"width": 250 
				
			},

			"columnDefs": [{
				"targets": [6 , 7, 8],
				"orderable": false,
				
			},
			{
				"targets": [0],
				"className": "text-center",
			},

			{   "searchable": false, 
				"targets": 1 
			},
			]
		});

		$('table#dt-requests').on('click', 'a', function() {

			let [action, ids] = this.id.split('-');

			if (!$(this).parents('tr').hasClass('selected')) {
				table.$('tr.selected').removeClass('selected');
				$(this).parents('tr').addClass('selected');
			}

			if (action == "RFS") {

				var editRfsModal = new bootstrap.Modal(document.getElementById('editRfsModal'), {
					backdrop: "static",	
					keyboard: false
				});
				// Show the modal
				editRfsModal.show();

			}
			

			if (action == "TOR") {

				var editTorModal = new bootstrap.Modal(document.getElementById('editTorModal'), {
					backdrop: "static",	
					keyboard: false
				});
				// Show the modal
				editTorModal.show();

			}

			if (action == "ISR") {

				var editIsrModal = new bootstrap.Modal(document.getElementById('editIsrModal'), {
					backdrop: "static",	
					keyboard: false
				});
				// Show the modal
				editIsrModal.show();

			}
		});
	}

</script>

<script type="text/javascript">
    // Display flash messages if available
    <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
        swal_message('success','Request Successfully Added!');
    <?php } ?>

    <?php if($this->session->flashdata('SUCCESSMSG1')) { ?>
        swal_message('success','Request Successfully Updated!');
    <?php } ?>
</script>

<script type="text/javascript">
    $(document).ready(function () {
        var upload_number = 2;

        function attachMore(id, container, prefix) {
            $('#' + id).click(function () {
                var moreUploadTag = '';
                moreUploadTag += '<div class="element mt-3">';
                moreUploadTag += '<input class="form-control mb-1" type="file" id="' + prefix + upload_number + '" name="' + prefix + upload_number + '" onchange="checkFileSize(this)"/>';
                moreUploadTag += '<a class="btn btn-danger" href="javascript:del_file(' + upload_number + ')"><i class="fas fa-trash" aria-hidden="true"></i> </a>';
                moreUploadTag += '</div>';
                $('<dl id="delete_file' + upload_number + '">' + moreUploadTag + '</dl>').fadeIn('slow').appendTo('#' + container);
                upload_number++;
            });
        }

        attachMore('attachMore', 'moreImageUpload', 'upload_files1');
        attachMore('attachMore2', 'moreImageUpload2', 'upload_files2');
        attachMore('attachMore3', 'moreImageUpload3', 'upload_files3');
        attachMore('attachMore4', 'moreImageUpload4', 'upload_files4');
        attachMore('attachMore5', 'moreImageUpload5', 'upload_files5');
        attachMore('attachMore6', 'moreImageUpload6', 'upload_files6');

        window.del_file = function (eleId) {
            var ele = document.getElementById("delete_file" + eleId);
            ele.parentNode.removeChild(ele);
        };

        function checkFileSize(input) {
            var file = input.files[0];
            var maxSize = 20 * 1024 * 1024; // 20MB in bytes

            if (file.size > maxSize) {
                Swal.fire('Oops!', 'File size exceeded 20MB', 'error');
                input.value = ''; // Clear the selected file
            }
        }

        function formatBytes(bytes) {
            if (bytes === 0) return '0 Bytes';
            var k = 1024;
            var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
            var i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        function initFileSizeCheck() {
            $('input[type="file"]').each(function () {
                $(this).on('change', function () {
                    checkFileSize(this);
                });
            });
        }

        initFileSizeCheck();
        
    });
</script>


