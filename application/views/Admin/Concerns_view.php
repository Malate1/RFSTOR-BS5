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
<div class="modal fade" id="addConcernModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Add Concern Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
				<form onsubmit="return require_concern();" action="<?php echo base_url('Request/concern_create') ?>" id="addRequestConcern" method="post" enctype="multipart/form-data">
        
                    <div id="concern_content"></div>
					<hr>
						<label class="form-label">Attachments (optional)</label>
                                <p style="color: red;"><b>Note:</b> Max. file size is 20MB</p>

                                
									<label class="form-label">Browse a file &nbsp;</label>
									<input type="file" class="form-control" name="upload_file7" id="upload_file8" />
									<span id="fileSizeError" style="color: red; display: none;">File size exceeds
										20MB.</span>
									<span id="fileSizeMessage"></span>
									<div id="moreImageUpload7"></div>
									<div style="clear:both;"></div>
									<div style="padding-top: 10px;" id="moreImageUploadLink7">
										<a class="btn btn-secondary btn-sm" href="javascript:void(0);" id="attachMore7"><i
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
<div class="modal fade" id="editConcernModal" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center">
				<h4 class="modal-title" id="myLargeModalLabel">
				Edit Concern Form
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form onsubmit="return require_concern();" action="<?php echo base_url('Request/concernupdate') ?>" id="editConcern" method="post" enctype="multipart/form-data">  
				<div id="editconcern_content"></div>
					<hr>
						<label class="form-label">Choose a file to add more file/s</label>
                                <p style="color: red;"><b>Note:</b> Max. file size is 20MB</p>

                                
									<label class="form-label">Browse a file &nbsp;</label>
									<input type="file" class="form-control" name="upload_file4" id="upload_file8" />
									<span id="fileSizeError" style="color: red; display: none;">File size exceeds
										20MB.</span>
									<span id="fileSizeMessage"></span>
									<div id="moreImageUpload8"></div>
									<div style="clear:both;"></div>
									<div style="padding-top: 10px;" id="moreImageUploadLink8">
										<a class="btn btn-secondary btn-sm" href="javascript:void(0);" id="attachMore8">
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
							if($type == 'Concern'){
							echo'<div class="form-group" >
								<a id="addRFS" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addConcernModal" onclick=concern_content()><i class="fa fa-plus" aria-hidden="true"></i> Add '.$type.'</a>
								</div>';
							}
							
						?>
						

					</div>
            	</div> <br>
				
				<?php if($type == 'Concern'){ ?>
					<div class="text-left">
						<div class="btn-group shadow-0 w-80 no-overflow" role="group" id="statusButtons">
							<!-- Pending Button -->
							<a style="border-top-left-radius: 7px; border-bottom-left-radius: 7px;" 
							class="btn <?= ($status == 'Pending') ? 'btn-primary active' : 'btn-outline-primary' ?> status" 
							href="<?=base_url('view-concern')?>">
							Pending
							</a>
							
							<!-- Completed Button -->
							<a class="btn <?= ($status == 'Approved') ? 'btn-primary active' : 'btn-outline-primary' ?> status" 
							href="<?=base_url('view-concern-completed')?>">
							Completed
							</a>
							
							<!-- Cancelled Button -->
							<a class="btn <?= ($status == 'Cancelled') ? 'btn-primary active' : 'btn-outline-primary' ?> status" 
							href="<?=base_url('view-concern-cancelled')?>">
							Cancelled
							</a>
						</div>
					</div>
				<?php } ?>


                        
                <br>
				
					<div class="table-responsive">
						<table id="dt-concerns" class="table w-100 table-striped table-bordered display text-nowrap" style="border-radius: 10px;">
										
							<thead>
							<th style="text-align: center;" >Control No.</th>
								<th >Transaction Date</th>
								<th >Requested To</th>
								<th >Company Name</th>
								<th >BU</th>
								<th style="width: 150px;">Details</th>
								
								<?php
									if($status == 'Approved'){
										echo'<th>Executed by</th>';
									}

									if ($status == 'Cancelled') {
										echo'<th>Cancelled by</th>';
									}

									if ($status == 'Pending') {
										
									}
											
								?>
								
								<th >Status</th>
								<th style="width: 150px;">Actions</th> 
							</thead>
							<tbody>
							<?php
                                if(!empty($getRequest))
                                {
                                    foreach ($getRequest as $value)
                                    { ?>
                                    <tr>
                                        <!-- <td hidden=""><?=$value->id?></td> -->
                                        <td style="color: red; text-align: center; font-weight: bold"><?=$value->requestnumber?></td>
                                        <td><?=date("D • h:i:s A • M. d, Y ", strtotime($value->datetoday))?></td>
                                        <td><?=$value->groupname?></td>
                                        <td><?=$value->companyname?></td>
                                        <?php
                                          
                                           $bu = $this->Admin_Model->bu_name($value->buid);
                                        ?>
                                        <td><?=$bu->business_unit?></td>
                                        <td style="width: 150px;"><?=$value->details?></td>
                                            <?php
                                                $executedby = $this->Admin_Model->getUserData2($value->executedby);

                                                $cancelledby = $this->Admin_Model->getUserData2($value->cancelledby);

                                                // $name = explode(",", $executedby->name);
                                                // $fname = explode(" ", $name[1]);
                                                // $c = $fname[1]." ".$name[0];
                                                if($value->status == 'Approved'){
                                                    echo'<td>'.$executedby->name.'</td>';
                                                    
                                                }
                                                if($value->status == 'Cancelled') {
                                                    echo'<td>'.$cancelledby->name.'</td>';
                                                }
                                                if($value->status == 'Pending') {
                                                    //echo'<td hidden="">'.$value->cancelledby.'<td>';
                                                }
                
                                            ?>
                                        
                                        </td>
                                        <td> 
                                            <?php
                                                if($value->status == 'Pending'){
                                                    echo'<span class="mb-1 badge  bg-warning-subtle text-warning">'.$value->status.'</span></td>';
                                                }elseif ($value->status == 'Cancelled') {
                                                    echo'<span class="mb-1 badge  bg-danger-subtle text-danger">'.$value->status.'</span></td>';
                                                }
                                                else{
                                                   echo'<span class="mb-1 badge  bg-success-subtle text-success">Executed</span></td>';
                                                }    
                                            ?>

                                        </td>
                                        
                                        <td style="width: 150px;">
                                            <?php
                                            if($type == 'Concern'){
                                            echo'<form class="form-inline" id="" method="post">';
                                                if($value->executedby == '0' AND $value->cancelledby == '0'){
                                                echo'
                                                    <a class="btn mb-1 btn-warning rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light action" title="Modify Concern"  data-bs-toggle="modal" data-bs-target="#editConcernModal" onclick=editconcern_content('.$value->id.')><i class="fa fa-edit " aria-hidden="true" ></i></a>&nbsp;&nbsp; 

                                                    <a class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light" title="Cancel Request" onclick=updatestatusrequest('.$value->id.')> <i class="fa fa-times " aria-hidden="true" ></i></a>&nbsp;&nbsp; ';
                                                }else{
                                                    echo'
                                                    <a class="btn mb-1 btn-warning rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light" title="View Concern Details "  data-bs-toggle="modal" data-bs-target="#ApproveConcernModal" onclick=approveconcern_content('.$value->id.')><i class="fa fa-clipboard " aria-hidden="true" ></i></a>&nbsp;&nbsp; ';
                                                    
                                                }

                                                if($value->isacknowledge == 'No' and $value->executedby != '0'){
                                                    echo'
                                                    <a class="btn mb-1 btn-primary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light" title="Acknowledge Request"  onclick=acknowledgeconcern('.$value->id.')> <i class="fa fa-thumbs-o-up " aria-hidden="true" ></i></a>&nbsp;&nbsp; ';
                                                }

                                                if ($value->remarks != '') {
                                                    echo'
                                    					<a class="btn mb-1 btn-primary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light" title="Edit Remarks" data-bs-toggle="modal" data-bs-target="#editRemarksModal" onclick=editremarks_content('.$value->id.')><i class="fa fa-comment " aria-hidden="true" ></i></a>&nbsp;&nbsp; ';
                                                }

                                                if ($value->cancelledby != '0'){
                                                    echo'
                                                        <a class="btn mb-1 btn-primary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light" title="Recall Request" onclick=recallstatusrequest('.$value->id.')> <i class="fa fa-undo " aria-hidden="true" ></i></a>&nbsp;&nbsp; ';
                                                }

                                                echo'    
                                                </form>';
                                            }
                                                
                                        ?>
                                        </td>     
                                    </tr>   
                                    <?php }
                                }?>
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

<script type="text/javascript">
    // Display flash messages if available
    <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
        swal_message('success','Request Successfully Added!');
    <?php } ?>

    <?php if($this->session->flashdata('SUCCESSMSG1')) { ?>
        swal_message('success','Request Successfully Updated!');
    <?php } ?>
</script>
<script>
    $(document).ready(function() {

		
		var table = $('#dt-concerns');
		table.DataTable({
			
			"order": [[ 0, "asc" ]],
			"scrollX": true,
			"fixedColumns":   {
				"leftColumns": 1,
				"rightColumns": 2,
				"width": 250 
				
			},
		});
		
	});
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

        
        attachMore('attachMore7', 'moreImageUpload7', 'upload_files7');
        attachMore('attachMore8', 'moreImageUpload8', 'upload_files8');

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
<!-- JQuery UI -->
<script src="<?=base_url()?>assets/libs/jquery-ui/dist/jquery-ui.min.js"></script>
   
</body>


</html>
