<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme"  data-layout="horizontal" data-boxed-layout="full">

	<head>

	<!-- <script>
		document.addEventListener("DOMContentLoaded", function () {
			const htmlElement = document.documentElement; // Get the <html> element

			// Check if the layout is saved in local storage
			const savedLayout = localStorage.getItem("boxedLayout") || "full";

			// Set the attribute based on the saved value
			htmlElement.setAttribute("data-boxed-layout", savedLayout);

			// Example: If you allow switching layouts via a button
			document.querySelector("#toggleLayout").addEventListener("click", function () {
				const currentLayout = htmlElement.getAttribute("data-boxed-layout");
				const newLayout = currentLayout === "full" ? "boxed" : "full";
				htmlElement.setAttribute("data-boxed-layout", newLayout);

				// Save the new layout to local storage
				localStorage.setItem("boxedLayout", newLayout);
			});
		});

	</script> -->
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Required meta tags -->
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Favicon icon-->
		<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/images/logos/favicon.png" />

		<!-- Core Css -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css" />

		<title>Online TOR & RFS | <?php echo $page_title; ?></title>
		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
		<link rel="stylesheet"
			href="<?= base_url() ?>assets/cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/libs/select2/dist/css/select2.min.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/libs/sweetalert2/dist/sweetalert2.min.css" />
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.min.css" type="text/css">
		<link rel="stylesheet" href="<?= base_url() ?>assets/libs/dropzone/dist/min/dropzone.min.css" />
		<!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/daterangepicker.css"> -->
		<link href="<?php echo base_url(); ?>assets/css/fixed.css" rel="stylesheet" />
		<style>
			table.dataTable thead>tr>th.sorting:before,
			table.dataTable thead>tr>th.sorting_asc:before,
			table.dataTable thead>tr>th.sorting_desc:before,
			table.dataTable thead>tr>th.sorting_asc_disabled:before,
			table.dataTable thead>tr>th.sorting_desc_disabled:before,
			table.dataTable thead>tr>td.sorting:before,
			table.dataTable thead>tr>td.sorting_asc:before,
			table.dataTable thead>tr>td.sorting_desc:before,
			table.dataTable thead>tr>td.sorting_asc_disabled:before,
			table.dataTable thead>tr>td.sorting_desc_disabled:before {
				bottom: 50%;
				content: "▲";
				content: "▲" / "";
			}

			table.dataTable thead>tr>th.sorting:after,
			table.dataTable thead>tr>th.sorting_asc:after,
			table.dataTable thead>tr>th.sorting_desc:after,
			table.dataTable thead>tr>th.sorting_asc_disabled:after,
			table.dataTable thead>tr>th.sorting_desc_disabled:after,
			table.dataTable thead>tr>td.sorting:after,
			table.dataTable thead>tr>td.sorting_asc:after,
			table.dataTable thead>tr>td.sorting_desc:after,
			table.dataTable thead>tr>td.sorting_asc_disabled:after,
			table.dataTable thead>tr>td.sorting_desc_disabled:after {
				top: 50%;
				content: "▼";
				content: "▼" / "";
			}

			table.dataTable.table-striped>tbody>tr:nth-of-type(2n+1).selected>* {
				box-shadow: inset 0 0 0 9999px var(--bs-primary);
			}

			
		</style>

	</head>

	<body>

		<!-- Preloader -->
		<div class="preloader">
			<img src="<?= base_url() ?>assets/images/logos/loader.svg" alt="loader" class="lds-ripple img-fluid" />
		</div>
		<div id="main-wrapper">
			<!-- Sidebar Start -->
			<aside class="left-sidebar with-vertical">
				<div><!-- ---------------------------------- -->
					<!-- Start Vertical Layout Sidebar -->
					<!-- ---------------------------------- -->
					<div class="brand-logo d-flex align-items-center justify-content-between">
						<a hre#" class="text-nowrap logo-img">
							<!-- <img src="<?= base_url() ?>assets/images/logos/dark.png" class="dark-logo" width="180"
								alt="modernize-img" /> -->
							<img src="<?= base_url() ?>assets/images/logos/dark.png" class="light-logo" width="180"
								alt="modernize-img" />
						</a>
						<a href="javascript:void(0)"
							class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
							<i class="ti ti-x"></i>
						</a>
					</div>


					<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
						<ul id="sidebarnav">

							<li class="nav-small-cap">
								<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
								<span class="hide-menu">Home </span>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link" href="<?= base_url() ?>profile" id="get-url"
									aria-expanded="false">
									<span>
										<i class="ti ti-home"></i>
									</span>
									<span class="hide-menu">Dashboard </span>
								</a>
							</li>

							<?php if ($getType1 == true) { ?>
								<li class="nav-small-cap">
									<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
									<span class="hide-menu">Admin </span>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('view-users') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-users"></i>
										</span>
										<span class="hide-menu">Users </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('view-users-cebu') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-users"></i>
										</span>
										<span class="hide-menu">Users (CEBO) </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('view-bu') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-maps"></i>
										</span>
										<span class="hide-menu">Business Units </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('view-usergroup') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-mail"></i>
										</span>
										<span class="hide-menu">Usergroups </span>
									</a>
								</li>

								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('view-pending') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-mail"></i>
										</span>
										<span class="hide-menu">Manage Pending Requests </span>
									</a>
								</li>

								

								<?php if($this->session->emp_id == '02723-2022' OR $this->session->emp_id == '02483-2023' OR $this->session->emp_id == '03972-2022' ){ ?>
									<li class="sidebar-item">
										<a class="sidebar-link" href="<?= base_url('view-deduct') ?>" aria-expanded="false">
											<span>
												<i class="ti ti-users"></i>
											</span>
											<span class="hide-menu">View Deduction </span>
										</a>
									</li>
									
								<?php } ?>
							<?php } ?>

							<?php if ($getType2 == true) { ?>
								<li class="nav-small-cap">
									<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
									<span class="hide-menu">REQUEST </span>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('view-rfs') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">RFS </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('view-tor') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">TOR </span>
									</a>
								</li>
								<?php if($getIsr == true){ ?>
									<li class="sidebar-item">
										<a class="sidebar-link" href="<?= base_url('view-isr') ?>" aria-expanded="false">
											<span>
												<i class="ti ti-clipboard"></i>
											</span>
											<span class="hide-menu">ISR </span>
										</a>
									</li>
								<?php } ?>

								<?php if($getConcern == true){ ?>
									<li class="sidebar-item">
										<a class="sidebar-link" href="<?= base_url('view-concern') ?>" aria-expanded="false">
											<span>
												<i class="ti ti-mail"></i>
											</span>
											<span class="hide-menu">Concerns </span>
										</a>
									</li>
								<?php } ?>
							<?php } ?>


							<?php if ($getType3 == true) { ?>
								<li class="nav-small-cap">
									<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
									<span class="hide-menu">APPROVE </span>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('pending-rfs-status') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">RFS </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('pending-tor-status') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">TOR </span>
									</a>
								</li>

								<?php if($getIsr == true){ ?>
									<li class="sidebar-item">
										<a class="sidebar-link" href="<?= base_url('pending-isr-status') ?>" aria-expanded="false">
											<span>
												<i class="ti ti-clipboard"></i>
											</span>
											<span class="hide-menu">ISR </span>
										</a>
									</li>
								<?php } ?>
								
							<?php } ?>

							<?php if ($getType4 == true) { ?>
								<li class="nav-small-cap">
									<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
									<span class="hide-menu">EXECUTE </span>
								</li>

								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('pending-rfs-status-e') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">RFS </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('pending-tor-status-e') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">TOR </span>
									</a>
								</li>
								<?php if($getIsr == true){ ?>
									<li class="sidebar-item">
										<a class="sidebar-link" href="<?= base_url('pending-isr-status-e') ?>" aria-expanded="false">
											<span>
												<i class="ti ti-clipboard"></i>
											</span>
											<span class="hide-menu">ISR </span>
										</a>
									</li>
								<?php } ?>

								<?php if($getConcern == true){ ?>
									<li class="sidebar-item">
										<a class="sidebar-link" href="<?php echo base_url()?>pending-concern-status" aria-expanded="false">
											<span>
												<i class="ti ti-clipboard"></i>
											</span>
											<span class="hide-menu">Concerns </span>
										</a>
									</li>
								<?php } ?>

							<?php } ?>

							<?php if ($getType5 == true) { ?>
								<li class="nav-small-cap">
									<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
									<span class="hide-menu">REVIEW </span>
								</li>

								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('pending-rfs-status-r') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">RFS </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('pending-tor-status-r') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">TOR </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?= base_url('pending-isr-status-r') ?>" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">ISR </span>
									</a>
								</li>
								
							<?php } ?>


							<?php if ($getType6 == true) { ?>
								<li class="nav-small-cap">
									<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
									<span class="hide-menu">VERIFY </span>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="#" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">RFS </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="#" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">TOR </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link" href="#" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">ISR </span>
									</a>
								</li>
							<?php } ?>
								

							<li class="nav-small-cap">
								<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
								<span class="hide-menu">LOGS </span>
							</li>
							<?php if($this->session->superadmin == 'Yes'){ ?>
	
								<li class="sidebar-item">
									<a class="sidebar-link" href="<?php echo base_url()?>view-logs" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">ACTIVITY LOGS </span>
									</a>
								</li>	
							<?php } ?>

							<?php if($getType4 == true){ ?>
	
								<li class="sidebar-item">
									<a class="sidebar-link" href="view-logs-r" aria-expanded="false">
										<span>
											<i class="ti ti-clipboard"></i>
										</span>
										<span class="hide-menu">REQUEST LOGS </span>
									</a>
								</li>
							<?php } ?>
								
								
							


						</ul>
					</nav>

					<div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
						<div class="hstack gap-3">
							<div class="john-img">
								<img src="<?= base_url() ?>assets/images/profile/user-1.jpg" class="rounded-circle"
									width="40" height="40" alt="modernize-img" />
							</div>
							<div class="john-title">
								<h6 class="mb-0 fs-4 fw-semibold"><?= $this->session->name ?> </h6>
								<span class="fs-2"><?= $this->session->position ?> </span>
							</div>
							<button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
								aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-title="logout" onclick="logout();">
								<i class="ti ti-power fs-6"></i>
							</button>
						</div>
					</div>

					<!-- ---------------------------------- -->
					<!-- Start Vertical Layout Sidebar -->
					<!-- ---------------------------------- -->
				</div>
			</aside>
			<!--  Sidebar End -->
			<div class="page-wrapper">
				<!--  Header Start -->
				<header class="topbar">
					<div class="with-vertical"><!-- ---------------------------------- -->
						<!-- Start Vertical Layout Header -->
						<!-- ---------------------------------- -->
						<nav class="navbar navbar-expand-lg p-0">
							<ul class="navbar-nav">
								<li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
									<a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
										<i class="ti ti-menu-2"></i>
									</a>
								</li>

							</ul>

							<ul class="navbar-nav quick-links d-none d-lg-flex align-items-center">

							</ul>

							<div class="d-block d-lg-none py-4">
								<a href="#" class="text-nowrap logo-img">
									<!-- <img src="<?= base_url() ?>assets/images/logos/dark.png" class="dark-logo" width="180"
										alt="modernize-img" /> -->
									<img src="<?= base_url() ?>assets/images/logos/dark.png" class="light-logo"
										width="180" alt="modernize-img" />
								</a>
							</div>
							<a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0"
								href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
								aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<i class="ti ti-dots fs-7"></i>
							</a>
							<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
								<div class="d-flex align-items-center justify-content-between">

									<ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

										<li class="nav-item nav-icon-hover-bg rounded-circle">
											<!-- <a class="nav-link moon dark-layout" href="javascript:void(0)">
												<i class="ti ti-moon moon"></i>
											</a> -->
											<a class="nav-link sun light-layout" href="javascript:void(0)">
												<i class="ti ti-sun sun"></i>
											</a>
										</li>




										<li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
											<a class="nav-link position-relative" href="javascript:void(0)" id="drop2"
												aria-expanded="false">
												<i class="ti ti-bell-ringing"></i>
												<div class="notification bg-primary rounded-circle"></div>
											</a>
											<div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
												aria-labelledby="drop2">
												<div
													class="d-flex align-items-center justify-content-between py-3 px-7">
													<h5 class="mb-0 fs-5 fw-semibold">Notifications </h5>
													<span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new
													</span>
												</div>
												<div class="message-body" data-simplebar="">
													<a href="javascript:void(0)"
														class="py-6 px-7 d-flex align-items-center dropdown-item">
														<span class="me-3">
															<img src="<?= base_url() ?>assets/images/profile/user-2.jpg"
																alt="user" class="rounded-circle" width="48"
																height="48" />
														</span>
														<div class="w-100">
															<h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
															</h6>
															<span class="fs-2 d-block text-body-secondary">Congratulate
																him </span>
														</div>
													</a>
													<!-- <a href="javascript:void(0)"
														class="py-6 px-7 d-flex align-items-center dropdown-item">
														<span class="me-3">
															<img src="<?= base_url() ?>assets/images/profile/user-3.jpg"
																alt="user" class="rounded-circle" width="48"
																height="48" />
														</span>
														<div class="w-100">
															<h6 class="mb-1 fw-semibold lh-base">New message </h6>
															<span class="fs-2 d-block text-body-secondary">Salma sent
																you new _______ </span>
														</div>
													</a>
													<a href="javascript:void(0)"
														class="py-6 px-7 d-flex align-items-center dropdown-item">
														<span class="me-3">
															<img src="<?= base_url() ?>assets/images/profile/user-4.jpg"
																alt="user" class="rounded-circle" width="48"
																height="48" />
														</span>
														<div class="w-100">
															<h6 class="mb-1 fw-semibold lh-base">Bianca sent payment
															</h6>
															<span class="fs-2 d-block text-body-secondary">Check your
																earnings </span>
														</div>
													</a>
													<a href="javascript:void(0)"
														class="py-6 px-7 d-flex align-items-center dropdown-item">
														<span class="me-3">
															<img src="<?= base_url() ?>assets/images/profile/user-5.jpg"
																alt="user" class="rounded-circle" width="48"
																height="48" />
														</span>
														<div class="w-100">
															<h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks
															</h6>
															<span class="fs-2 d-block text-body-secondary">Assign her
																new tasks </span>
														</div>
													</a>
													<a href="javascript:void(0)"
														class="py-6 px-7 d-flex align-items-center dropdown-item">
														<span class="me-3">
															<img src="<?= base_url() ?>assets/images/profile/user-6.jpg"
																alt="user" class="rounded-circle" width="48"
																height="48" />
														</span>
														<div class="w-100">
															<h6 class="mb-1 fw-semibold lh-base">John received payment
															</h6>
															<span class="fs-2 d-block text-body-secondary">$230 deducted
																from account </span>
														</div>
													</a>
													<a href="javascript:void(0)"
														class="py-6 px-7 d-flex align-items-center dropdown-item">
														<span class="me-3">
															<img src="<?= base_url() ?>assets/images/profile/user-7.jpg"
																alt="user" class="rounded-circle" width="48"
																height="48" />
														</span>
														<div class="w-100">
															<h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
															</h6>
															<span class="fs-2 d-block text-body-secondary">Congratulate
																him </span>
														</div>
													</a> -->
												</div>
												<div class="py-6 px-7 mb-1">
													<button class="btn btn-outline-primary w-100">See All Notifications
													</button>
												</div>
											</div>
										</li>

										<li class="nav-item dropdown">
											<a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
												aria-expanded="false">
												<div class="d-flex align-items-center">
													<div class="user-profile-img">


														<?php
															// Check if the profile picture is set and the file exists
															$profile_pic = $this->session->profile_pic;
															$profile_pic_path = 'http://172.16.161.34:8080/hrms/' . $profile_pic;

															// Use file_exists only for local paths; for URLs, use get_headers to check if the image exists
															$headers = @get_headers($profile_pic_path);

															if ($profile_pic && strpos($headers[0], '200')) {
																// Display the actual profile picture if it exists
																echo '<img src="' . $profile_pic_path . '" class="rounded-circle" width="35" height="35" alt="modernize-img" />';
															} else {
																// Display the default placeholder image if the profile picture is not available
																echo '<img src="' . base_url() . 'uploads/profile-pic/default-pic.jpg" class="rounded-circle" width="35" height="35" alt="modernize-img" />';
															}
														?>

													</div>
												</div>
											</a>
											<div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
												aria-labelledby="drop1">
												<div class="profile-dropdown position-relative" data-simplebar="">
													<div class="py-3 px-7 pb-0">
														<h5 class="mb-0 fs-5 fw-semibold">User Profile </h5>
													</div>
													<div class="d-flex align-items-center py-9 mx-7 border-bottom">
														<?php
															// Check if the profile picture is set and the file exists
															$profile_pic = $this->session->profile_pic;
															$profile_pic_path = 'http://172.16.161.34:8080/hrms/' . $profile_pic;

															// Use file_exists only for local paths; for URLs, use get_headers to check if the image exists
															$headers = @get_headers($profile_pic_path);

															if ($profile_pic && strpos($headers[0], '200')) {
																// Display the actual profile picture if it exists
																echo '<img src="' . $profile_pic_path . '" class="rounded-circle" width="80" height="80" alt="modernize-img" />';
															} else {
																// Display the default placeholder image if the profile picture is not available
																echo '<img src="' . base_url() . 'uploads/profile-pic/default-pic.jpg" class="rounded-circle" width="80" height="80" alt="modernize-img" />';
															}
														?>

														<div class="ms-3">
															<h5 class="mb-1 fs-3"><?= $this->session->name ?> </h5>
															<span class="mb-1 d-block"><?= $this->session->position ?>
															</span>
															<p class="mb-0 d-flex align-items-center gap-2">
																<!-- <i class="ti ti-mail fs-4"></i> info@modernize.com -->
															</p>
														</div>
													</div>
													<div class="message-body">
														<a href="<?=base_url('update-profile')?>"
															class="py-8 px-7 mt-8 d-flex align-items-center">
															<span
																class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
																<img src="<?= base_url() ?>assets/images/svgs/icon-account.svg"
																	alt="modernize-img" width="24" height="24" />
															</span>
															<div class="w-100 ps-3">
																<h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile
																</h6>
																<span class="fs-2 d-block text-body-secondary">Account
																	Settings </span>
															</div>
														</a>

													</div>
													<div class="d-grid py-4 px-7 pt-8">

														<a href="#" onclick="logout();"
															class="btn btn-outline-primary">Log Out </a>
													</div>
												</div>
											</div>
										</li>
										<!-- ------------------------------- -->
										<!-- end profile Dropdown -->
										<!-- ------------------------------- -->
									</ul>
								</div>
							</div>
						</nav>

						<!--  Mobilenavbar -->
						<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
							aria-labelledby="offcanvasWithBothOptionsLabel">
							<nav class="sidebar-nav scroll-sidebar">

							</nav>
						</div>
					</div>
					<div class="app-header with-horizontal">
						<nav class="navbar navbar-expand-xl container-fluid p-0">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none ms-n2">
									<a class="nav-link sidebartoggler" id="sidebarCollapse" href="javascript:void(0)">
										<i class="ti ti-menu-2"></i>
									</a>
								</li>
								<li class="nav-item d-none d-xl-block">
									<a href="#" class="text-nowrap nav-link">
										<!-- <img src="<?= base_url() ?>assets/images/logos/dark.png" class="dark-logo"
											width="180" alt="modernize-img" /> -->
										<img src="<?= base_url() ?>assets/images/logos/dark.png" class="light-logo"
											width="180" alt="modernize-img" />
									</a>
								</li>

							</ul>
							<ul class="navbar-nav quick-links d-none d-xl-flex align-items-center">

							</ul>
							<div class="d-block d-xl-none">
								<a href="#" class="text-nowrap nav-link">
									<img src="<?= base_url() ?>assets/images/logos/dark.png" width="180"
										alt="modernize-img" />
								</a>
							</div>
							<a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0"
								href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
								aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="p-2">
									<i class="ti ti-dots fs-7"></i>
								</span>
							</a>
							<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
								<div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
									<a href="javascript:void(0)"
										class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
										type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
										aria-controls="offcanvasWithBothOptions">
										<i class="ti ti-align-justified fs-7"></i>
									</a>
									<ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
										
										<li class="nav-item nav-icon-hover-bg rounded-circle">
											<a class="nav-link moon ">
												<i class="ti ti-moon moon" id="theme-button"></i>
											</a>
											
										</li>

										<script>
											/*==================== DARK/LIGHT THEME ====================*/
											const themeButton = document.getElementById('theme-button');
											const darkTheme = 'dark'; // Your dark theme name
											const lightTheme = 'light'; // Your light theme name
											const iconTheme = 'ti-sun'; // Default icon for light mode
											const toggleIconTheme = 'ti-moon'; // Icon for dark mode

											// Retrieve previously selected theme from localStorage if available
											const selectedTheme = localStorage.getItem('selected-theme');
											const selectedIcon = localStorage.getItem('selected-icon');

											// Get current theme based on `data-bs-theme` attribute
											const getCurrentTheme = () => document.documentElement.getAttribute('data-bs-theme');
											const getCurrentIcon = () => themeButton.classList.contains(toggleIconTheme) ? toggleIconTheme : iconTheme;

											// If the user previously selected a theme, apply it
											if (selectedTheme) {
												document.documentElement.setAttribute('data-bs-theme', selectedTheme);
												themeButton.classList[selectedIcon === iconTheme ? 'add' : 'remove'](iconTheme);
												themeButton.classList[selectedIcon === toggleIconTheme ? 'add' : 'remove'](toggleIconTheme);
											}

											// Add event listener for the theme button
											themeButton.addEventListener('click', () => {
												// Toggle between light and dark themes
												const currentTheme = getCurrentTheme() === darkTheme ? lightTheme : darkTheme;
												document.documentElement.setAttribute('data-bs-theme', currentTheme);

												// Toggle the icon
												themeButton.classList.toggle(iconTheme);
												themeButton.classList.toggle(toggleIconTheme);

												// Save the selected theme and icon to localStorage
												localStorage.setItem('selected-theme', currentTheme);
												localStorage.setItem('selected-icon', getCurrentIcon());
											});
										</script>

										<?php if($getType4 == true){ ?>
											<li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
												<a class="nav-link position-relative" href="javascript:void(0)" id="drop2"
													aria-expanded="false">
													<i class="ti ti-bell-ringing"></i>
													<div class="notification bg-primary rounded-circle"></div>
												</a>
												<div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
													aria-labelledby="drop2">
													<div
														class="d-flex align-items-center justify-content-between py-3 px-7">
														<h5 class="mb-0 fs-5 fw-semibold">Request Notifications </h5>
														
														<span id="newAllCount" style="display: hidden;">0</span>

														<span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm" >
														<span id="newCount">0</span>
														</span>

														
													</div>
													<div class="message-body" data-simplebar="">
														<a href="<?=base_url('pending-rfs-status-e')?>"
															class="py-6 px-7 d-flex align-items-center dropdown-item"
															id="rfs">
															<span class="me-3">
																<img src="<?= base_url() ?>assets/images/profile/user-2.jpg"
																	alt="user" class="rounded-circle" width="48"
																	height="48" />
															</span>
															<div class="w-100">
																<h6 class="mb-1 fw-semibold lh-base"><span id="newRFSCount"></span> pending RFS to execute 
																</h6>
																<span class="fs-2 d-block text-body-secondary">Check it out </span>
															</div>
														</a>

														<a href="<?=base_url('pending-tor-status-e')?>"
															class="py-6 px-7 d-flex align-items-center dropdown-item"
															id="tor">
															<span class="me-3">
																<img src="<?= base_url() ?>assets/images/profile/user-2.jpg"
																	alt="user" class="rounded-circle" width="48"
																	height="48" />
															</span>
															<div class="w-100">
																<h6 class="mb-1 fw-semibold lh-base"><span id="newTORCount"></span> pending TOR to execute 
																</h6>
																<span class="fs-2 d-block text-body-secondary">Check it out </span>
															</div>
														</a>

														<a href="<?=base_url('pending-isr-status-e')?>"
															class="py-6 px-7 d-flex align-items-center dropdown-item"
															id="isr">
															<span class="me-3">
																<img src="<?= base_url() ?>assets/images/profile/user-2.jpg"
																	alt="user" class="rounded-circle" width="48"
																	height="48" />
															</span>
															<div class="w-100">
																<h6 class="mb-1 fw-semibold lh-base"><span id="newISRCount"></span> pending ISR to execute 
																</h6>
																<span class="fs-2 d-block text-body-secondary">Check it out </span>
															</div>
														</a>
														
													</div>
													<!-- <div class="py-6 px-7 mb-1">
														<button class="btn btn-outline-primary w-100">See All Notifications
														</button>
													</div> -->
												</div>
											</li>
										<?php } ?>

										<li class="nav-item dropdown">
											<a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
												aria-expanded="false">
												<div class="d-flex align-items-center">
													<div class="user-profile-img">

													<?php
														// Check if the profile picture is set and the file exists
														$profile_pic = $this->session->profile_pic;
														$profile_pic_path = 'http://172.16.161.34:8080/hrms/' . $profile_pic;

														// Use file_exists only for local paths; for URLs, use get_headers to check if the image exists
														$headers = @get_headers($profile_pic_path);

														if ($profile_pic && strpos($headers[0], '200')) {
															// Display the actual profile picture if it exists
															echo '<img src="' . $profile_pic_path . '" class="rounded-circle" width="35" height="35" alt="modernize-img" />';
														} else {
															// Display the default placeholder image if the profile picture is not available
															echo '<img src="' . base_url() . 'uploads/profile-pic/default-pic.jpg" class="rounded-circle" width="35" height="35" alt="modernize-img" />';
														}
													?>


													</div>
												</div>
											</a>
											<div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
												aria-labelledby="drop1">
												<div class="profile-dropdown position-relative" data-simplebar="">
													<div class="py-3 px-7 pb-0">
														<h5 class="mb-0 fs-5 fw-semibold">User Profile </h5>
													</div>
													<div class="d-flex align-items-center py-9 mx-7 border-bottom">
														

														<?php
															// Check if the profile picture is set and the file exists
															$profile_pic = $this->session->profile_pic;
															$profile_pic_path = 'http://172.16.161.34:8080/hrms/' . $profile_pic;

															// Use file_exists only for local paths; for URLs, use get_headers to check if the image exists
															$headers = @get_headers($profile_pic_path);

															if ($profile_pic && strpos($headers[0], '200')) {
																// Display the actual profile picture if it exists
																echo '<img src="' . $profile_pic_path . '" class="rounded-circle" width="80" height="80" alt="modernize-img" />';
															} else {
																// Display the default placeholder image if the profile picture is not available
																echo '<img src="' . base_url() . 'uploads/profile-pic/default-pic.jpg" class="rounded-circle" width="80" height="80" alt="modernize-img" />';
															}
														?>

														<div class="ms-3">
															<h5 class="mb-1 fs-3"><?= $this->session->name ?></h5>
															<span class="mb-1 d-block"><?= $this->session->position ?>
															</span>

														</div>
													</div>
													<div class="message-body">
														<a href="<?=base_url('update-profile')?>"
															class="py-8 px-7 mt-8 d-flex align-items-center">
															<span
																class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">

																<img src="<?= base_url() ?>assets/images/svgs/icon-account.svg"
																	alt="modernize-img" width="24" height="24" />
															</span>
															<div class="w-100 ps-3">
																<h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile
																</h6>
																<span class="fs-2 d-block text-body-secondary">Account
																	Settings </span>
															</div>
														</a>

													</div>
													<div class="d-grid py-4 px-7 pt-8">

														<a href="#" onclick="logout();"
															class="btn btn-outline-primary">Log Out </a>
													</div>
												</div>
											</div>
										</li>
										<!-- ------------------------------- -->
										<!-- end profile Dropdown -->
										<!-- ------------------------------- -->
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</header>
				<!--  Header End -->

				<aside class="left-sidebar with-horizontal">
					<!-- Sidebar scroll-->
					<div>
						<!-- Sidebar navigation-->
						<nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
							<ul id="sidebarnav">

								<li class="nav-small-cap">
									<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
									<span class="hide-menu">Home </span>
								</li>
								<li class="sidebar-item">
									<a href="<?= base_url() ?>profile" id="get-url" class="sidebar-link">
									<span>
										<i class="ti ti-home"></i>
									</span>
										<span class="hide-menu">Dashboard</span>
									</a>
								</li>
								
								<?php if ($getType1 == true) { ?>
									<li class="nav-small-cap">
										<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
										<span class="hide-menu">Admin </span>
									</li>
									<li class="sidebar-item">
									<a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
										<span>
											<i class="ti ti-users"></i>
										</span>
										<span class="hide-menu">Admin </span>
										</a>
										<ul aria-expanded="false" class="collapse first-level">
											<li class="sidebar-item">
												<a href="<?= base_url('view-users') ?>" class="sidebar-link">
													<i class="ti ti-users"></i>
													<span class="hide-menu">Users </span>
												</a>
											</li>
											<li class="sidebar-item">
												<a href="<?= base_url('view-users-cebu') ?>" class="sidebar-link">
													<i class="ti ti-users"></i>
													<span class="hide-menu">Users (CEBO) </span>
												</a>
											</li>
											<li class="sidebar-item">
												<a href="<?= base_url('view-bu') ?>" class="sidebar-link">
													<i class="ti ti-map"></i>
													<span class="hide-menu">Business Units </span>
												</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link" href="<?= base_url('view-usergroup') ?>"
													aria-expanded="false">
													<span>
														<i class="ti ti-mail"></i>
													</span>
													<span class="hide-menu">Usergroups </span>
												</a>
											</li>

											<li class="sidebar-item">
												<a class="sidebar-link" href="<?= base_url('view-pending') ?>"
													aria-expanded="false">
													<span>
														<i class="ti ti-notebook"></i>
													</span>
													<span class="hide-menu">Manage Pending Requests</span>
												</a>
											</li>

											<?php if($this->session->emp_id == '02723-2022' OR $this->session->emp_id == '02483-2023' OR $this->session->emp_id == '03972-2022' ){ ?>
												
												<li class="sidebar-item">
													<a class="sidebar-link" href="<?= base_url('view-deduct') ?>"
														aria-expanded="false">
														<span>
															<i class="ti ti-users"></i>
														</span>
														<span class="hide-menu">View Deduction </span>
													</a>
												</li>
												
											<?php } ?>

										</ul>
									</li>
								<?php } ?>
								
								<?php if ($getType2 == true) { ?>
									<li class="nav-small-cap">
										<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
										<span class="hide-menu">Requests </span>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
											<span>
												<i class="ti ti-notebook"></i>
											</span>
											<span class="hide-menu">Requests </span>
										</a>
										<ul aria-expanded="false" class="collapse first-level">
											<li class="sidebar-item">
												<a href="<?= base_url('view-rfs') ?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">RFS </span>
												</a>
											</li>
											<li class="sidebar-item">
												<a href="<?= base_url('view-tor') ?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">TOR </span>
												</a>
											</li>
											<?php if ($getIsr == true) { ?>
												<li class="sidebar-item">
													<a href="<?= base_url('view-isr') ?>" class="sidebar-link">
														<i class="ti ti-clipboard"></i>
														<span class="hide-menu">ISR </span>
													</a>
												</li>
											<?php } ?>
											
											<?php if ($getConcern == true) { ?>
												<li class="sidebar-item">
													<a href="<?= base_url('view-concern') ?>" class="sidebar-link">
														<i class="ti ti-clipboard"></i>
														<span class="hide-menu">CONCERNS </span>
													</a>
												</li>
											<?php } ?>

										</ul>
									</li>
								<?php } ?>
								
								<?php if ($getType3 == true) { ?>
									<li class="nav-small-cap">
										<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
										<span class="hide-menu">Approve</span>
									</li>
									<li class="sidebar-item ">
										<a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
											<span class="rounded-3">
												<i class="ti ti-layout-grid"></i>
											</span>
											<span class="hide-menu">Approve </span>
										</a>
										<ul aria-expanded="false" class="collapse first-level">
											<li class="sidebar-item">
												<a href="<?= base_url('pending-rfs-status') ?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">RFS </span>
												</a>
											</li>
											<li class="sidebar-item">
												<a href="<?= base_url('pending-tor-status') ?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">TOR </span>
												</a>
											</li>
											<?php if($getIsr == true){ ?>
												<li class="sidebar-item">
													<a href="<?= base_url('pending-isr-status') ?>" class="sidebar-link">
														<i class="ti ti-clipboard"></i>
														<span class="hide-menu">ISR </span>
													</a>
												</li>
											<?php } ?>
											
										</ul>
									</li>
								<?php } ?>
									
								<?php if ($getType4 == true) { ?>
									<li class="nav-small-cap">
										<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
										<span class="hide-menu">Execute </span>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
											<span class="rounded-3">
												<i class="ti ti-file-text"></i>
											</span>
											<span class="hide-menu">Execute </span>
										</a>
										<ul aria-expanded="false" class="collapse first-level">
											<li class="sidebar-item">
												<a href="<?=base_url('pending-rfs-status-e')?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">RFS </span>
												</a>
											</li>
											<li class="sidebar-item">
												<a href="<?=base_url('pending-tor-status-e')?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">TOR </span>
												</a>
											</li>
											<?php if($getIsr == true){ ?>
												<li class="sidebar-item">
													<a href="<?=base_url('pending-isr-status-e')?>" class="sidebar-link">
														<i class="ti ti-clipboard"></i>
														<span class="hide-menu">ISR </span>
													</a>
												</li>
											<?php } ?>
											<?php if($getConcern == true){ ?>
												<li class="sidebar-item">
													<a href="<?php echo base_url()?>pending-concern-status" class="sidebar-link">
														<i class="ti ti-clipboard"></i>
														<span class="hide-menu">CONCERNS </span>
													</a>
												</li>
											<?php } ?>
										</ul>
									</li>
								<?php } ?>

								<?php if ($getType5 == true) { ?>
									<li class="nav-small-cap">
										<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
										<span class="hide-menu">Review </span>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
											<span class="rounded-3">
												<i class="ti ti-layout-sidebar"></i>
											</span>
											<span class="hide-menu">Review </span>
										</a>
										<ul aria-expanded="false" class="collapse first-level">
											<li class="sidebar-item">
												<a href="<?=base_url('pending-rfs-status-r')?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">RFS </span>
												</a>
											</li>
											<li class="sidebar-item">
												<a href="<?=base_url('pending-tor-status-r')?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">TOR </span>
												</a>
											</li>
											<?php if ($getIsr == true) { ?>
												<li class="sidebar-item">
													<a href="<?=base_url('pending-isr-status-r')?>" class="sidebar-link">
														<i class="ti ti-clipboard"></i>
														<span class="hide-menu">ISR </span>
													</a>
												</li>
											<?php } ?>
											
										</ul>
									</li>
								<?php } ?>
								
								<?php if ($getType6 == true) { ?>
									<li class="nav-small-cap">
										<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
										<span class="hide-menu">Verify </span>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
											<span class="rounded-3">
												<i class="ti ti-chart-pie"></i>
											</span>
											<span class="hide-menu">Verify </span>
										</a>
										<ul aria-expanded="false" class="collapse first-level">
											<li class="sidebar-item">
												<a href="<?=base_url('pending-rfs-status-v')?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">RFS </span>
												</a>
											</li>
											<li class="sidebar-item">
												<a href="<?=base_url('pending-tor-status-v')?>" class="sidebar-link">
													<i class="ti ti-clipboard"></i>
													<span class="hide-menu">TOR </span>
												</a>
											</li>
											<?php if ($getIsr == true) { ?>
												<li class="sidebar-item">
													<a href="<?=base_url('pending-isr-status-v')?>" class="sidebar-link">
														<i class="ti ti-clipboard"></i>
														<span class="hide-menu">ISR </span>
													</a>
												</li>
											<?php } ?>
											
										</ul>
									</li>
								<?php } ?>

								<li class="nav-small-cap">
									<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
									<span class="hide-menu">Logs </span>
								</li>
								<li class="sidebar-item">
									<a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
										<span class="rounded-3">
											<i class="ti ti-archive"></i>
										</span>
										<span class="hide-menu">Logs </span>
									</a>
									<ul aria-expanded="false" class="collapse first-level">
									<?php if($this->session->superadmin == 'Yes'){ ?>
		
										<li class="sidebar-item">
											<a href="<?php echo base_url()?>view-logs" class="sidebar-link">
												<i class="ti ti-receipt"></i>
												<span class="hide-menu">Activity Logs </span>
											</a>
										</li>
									<?php } ?>

									<?php if($getType4 == true){ ?>

										<li class="sidebar-item">
											<a href="<?php echo base_url()?>view-logs-r" class="sidebar-link">
												<i class="ti ti-receipt"></i>
												<span class="hide-menu">Requests Logs </span>
											</a>
										</li>
									<?php } ?>

									</ul>
								</li>

								<li class="sidebar-item">
									<a data-bs-toggle="modal" data-bs-target="#user_manual" href="#" class="sidebar-link">
									<span>
										<i class="ti ti-clipboard"></i>
									</span>
										<span class="hide-menu">User's Manual</span>
									</a>
								</li>

								<li class="sidebar-item">
									<a href="<?= base_url() ?>view-contact"  class="sidebar-link">
									<span>
										<i class="ti ti-phone"></i>
									</span>
										<span class="hide-menu">Contact Us</span>
									</a>
								</li>

								

								

							</ul>
						</nav>
						<!-- End Sidebar navigation -->
					</div>
					<!-- End Sidebar scroll-->

				</aside>
				<script src="<?= base_url() ?>assets/js/jquery/jquery.min.js"></script>
				<script src="<?= base_url(); ?>assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
				<!-- <script src="<?= base_url(); ?>assets/js/forms/sweet-alert.init.js"></script> -->
				<script src="<?= base_url(); ?>assets/js/password.js"></script>

				<div id="user_manual" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
								Online TOR & RFS User's Manual
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="rfs-tab" data-bs-toggle="tab" href="#rfs_tab" role="tab" aria-controls="rfs_tab" aria-selected="true">REQUEST FOR SET-UP (RFS)</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="tor-tab" data-bs-toggle="tab" href="#tor_tab" role="tab" aria-controls="tor_tab" aria-selected="false">TRANSACTION OVERRIDE REQUEST (TOR)</a>
									</li>
								</ul>
								<br>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="rfs_tab" role="tabpanel" aria-labelledby="rfs-tab">
										<iframe src="<?=base_url()?>uploads/profile-pic/RFS USER MANUAL.pdf" width="100%" height="600" allow="autoplay"></iframe>
									</div>
									<div class="tab-pane fade" id="tor_tab" role="tabpanel" aria-labelledby="tor-tab">
										<iframe src="<?=base_url()?>uploads/profile-pic/TOR USER MANUAL.pdf" width="100%" height="600" allow="autoplay"></iframe>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div> 

				<div id="viewRemarksModal" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									View Remarks
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body" style="height: 250px">
								<form id="viewRemarks" method="post">
									<div id="viewremarks_content"></div>

									<!-- <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
							<button type="reset" class="btn btn-danger"  value="Reset">Reset</button>  -->
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="addRemarksModal" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									Add Remarks
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body" style="height: 250px">
								<form id="addRemarks" method="post">
									<div id="addremarks_content"></div>

									<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
									<button type="reset" class="btn btn-danger" value="Reset">Reset</button>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="addRemarksModalSup" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									Add Remarks
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body" style="height: 250px">
								<form id="addRemarksSup" method="post">
									<div id="addremarks_content_a"></div>

									<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
									<button type="reset" class="btn btn-danger" value="Reset">Reset</button>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="editRemarksModal" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									Edit Remarks
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body" style="height: 250px">
								<form id="editRemarks" method="post">
									<div id="editremarks_content"></div>

									<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
									<button type="reset" class="btn btn-danger" value="Reset">Reset</button>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="editRemarksModalSup" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									Edit Remarks
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body" style="height: 250px">
								<form id="editRemarksSup" method="post">
									<div id="editremarks_content_a"></div>

									<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
									<button type="reset" class="btn btn-danger" value="Reset">Reset</button>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="ApproveConcernModal" class="modal fade">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									Concern Details
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">

								<form action="<?php echo base_url('Admin/rfsupdate') ?>" id="editRfs" method="post"
									enctype="multipart/form-data">
									<div id="approveconcern_content"></div>

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="ApproveRfsModal" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									RFS Details
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?php echo base_url('Admin/rfsupdate') ?>" id="editRfs" method="post"
									enctype="multipart/form-data">
									<div id="approverfs_content"></div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="ApproveTorModal" class="modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									TOR Details
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?php echo base_url('Admin/torupdate') ?>" id="editTor" method="post"
									enctype="multipart/form-data">
									<div id="approvetor_content"></div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="ApproveIsrModal" class="modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									ISR Details
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?php echo base_url('Admin/isrupdate') ?>" id="editTor" method="post"
									enctype="multipart/form-data">
									<div id="approveisr_content"></div>

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="ApproveRfsModalE" class="modal fade">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									RFS Details
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">

								<form id="addRemarksrfs" method="post">
									<div id="approverfs_content_e"></div>

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="ApproveTorModalE" class="modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									TOR Details
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">

								<form id="addRemarkstor" method="post">
									<div id="approvetor_content_e"></div>

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="ApproveIsrModalE" class="modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									ISR Details
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">

								<form id="addRemarksisr" method="post">
									<div id="approveisr_content_e"></div>

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div id="showApprovedModal" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									Request Status
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div id="approved_view_rfs">

								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">
									Close
								</button>
							</div>
						</div>
					</div>
				</div>

				<div id="showApprovedModalTor" class="modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									Request Status
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body" style="height: auto;">
								<div id="approved_view_tor">

								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">
									Close
								</button>
							</div>
						</div>
					</div>
				</div>

				<div id="showApprovedModalIsr" class="modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-scrollable modal-xl">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center">
								<h4 class="modal-title" id="myLargeModalLabel">
									Request Status
								</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body" style="height: auto;">
								<div id="approved_view_isr">

								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
									data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<script>
					var baseurl = "<?php echo base_url(); ?>";

					<?php if($getType4 == true){ ?>
					var originalTitle = document.title;
					var animationInterval; 
					var marqueePosition = 0;
					var stop ='';
					var updateInterval; // Declare the update interval variable
					var restartInterval = true; // Variable to control interval restart

					// Function to handle bell button click
					function handleBellButtonClick() {
						$('#resetCountButton').click(function () {
							
							// Set a flag in session storage to remember that the button was clicked
							localStorage.setItem('bellButtonClicked', 'true');

							// Pause the update interval for 2 minutes (120000 milliseconds)
							if (restartInterval) {
								clearInterval(updateInterval); // Pause the interval
								setTimeout(function () {
									startUpdateInterval(); // Restart the interval after 2 minutes
									restartInterval = true; // Set the flag to true for the next restart
								}, 600000000); // 1 minute (adjust as needed)
								restartInterval = false; // Set the flag to false to prevent multiple restarts
								$('#newAllCount').hide();
							}
							// Hide the count and stop the title animation
							$('#newAllCount').hide();
							stopTitleAnimation();

							
						});
					}

					//Function to play a ringtone
					function playRingtone() {
					    var audio = new Audio('<?=base_url()?>assets/alarm4.mp3');
					    audio.play();
					    return audio; // Return the Audio object for later use
					}

			
					function updateMenuCounts() {
						
						$.ajax({
							url: '<?= base_url('Request/getLatestRequests') ?>',
							method: 'GET',
							dataType: 'json',
							success: function(data) {
								// Update the menu item text with the latest count
								var rfs 	 = $('#rfs');
								var tor 	 = $('#tor');
								var isr 	 = $('#isr');
								var rfsCount = parseInt(data.newRequestCount.rfsCount, 10);
								var torCount = parseInt(data.newRequestCount.torCount, 10);
								var isrCount = parseInt(data.newRequestCount.isrCount, 10);
								// Check if the parsed values are valid integers, and if not, default them to 0
								if (isNaN(rfsCount)) {
									rfsCount = 0;
									
								}
								if (isNaN(torCount)) {
									torCount = 0;
									
								}
								if (isNaN(isrCount)) {
									isrCount = 0;
									
								}
								// Calculate the total count
								var totalCount = rfsCount + torCount + isrCount;
								$('#newAllCount').text(totalCount);

								if (rfsCount == 0) document.getElementById("rfs").style.display = "hidden";
								if (torCount == 0) document.getElementById("tor").style.display = "hidden";
								if (isrCount == 0) document.getElementById("isr").style.display = "hidden";

								// if(rfsCount == 0){
								// 	rfs.hide();
								// } 
								// if(torCount == 0){
								// 	tor.hide();
								// }
								// if(isrCount == 0){
								// 	isr.hide();
								// }
						
								$('#newRFSCount').text(rfsCount);
								$('#newTORCount').text(torCount);
								$('#newISRCount').text(isrCount);

								var newAllCountElement 	= $('#newAllCount');
								$('#newCount').text(newAllCountElement.text());
									

								if (totalCount === 0) {
									document.querySelector(".message-body").style.display = "none";
								}

								if (totalCount > 0) {
									newAllCountElement.show();
									handleBellButtonClick();

									if (!originalTitle.includes("Execute")) {
										// Animate the page title and show a notification
										startTitleMarquee(' New Pending Requests! ', 60000);
									} else {
										newAllCountElement.hide();
										stopTitleAnimation();

										var bellButtonClicked = localStorage.getItem('bellButtonClicked') || 'false';
										if (bellButtonClicked === 'true') {
											// If it was clicked, hide the count and stop the animation
											$('#newAllCount').hide();
											stopTitleAnimation();
										}

										if (restartInterval) {
											clearInterval(updateInterval); // Pause the interval
											setTimeout(function () {
												startUpdateInterval(); // Restart the interval after 2 minutes
												restartInterval = true; // Set the flag to true for the next restart
											}, 60000); // 1 minute
											restartInterval = false; // Set the flag to false to prevent multiple restarts
											$('#newAllCount').hide();
										}
										

									}
								} else {
									
									newAllCountElement.hide();
									stopTitleAnimation();
								}
							},
							error: function(error) {
								console.error('Error fetching latest requests: ' + JSON.stringify(error));
							}
						});
					}

					// Function to animate the page title and show a notification
					function startTitleMarquee(message, duration) {
						clearInterval(animationInterval);

						// var audio = playRingtone();

						var titleLength = message.length;
						var timer = 0;

						animationInterval = setInterval(function () {
							var animatedTitle = message.substring(marqueePosition, titleLength) + message.substring(0, marqueePosition);
							document.title = animatedTitle;

							marqueePosition = (marqueePosition + 1) % titleLength;
							timer += 100;

							if (timer >= duration) {
								clearInterval(animationInterval);
								document.title = originalTitle; // Restore the original title
								// audio.pause(); // Pause the ringtone when the animation stops
								// audio.currentTime = 0; // Reset the playback position to the beginning
								console.log('Animation executed.'); // Log the animation execution
							}
						}, 500); // Adjust the animation speed as needed (e.g., 500 milliseconds)
					}

					// Function to stop the title animation
					function stopTitleAnimation() {
						clearInterval(animationInterval);
						document.title = originalTitle; // Restore the original title
					}

					// Function to start the update interval
					function startUpdateInterval() {
						updateMenuCounts();
						updateInterval = setInterval(updateMenuCounts, 50000000);
					}

					// Start the initial update interval
					startUpdateInterval();
				<?php } ?>

				<?php if($getType2 == true){ ?>
					var originalTitle = document.title;
					var animationInterval; 
					var marqueePosition = 0;
					var stop ='';
					var updateInterval; // Declare the update interval variable
					var restartInterval = true; // Variable to control interval restart
					let toastCounter = 0;
					let notificationInterval;
					// Function to handle bell button click
					function handleBellButtonClick() {
						$('#resetCountButtonReq').click(function () {
							
							// Set a flag in session storage to remember that the button was clicked
							localStorage.setItem('bellButtonClicked', 'true');

							// Pause the update interval for 2 minutes (120000 milliseconds)
							if (restartInterval) {
								clearInterval(updateInterval); // Pause the interval
								setTimeout(function () {
									startUpdateInterval(); // Restart the interval after 2 minutes
									restartInterval = true; // Set the flag to true for the next restart
								}, 600000000); // 1 minute (adjust as needed)
								restartInterval = false; // Set the flag to false to prevent multiple restarts
								$('#newAllCountReq').hide();
							}
							// Hide the count and stop the title animation
							$('#newAllCountReq').hide();
							stopTitleAnimation();

							
						});
					}

					// Function to play a ringtone
					// function playRingtone() {
					//     var audio = new Audio('<?=base_url()?>assets/alarm4.mp3');
					//     audio.play();
					//     return audio; // Return the Audio object for later use
					// }

			
					function updateMenuCounts() {
						$.ajax({
							url: '<?= base_url('Request/getLatestRequestsRemarks') ?>',
							method: 'GET',
							dataType: 'json',
							success: function(data) {
								var rfsCount = parseInt(data.newRequestCount.rfsCount, 10) || 0;
								var torCount = parseInt(data.newRequestCount.torCount, 10) || 0;
								var isrCount = parseInt(data.newRequestCount.isrCount, 10) || 0;
								var reqNumbers = data.newRequestCount.req_numbers || [];
								var totalCount = rfsCount + torCount + isrCount;

								$('#newAllCountReq').text(totalCount);
								$('#newRFSCountReq').text(rfsCount);
								$('#newTORCountReq').text(torCount);
								$('#newISRCountReq').text(isrCount);

								if (totalCount > 0) {
									$('#newAllCountReq').show();

									if (toastCounter < 100) {
										var requestList = reqNumbers.join(', ');
										var Toast = Swal.mixin({
											toast: true,
											position: 'top',
											showConfirmButton: false,
											timer: 60000,
											timerProgressBar: true,
											customClass: {
												container: 'custom-toast',
											},
										});

										Toast.fire({
											icon: 'info',
											title: 'You have ' + totalCount + ' new request remarks: ' + requestList
										}).then((result) => {
											if (result.isConfirmed || result.dismiss === Swal.DismissReason.close) {
												clearInterval(notificationInterval);
												toastCounter = 100;
											}
										});

										toastCounter++;
									}
								} else {
									$('#newAllCountReq').hide();
								}
							},
							error: function(error) {
								console.error('Error fetching latest requests: ' + JSON.stringify(error));
							}
						});
					}


					// Function to animate the page title and show a notification
					function startTitleMarquee(message, duration) {
						clearInterval(animationInterval);

						// var audio = playRingtone();

						var titleLength = message.length;
						var timer = 0;

						animationInterval = setInterval(function () {
							var animatedTitle = message.substring(marqueePosition, titleLength) + message.substring(0, marqueePosition);
							document.title = animatedTitle;

							marqueePosition = (marqueePosition + 1) % titleLength;
							timer += 100;

							if (timer >= duration) {
								clearInterval(animationInterval);
								document.title = originalTitle; // Restore the original title
								// audio.pause(); // Pause the ringtone when the animation stops
								// audio.currentTime = 0; // Reset the playback position to the beginning
								console.log('Animation executed.'); // Log the animation execution
							}
						}, 500); // Adjust the animation speed as needed (e.g., 500 milliseconds)
					}

					// Function to stop the title animation
					function stopTitleAnimation() {
						clearInterval(animationInterval);
						document.title = originalTitle; // Restore the original title
					}

					// Function to start the update interval
					function startUpdateInterval() {
						updateMenuCounts();
						updateInterval = setInterval(updateMenuCounts, 50000000);
					}

					// Start the initial update interval
					startUpdateInterval();
					notificationInterval = setInterval(updateMenuCounts, 60000);
				<?php } ?>
				</script>
