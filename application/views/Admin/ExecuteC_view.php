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

<div class="body-wrapper">
  	<div class="container-fluid">
    	<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
               	<div class="row align-items-center">
                 	<div class="col-9">
                   		<h4 class="fw-semibold mb-8">Execute </h4>
                   		<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="<?= base_url('profile')?>">Home </a>
								</li>
								<li class="breadcrumb-item">
			
									<a class="text-muted text-decoration-none" href="#">Execute </a>
								</li>
								<li class="breadcrumb-item" aria-current="page"><?= $type; ?> </li>
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
            <input type="hidden" id="usertype" name="usertype" value="Execute">
				

				<?php if($type == 'Concern'){ ?>
					<div class="text-left">
						<div class="btn-group shadow-0 w-80 no-overflow" role="group" id="statusButtons">
							<!-- Pending Button -->
							<a style="border-top-left-radius: 7px; border-bottom-left-radius: 7px;" 
							class="btn <?= ($status == 'Pending') ? 'btn-primary active' : 'btn-outline-primary' ?> status" 
							href="<?=base_url('pending-concern-status')?>">
							Pending
							</a>
							
							<!-- Completed Button -->
							<a class="btn <?= ($status == 'Approved') ? 'btn-primary active' : 'btn-outline-primary' ?> status" 
							href="<?=base_url('approve-concern-status')?>">
							Executed
							</a>
							
							<!-- Cancelled Button -->
							<a class="btn <?= ($status == 'Cancelled') ? 'btn-primary active' : 'btn-outline-primary' ?> status" 
							href="<?=base_url('cancel-concern-status')?>">
							Cancelled
							</a>
						</div>
					</div>
				<?php } ?>


				
					<br>
					<div class="table-responsive">
						<table id="dt-concerns-e" class="table w-100 table-striped table-bordered display text-nowrap" style="border-radius: 10px;">
										
							<thead>
					
                                <th style="text-align: center;" >Control No.</th>
                                <th class="wd-lg-30p">Transaction Date</th>
                                <th class="wd-lg-30p">Requested To</th>
                                <th class="wd-lg-30p">Company</th>
                                <th class="wd-lg-30p">BU</th>
                                <th class="wd-lg-30p">Requested By</th>
                                <th class="wd-lg-30p">Details</th>
								<?php
									if($status == 'Approved'){
										echo'<th class="wd-lg-30p">Acknowledge</th>';
									}else{
										echo'<th class="wd-lg-30p">Acknowledge</th>';
									}
											
								?>
								
								<th class="wd-lg-30p">Status</th>
								<th class="wd-lg-30p">Actions</th>  

							
							</thead>
							<tbody>
                                <?php
                                if(!empty($getRequest))
                                {
                                    foreach ($getRequest as $value)
                                    { ?>
                                    <tr>
                                        <!-- <td hidden=""><?=$value->reqid?></td> -->
                                        <td style="color: red; text-align: center; font-weight: bold"><?=$value->requestnumber?></td>
                                        <td><?=date("D • h:i:s A • M. d, Y ", strtotime($value->datetoday))?></td>
                                        <td><?=$value->groupname?></td>
                                        <td><?=$value->companyname?></td>
                                        <?php
                                          
                                           $bu = $this->Admin_Model->bu_name($value->buid);
                                        ?>
                                        <td><?=$bu->business_unit?></td>
                                        <?php
                                          
                                           // $requestedby = $this->employee_model->find_an_employee($value->userid);
                                            $requestedby = $this->Admin_Model->getUserData2($value->userid);
                                        ?>
                                        <td><?=$requestedby->name?></td>
                                        <td style="width: 150px;"><?=$value->details?></td>
                                        <?php
                                            
                                            if($value->isacknowledge == 'Yes'){
                                                echo'<td>'.$value->isacknowledge.'</td>';
                                                
                                            }

                                            if($value->isacknowledge == 'No'){
                                                
                                                echo'<td>'.$value->isacknowledge.'</td>';
                                            }
                                            
                                            
            
                                        ?>
                                        
                                            <?php
                                                if($value->executedby == '0' AND $value->cancelledby == '0'){
                                                    echo'<td><span class="mb-1 badge  bg-warning-subtle text-warning">Pending</span></td>';
                                                }elseif ($value->reqstatus == 'Cancelled') {
                                                    echo'<td><span class="mb-1 badge  bg-danger-subtle text-danger">'.$value->reqstatus.'</span></td>';
                                                }
                                                else{
                                                   echo'<td><span class="mb-1 badge  bg-success-subtle text-success">Executed</span></td>';
                                                }    
                                            ?>
                                        <td style="width: 150px;">
                                            <?php
                                            $taskid1 = 2;
                                            $taskid2 = 3;
                                            if($type == 'Concern'){
                                            echo'
                                                <a class="btn mb-1 btn-warning rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light action" title="View Concern Details "  data-bs-toggle="modal" data-bs-target="#ApproveConcernModal" onclick=approveconcern_content('.$value->reqid.')><i class="fa fa-clipboard" aria-hidden="true" ></i></a>&nbsp;&nbsp;';
                                               
                                                if($value->executedby == '0' AND $value->cancelledby == '0'){

                                                echo'<a class="btn mb-1 btn-primary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light action" title="Approve Request"   onclick=executestatusconcern('.$value->reqid.')> <i class="fa fa-thumbs-up" aria-hidden="true" ></i></a>&nbsp;&nbsp;';
                                                
                                                echo'<a class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light action" title="Cancel Request"   onclick=updatestatusrequest('.$value->reqid.')> <i class="fa fa-trash" aria-hidden="true" ></i></a>&nbsp;&nbsp;';
                                                }
                                                if ($value->remarks == '') {
                                                    echo'
                                                        <a class="btn mb-1 btn-primary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light action" title="Add Remarks"   data-bs-toggle="modal" data-bs-target="#addRemarksModal" onclick=addremarks_content('.$value->reqid.')><i class="fa fa-comment" aria-hidden="true" ></i></a>&nbsp;&nbsp; ';
                                                }else{
                                                    echo'
                                                        <a class="btn mb-1 btn-primary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light action" title="Edit Remarks"   data-bs-toggle="modal" data-bs-target="#editRemarksModal" onclick=editremarks_content('.$value->reqid.')><i class="fa fa-comment" aria-hidden="true" ></i></a>&nbsp;&nbsp; ';
                                                }

                                                if ($value->cancelledby != '0'){
                                                    echo'
                                                        <a class="btn mb-1 btn-primary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center text-light action" title="Recall Request"   onclick=recallstatusrequest('.$value->reqid.')> <i class="fa fa-undo" aria-hidden="true" ></i></a>&nbsp;&nbsp;';
                                                }
                                            
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

<script >
  	$(document).ready(function() {

		var table = $('#dt-concerns-e');
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
    // Display flash messages if available
    <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
        swal_message('success','Request Successfully Added!');
    <?php } ?>

    <?php if($this->session->flashdata('SUCCESSMSG1')) { ?>
        swal_message('success','Request Successfully Updated!');
    <?php } ?>
</script>


