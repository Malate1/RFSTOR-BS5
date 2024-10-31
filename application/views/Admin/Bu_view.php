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

<div id="editBuModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Business Unit Form</h4>
				<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
			</div>
			<div class="modal-body">
				<?php echo form_open('Admin/buupdate'); ?>
				<form method="post">
					<div id="editbu_content"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div id="editBuModal2" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg">
		<div class="modal-content" >
			<div class="modal-header">
				<h4 style="text-align: center;" class="modal-title"><b>Edit BU Roles Form</b></h4>
				<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
			
			</div>
			<div class="modal-body">
				<div id="editbu_content2">
									
				</div>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">Close</button>
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
                   		<h4 class="fw-semibold mb-8">Business Units </h4>
                   		<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="<?= base_url('profile')?>">Home </a>
								</li>
								<li class="breadcrumb-item" aria-current="page">Business Units </li>
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

    
        <div class="card border-top border-primary">
            <div class="card-body">
			<div class="d-flex">
				<!-- Left side company list -->
				
				<div class="flex-shrink-0 p-0" style="width: 20%;">
					<div class="list-group" style="overflow-y: auto; height: 70vh;">
						<?php foreach ($getComp as $m) { ?>                               
							<button 
								style="padding: 15px; text-align: center" 
								type="button" 
								class="list-group-item list-group-item-action" 
								value="<?=$m->company_code?>" 
								id="comp_<?=$m->company_code?>" 
								onclick="bu_content('<?=$m->company_code?>'); setActive(this);">
								<b><?=$m->acroname?></b>
							</button>
						<?php } ?>  
					</div>
				</div>

				<script>
				// Function to add 'active' class to the clicked button and remove it from others
				function setActive(button) {
					// Remove the active class from all buttons
					var buttons = document.querySelectorAll('.list-group-item');
					buttons.forEach(function(btn) {
						btn.classList.remove('active');
					});

					// Add active class to the clicked button
					button.classList.add('active');
				}
				</script>


				
				<!-- Right side business units -->
				<div class="flex-grow-1">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead class="table-primary">
								<tr>
									<th style="width: 70%; text-align: center;">Business Unit</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody id="bu_content1">
								
							</tbody>
						</table>
					</div>
				</div>
			</div>

            </div>
             
             
             
        </div>
    
</div>
</div>
     
<script>
	window.onload = function() {
    // Get the first button by its ID or use a querySelector for better flexibility
    const firstButton = document.querySelector('.list-group .list-group-item');
    
    if (firstButton) {
        
        bu_content(firstButton.value); // Call the function with the company code
    }
};

let activeButton = document.querySelector('.list-group-item.active');
    if (activeButton) {
        activeButton.classList.remove('active');
    }

    // Add 'active' class to the clicked button
    let clickedButton = document.getElementById('comp_' + companyCode);
    if (clickedButton) {
        clickedButton.classList.add('active');
    }

</script>
<script src="<?=base_url()?>assets/js/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/libs/jquery-ui/dist/jquery-ui.min.js"></script>

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
