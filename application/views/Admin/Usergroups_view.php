<style>
	.breadcrumb-item+.breadcrumb-item::before {
		float: left;
		padding-right: var(--bs-breadcrumb-item-padding-x);
		color: var(--bs-breadcrumb-divider-color);
		content: var(--bs-breadcrumb-divider, "•");
	}

	
	.border-top {
		border-top: 2px; !important;
	}

	.form-check-input[type="checkbox"] {
		border-radius: 0.25em;
		border-color: #5a6a85;
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
					<div id="adduser_content">

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

<div class="modal fade" id="addGroupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User Group</h4>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">
			<?php echo form_open('Admin/groupcreate'); ?> 
				<form method="post" >
					<div id="addgroup_content">
						
					</div> 
				</form>       
            </div>
				<div class="modal-footer">
					<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">Close
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
                   		<h4 class="fw-semibold mb-8">User Groups </h4>
                   		<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="<?= base_url('profile')?>">Home </a>
								</li>
								<li class="breadcrumb-item" aria-current="page">User Groups </li>
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
						<div class="form-group">
							<a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGroupModal" onclick=addgroup_content()><i class="fa fa-plus" aria-hidden="true"></i> Add User Group</a>
						</div>
					</div>
				</div> 
					<br>
					<div class="table-responsive">
						<table id="dt-usergroup" class="table w-100 table-striped table-bordered display text-nowrap">			
							<thead>
								<tr role="row">
									<th > ID</th>
									<th >Groupname</th>
									<th>Status</th>                                          
								</tr>
							</thead>
							<tbody>
								<?php
								if(!empty($getUsergroup))
								{
									foreach ($getUsergroup as $value)
									{ ?>
									<tr>
										<td ><?=$value->group_id?></td>
										<td><?=$value->groupname?></td>
										<!-- <td><a data-toggle="modal" data-target="#addGroupModal" onclick=addgroup_content()><?=$value->groupname?></a></td> -->
										<?php 
											if($value->active == 1){
											echo'
												<td>
													<label class="form-check form-switch">
														<input type="checkbox" onclick=deactivategroupstatus("'.$value->group_id.'") checked class="form-check-input">
														
													</label>                                        
												</td>';
											}else{
											echo'
												<td>
													<label class="form-check form-switch">
														<input type="checkbox" onclick=activategroupstatus("'.$value->group_id.'") class="form-check-input">
														
													</label>                                        
												</td>';    

											}

											
										?>
										
										
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
     
<script>
    $(document).ready(function() {
    var table = $('#dt-usergroup');
    table.DataTable({
        
        "order": [[ 0, "asc" ]]
    });
    
});
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
