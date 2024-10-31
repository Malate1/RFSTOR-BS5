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
            <h4 class="fw-semibold mb-8">Account Setting </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-muted text-decoration-none" href="index.html">Home </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Account Setting </li>
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
    <div class="card">
        <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
            <i class="ti ti-user-circle me-2 fs-6"></i>
            <span class="d-none d-md-block">Password </span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button" role="tab" aria-controls="pills-notifications" aria-selected="false">
            <i class="ti ti-bell me-2 fs-6"></i>
            <span class="d-none d-md-block">User Name </span>
            </button>
        </li>
        
        </ul>
        <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
            <div class="row">
                
                <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100 border position-relative overflow-hidden">
                    <div class="card-body p-4">
                    <h4 class="card-title">Change Password </h4>
                    
					<p class="card-subtitle mb-4"><b> NOTE: </b>Password must be <b>alphanumeric</b> and have atleast <b>8</b> characters in length e.g (Torrfs2022) </p>
                    
					<form form role="form" action="<?php echo base_url() ?>Admin/Change_pass" method="post" role="form">
						<div class="mb-3">
							<label for="oldPassword" class="form-label">Old Password</label>
							<div class="input-group" id="show_hide_Opassword">
								<input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
								<button class="btn btn-outline-primary" type="button" id="togglePassword">
									<i class="fa fa-eye-slash" aria-hidden="true"></i>
								</button>
							</div>
						</div>

						<div class="mb-3">
							<label for="newPassword">New Password</label>
							<div class="input-group" id="show_hide_Npassword">
								<input type="password" class="form-control" id="pass" name="pass" oncopy="return false" required>
									
								<button class="btn btn-outline-primary" type="button" id="togglePassword2">
									<i class="fa fa-eye-slash" aria-hidden="true"></i>
								</button>
								</div>
								<div id="meter_wrapper" class="mt-3">
									<div class="progress">
										<div id="meter" class="progress-bar" style="width: 0;"></div>
									</div>
									<small id="pass_type" class="text-muted"></small>
								</div>
						</div>

                        <div class="mb-3">
							<label for="cNewPassword" class="form-label">Confirm New Password</label>
							<div class="input-group" id="show_hide_Cpassword">
								<input type="password" class="form-control" id="cNewPassword" name="cNewPassword" required>
								<button class="btn btn-outline-primary" type="button" id="togglePassword3">
									<i class="fa fa-eye-slash" aria-hidden="true"></i>
								</button>
							</div>
						</div>

                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                            <button class="btn btn-primary">Save </button>
                            <button class="btn bg-danger-subtle text-danger">Cancel </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
                
            </div>
            </div>
            <div class="tab-pane fade" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab" tabindex="0">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                <div class="card border shadow-none">
                    <div class="card-body p-4">
                    <h4 class="card-title">Notification Preferences </h4>
                    <p class="card-subtitle mb-4">
                    Select ___ notificaitons ou would like __ receive via email. Please ____ that you cannot opt
                    out of receving _______
                    messages, such __ payment, security or legal _____________.
                    </p>
                    <form class="mb-7">
                        <label for="exampleInputtext5" class="form-label">Email Address* </label>
                        <input type="text" class="form-control" id="exampleInputtext5" placeholder="" required="" />
                        <p class="mb-0">Required for notificaitons. </p>
                    </form>
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-article text-dark d-block fs-7" width="22" height="22"></i>
                            </div>
                            <div>
                            <h5 class="fs-4 fw-semibold">Our newsletter </h5>
                            <p class="mb-0">We'll always let you ____ about important changes </p>
                            </div>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" />
                        </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-checkbox text-dark d-block fs-7" width="22" height="22"></i>
                            </div>
                            <div>
                            <h5 class="fs-4 fw-semibold">Order Confirmation </h5>
                            <p class="mb-0">You will be notified ____ customer order any product </p>
                            </div>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked="" />
                        </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-clock-hour-4 text-dark d-block fs-7" width="22" height="22"></i>
                            </div>
                            <div>
                            <h5 class="fs-4 fw-semibold">Order Status Changed </h5>
                            <p class="mb-0">You will be notified ____ customer make changes to ___ order </p>
                            </div>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2" checked="" />
                        </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-truck-delivery text-dark d-block fs-7" width="22" height="22"></i>
                            </div>
                            <div>
                            <h5 class="fs-4 fw-semibold">Order Delivered </h5>
                            <p class="mb-0">You will be notified ____ the order is delivered </p>
                            </div>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked3" />
                        </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-mail text-dark d-block fs-7" width="22" height="22"></i>
                            </div>
                            <div>
                            <h5 class="fs-4 fw-semibold">Email Notification </h5>
                            <p class="mb-0">Turn on email notificaiton __ get updates through email </p>
                            </div>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4" checked="" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-9">
                <div class="card border shadow-none">
                    <div class="card-body p-4">
                    <h4 class="card-title">Date & Time </h4>
                    <p class="card-subtitle">Time zones and calendar _______ settings. </p>
                    <div class="d-flex align-items-center justify-content-between mt-7">
                        <div class="d-flex align-items-center gap-3">
                        <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-clock-hour-4 text-dark d-block fs-7" width="22" height="22"></i>
                        </div>
                        <div>
                            <p class="mb-0">Time zone </p>
                            <h5 class="fs-4 fw-semibold">(UTC + 02:00) Athens, ________ </h5>
                        </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download">
                        <i class="ti ti-download"></i>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-9">
                <div class="card border shadow-none">
                    <div class="card-body p-4">
                    <h4 class="card-title">Ignore Tracking </h4>
                    <div class="d-flex align-items-center justify-content-between mt-7">
                        <div class="d-flex align-items-center gap-3">
                        <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-player-pause text-dark d-block fs-7" width="22" height="22"></i>
                        </div>
                        <div>
                            <h5 class="fs-4 fw-semibold">Ignore Browser Tracking </h5>
                            <p class="mb-0">Browser Cookie </p>
                        </div>
                        </div>
                        <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked5" />
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-12">
                <div class="d-flex align-items-center justify-content-end gap-6">
                    <button class="btn btn-primary">Save </button>
                    <button class="btn bg-danger-subtle text-danger">Cancel </button>
                </div>
                </div>
            </div>
            </div>
            
        </div>
        </div>
    </div>
    </div>


    <script type="text/javascript">
        function swal_message(msg_type,msg){
        var Toast = Swal.mixin({
            toast: false,
            position: 'center',
            showConfirmButton: true,
            
            
        });

        Toast.fire({
            icon: msg_type,
            title: msg
        })
    }
        <?php if($this->session->flashdata('success2')) { ?>
            
            swal_message('success','Password Successfully Updated!');
        <?php } ?> 

        <?php if($this->session->flashdata('errormsg2')) { ?>
            
            swal_message('error','Username already exists!');
        <?php } ?> 

        <?php if($this->session->flashdata('errormsg')) { ?>
        
            swal_message('error','Old Password is Incorrect ');
        <?php } ?> 

        <?php if($this->session->flashdata('success')) { ?>
            swal_message('success','Username Successfully Updated!');
        <?php } ?>

        <?php if($this->session->flashdata('success1')) { ?>
            swal_message('success','Profile Picture Successfully Updated!');
        <?php } ?>  

        // <?php if($this->session->flashdata('errormsg1')) { ?>
        
        //     swal_message('error','The password must have atleast 1 capital letter and atleast 1 number ');
        // <?php } ?>

    
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#togglePassword').on('click', function(event) {
                event.preventDefault();

                var passwordInput = $('#show_hide_Opassword input');
                var icon = $('#show_hide_Opassword i');

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr('type', 'text');
                    icon.removeClass("fa-eye-slash").addClass("fa-eye");
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass("fa-eye").addClass("fa-eye-slash");
                }
            });

			$('#togglePassword2').on('click', function(event) {
                event.preventDefault();

                var passwordInput = $('#show_hide_Npassword input');
                var icon = $('#show_hide_Npassword i');

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr('type', 'text');
                    icon.removeClass("fa-eye-slash").addClass("fa-eye");
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass("fa-eye").addClass("fa-eye-slash");
                }
            });

			$('#togglePassword3').on('click', function(event) {
                event.preventDefault();

                var passwordInput = $('#show_hide_Cpassword input');
                var icon = $('#show_hide_Cpassword i');

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr('type', 'text');
                    icon.removeClass("fa-eye-slash").addClass("fa-eye");
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass("fa-eye").addClass("fa-eye-slash");
                }
            });
        });
    </script>
</div>
