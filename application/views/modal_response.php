<?php 

	if($request == 'add-user-form') {
		?>
			<div class="alert alert-danger" id="msg" role="alert" style="display: none">Ayaw Kol!</div>

			<div class ="row">

            	<div class="col-md-3">
            		<?php 

					@$profile  = $this->employee_model->find_employee_name($emp->emp_id);
					@$profile2 = $this->employee_model->find_employee_exp($emp->emp_id);
					@$profile3 = $this->employee_model->find_an_employee($emp->emp_id);

					@$inputteddob  = !empty($profile->birthdate) ? date("Y-m-d", strtotime($profile->birthdate)) : null;
					@$inputteddob1 = !empty($profile2->date_hired) ? date("Y-m", strtotime($profile2->date_hired)) : null;
					@$inputteddob2 = !empty($profile3->eocdate) && $profile3->eocdate != "0000-00-00" 
										? date("Y-m", strtotime($profile3->eocdate)) 
										: null;

					$currentDate = new DateTime();

					// AGE
					$age = null;
					if ($inputteddob) {
						$DOB = new DateTime($inputteddob);
						$age = $currentDate->diff($DOB)->y;
					}

					// SERVICE INTERVAL
					if ($inputteddob1) {
						$DOB1 = new DateTime($inputteddob1);

						if ($inputteddob2) {
							$DOB2 = new DateTime($inputteddob2);
						} else {
							// If EOC is missing or "0000-00-00", use CURRENT DATE
							$DOB2 = $currentDate;
						}

						$interval = $DOB2->diff($DOB1);
						$year1    = $interval->y;
						$month1   = $interval->m;
					} else {
						$year1  = 0;
						$month1 = 0;
					}

				        

				        //var_dump($DOB1);
						//$exp = $currentDate->diff($EXP)->y;
	                    if(@$profile == ''){
	                        @$str = $emp->profile_pic;
	                    }else{
	                        @$str = ltrim($profile->photo, '.');
	                    }
                        
                        echo'<div class="form-group mb-2">
                                <img src="http://172.16.161.34:8080/hrms'.$str.'" class="img-thumbnail rounded mb-2" alt="User Image" style="height: 200px; width: 200px;">

                            </div> 
                            ';
                        

                    ?>
                </div>
                <?php if($this->session->superadmin == "Yes"){ ?>
	                <div class="col-md-5">
		                <div style="height: 200px;">
		                	
		                	
		                	<table style="padding: 15px;">
						
							  <tr>
							    <td style="font-weight: bold;">Age:</td>
							    <td style="padding-left: 10px"><?php echo $age?></td>
							    
							  </tr>
							  <tr>
							    <td style="font-weight: bold;">Date of Birth:</td>
							    <td style="padding-left: 10px"><?php echo date("M. d, Y",strtotime(@$profile->birthdate)) ?></td>
							    
							  </tr>

							 <tr>
							    <td style="font-weight: bold;">Address:</td>
							    <td style="padding-left: 10px"><?php echo @$profile->home_address ?></td>
							    
							  </tr>

							  <tr>
							    <td style="font-weight: bold;">Civil Status:</td>
							    <td style="padding-left: 10px"><?php echo @$profile->civilstatus ?></td>
							    
							  </tr>

							  <tr>
							    <td style="font-weight: bold;">School:</td>
							    <td style="padding-left: 10px"><?php echo @$profile->school ?></td>
							    
							  </tr>

							  <tr>
							    <td style="font-weight: bold;">Course:</td>
							    <td style="padding-left: 10px"><?php echo @$profile->course ?></td>
							    
							  </tr>

							  <tr>
							    <td style="font-weight: bold;">Start Date:</td>
							    <td style="padding-left: 10px"><?php echo date("M. d, Y",strtotime(@$profile2->date_hired)) ?></td>
							    
							  </tr>

							  <tr>
							    <td style="font-weight: bold;">Years Experience:</td>
							    <td style="padding-left: 10px"><?php echo @$year1 ?>&nbsp; year(s) & <?php echo @$month1 ?>&nbsp; month(s)</td>
							    
							  </tr>
							</table>
		                </div>
		            </div>

		            <div class="col-md-4">
		                <div>
		                	
		                	
		                	<table style="padding: 15px;">
						
							<tr>
							    
							    <!-- <td style="padding-left: 10px"><?php echo @$profile->home_address ?></td> -->
							    <td >
						        <iframe
						            width="250"
						            height="200"
						            frameborder="0"
						            style="border:0"
						            src="https://www.google.com/maps/embed/v1/place?q=<?php echo urlencode(@$profile->home_address); ?>&key=AIzaSyCHYkil-wqTshtbxYcqr3EbDUh5CLk0PTk"
						            allowfullscreen
						        ></iframe>
						    	</td>
							    
							</tr>

							  
							</table>
		                </div>
		            </div>
	            <?php } ?>
        	</div>
        	<br>
            <div class ="row">
        		<div class="col-md-6">      
            		<div class="form-group mb-2">
	                    <label for="emp_id" class="form-label">Employee No.</label>
	                    <input type="hidden" class="form-control" name="allowconcern" id="allowconcern"  value="1">
	                    <input type="hidden" class="form-control" name="comp_code" id="comp_code"  value="<?= @$emp->company_code; ?>">
	                    <input type="hidden" class="form-control" name="bunit_code" id="bunit_code" value="<?= @$emp->bunit_code; ?>">
	                    <input type="hidden" class="form-control" name="business_unit_id" id="business_unit_id" value="<?= @$business_unit_id->id; ?>">
	                    <input type="text" class="form-control " name="emp_id" id="emp_id" autocomplete="off"  value="<?= $emp->emp_id; ?>" disabled>
	                </div>
	            </div>
	            
	            <div class="col-md-6">
	                <div class="form-group mb-2">
	                    <label class="form-label" for="name">Name</label>
	                    <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="<?= ucwords(strtolower(htmlentities($emp->name))); ?>" disabled>
	                </div>
	            </div>
	            

	            <div class="col-md-6">
	                <div class="form-group mb-2">
	                    <label class="form-label" for="position">Position</label>
	                    <input type="text" class="form-control" name="position" id="position" autocomplete="off" value="<?= @$emp->position; ?>" disabled>
	                </div>
                </div>

                <div class="col-md-6">      
                    <div class="form-group mb-2">
                        <label class="form-label" for="company">Company</label>
                        <input type="text" class="form-control" name="company" id="company" autocomplete="off"  value="<?=@$cc->acroname; ?>" disabled >
                    </div>
                </div>

                <div class="col-md-6">      
                    <div class="form-group mb-2">
                        <label class="form-label" for="bu">Business Unit</label>
                        <input type="text" class="form-control" name="bu" id="bu" autocomplete="off"  value="<?= @$bu->business_unit; ?>" disabled >
                    </div>
                </div>

                <div class="col-md-6">      
                    <div class="form-group mb-2">
                        <label class="form-label" for="bu">Department</label>
                        <input type="text" class="form-control" name="department" id="department" autocomplete="off"  value="<?= @$dept->dept_name; ?>" disabled >
                    </div>
                </div>

                <div class="col-md-6">      
                    <div class="form-group mb-2">
                        <label class="form-label" for="bu">Section</label>
                        <input type="text" class="form-control" name="section" id="section" autocomplete="off"  value="<?= @$sect->section_name; ?>" disabled >
                    </div>
                </div>
            </div>
            <hr>
	            <div class="row">
	            	<div class="col-md-6">      
                    <div class="form-group mb-2">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" autocomplete="off"  value="<?= $emp->emp_id; ?>" disabled >
                    </div>
                </div>

                <div class="col-md-6">      
                    <div class="form-group mb-2">
                        <label class="form-label" for="password">Password</label>
                        <input type="text" class="form-control" name="password" id="password" autocomplete="off"  value="Torrfs2022" disabled >
                    </div>
                </div>
	            </div>
            
            
            <hr>
			
            <div class="card card-primary">
				<div class="row" style="margin-top: 20px; display: flex;">
					<!-- Tasks Section -->
					<div class="col-md-6">
						<div class="form-group">
							<center><label class="form-label" for="usertype" style="text-align: center; font-weight: bold">Tasks</label></center>
							<hr>
							<div style="max-height: 300px; overflow-y: auto;">
								<ul style="padding-left: 20px;">
									<?php foreach($tasks as $task) : ?>
									<li style="list-style-type: none;">
										<div style="margin-bottom: 8px;" class="form-group">
											<input class="form-check-input largerCheckbox" type="checkbox" id="tasks" name="tasks[]" value="<?= $task->usertype_id; ?>">
											<label class="form-label" for="tasks" style="margin-left: 5px;"><?= $task->usertype; ?></label>
										</div>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>

					<!-- User Groups Section -->
					<div class="col-md-6">
						<div class="form-group">
							<center><label class="form-label" for="usergroup" style="text-align: center; font-weight: bold">User Groups</label></center>							
							<hr>
							<div style="max-height: 300px; overflow-y: auto;">
								<ul style="padding-left: 20px;">
									<?php foreach($groups as $group) : ?>
									<li style="list-style-type: none;">
										<div style="margin-bottom: 8px;" class="form-group">
											<input class="form-check-input largerCheckbox" type="checkbox" id="groups" name="groups[]" value="<?= $group->group_id; ?>">
											<label class="form-label" for="groups" style="margin-left: 5px;"><?= $group->groupname; ?></label>
										</div>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> 

        	<script>
        		$(".select-task").select2({
			        placeholder: "Select a Main Task",
			        allowClear: true
			    });

			    $(".select-ugroup").select2({
			        placeholder: "Select a User Group",
			        allowClear: true
			    });

			    $(".select-comp").select2({
			        placeholder: "Select a Company",
			        allowClear: true
			    });

			    $(".select-bu").select2({
			        placeholder: "Select a Business Unit",
			        allowClear: true
			    });

        	</script>
		<?php
	}

?>
