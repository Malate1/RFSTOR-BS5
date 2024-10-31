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
                   		<h4 class="fw-semibold mb-8">Verify </h4>
                   		<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="<?= base_url('profile')?>">Home </a>
								</li>
								<li class="breadcrumb-item">
			
									<a class="text-muted text-decoration-none" href="#">Verify </a>
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
            <input type="hidden" id="usertype" name="usertype" value="Verify">
				<?php
					if($type == 'RFS'){ ?>
						<div class="text-left">
							<div class="btn-group shadow-0 w-80 no-overflow" role="group">
							<input type="hidden" id="typeofrequest" name="typeofrequest" value="rfs">
								
								<a style="border-top-left-radius: 7px; border-bottom-left-radius: 7px;" id="Pending" class="btn btn-primary active status">Pending</a>
								
								<a id="Approved" class="btn btn-outline-primary status">Verified</a>
								
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
								
								<a id="Approved" class="btn btn-outline-primary status">Verified</a>
								
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
								
								<a id="Approved" class="btn btn-outline-primary status">Verified</a>
								
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
						<table id="dt-verify" class="table w-100 table-striped table-bordered display text-nowrap" style="border-radius: 10px;">
										
							<thead>
					
                                <th style="text-align: center;" >Control No.</th>
                                <th class="wd-lg-30p">Transaction Date</th>
                                <th class="wd-lg-30p">Requested To</th>
                                <th class="wd-lg-30p">Company</th>
                                <th class="wd-lg-30p">BU</th>
                                <th class="wd-lg-30p">Requested By</th>
                                <th class="wd-lg-30p"style="width: 100px;">Purpose</th>
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
		var usertype      = document.getElementById("usertype").value;
		var table = $("table#dt-verify").DataTable({
			"destroy": true,
			'serverSide': true,
			'processing': true,
				//'responsive': true,
				"ajax": {
				url: "<?php echo site_url('verify/list'); ?>",
				type: "POST",
				data : {
					status:         req_status,
                    typeofrequest:  typeofrequest,
                    usertype:       usertype,
                    date_from:      date_from,
                    date_to:        date_to
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
				"targets": [6 , 7, 8, 9],
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

		$('table#dt-approve').on('click', 'a', function() {

			let [action, ids] = this.id.split('-');

			if (!$(this).parents('tr').hasClass('selected')) {
				table.$('tr.selected').removeClass('selected');
				$(this).parents('tr').addClass('selected');
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


