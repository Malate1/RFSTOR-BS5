<link rel="stylesheet" href="<?=base_url()?>assets/libs/sweetalert2/dist/sweetalert2.min.css" />
<style>
	.birthday-gift {
        position: relative;
    }

    .birthday-gift:before {
        content: "";
        position: absolute;
        width: 170px;
        height: 20px;
        border-radius: 50%;
        background-color: rgba(0,0,0,0.4);
        top: 130px;
        left: -10px;
    }

    .gift {
        position: relative;
        width: 150px;
        height: 100px;
        background-color: #e9c46a;
        border-radius: 10px 10px 0 0;
        box-shadow: inset 0 10px rgba(0,0,0,0.3);
        margin-top: 30px;
    }

    .candle {
        position: absolute;
        width: 10px;
        height: 50px;
        background-color: #ffffff;
        left: 70px;
        top: -40px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        z-index: 2; /* Ensure the candle is above the gift */
    }

    .flame {
        position: absolute;
        width: 10px;
        height: 20px;
        background-color: #ffcc00;
        border-radius: 50% 50% 50% 50%;
        top: -20px;
        left: -2px;
        animation: flicker 0.5s infinite alternate;
    }

    .wishes {
        position: absolute;
        color: #333;
        font-size: 25px;
        font-family: 'Brush Script MT';
        text-align: center;
        z-index: 3; /* Ensure the wishes are above the candle */
        left: 5px;
        transform: translateY(-150px); /* Adjust to position above the candle */
        transition: transform 0.5s;
        animation: showWishes 0.5s forwards 0.3s;
        
    }

    .hidden {
        display: none;
    }


    @keyframes showWishes {
        from { transform: translateY(0); }
        to { transform: translateY(-100px); }
    }

    @keyframes showSparkles {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes fire3 {
        100% { transform: translateX(20px) translateY(-93px); opacity: 1; }
    }

    @keyframes fire2 {
        100% { transform: translateX(-5px) translateY(-90px); opacity: 1; }
    }

    @keyframes fire {
        100% { transform: translateX(-25px) translateY(-95px); opacity: 1; }
    }

    @keyframes color {
        from { background-color: #d00000; }
        to { background-color: #0081a7; }
    }

    @keyframes color2 {
        from { background-color: #8cff00; }
        to { background-color: #1d2d44; }
    }

    @keyframes flicker {
        from { transform: scale(1); }
        to { transform: scale(1.2); }
    }

    .bday{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 180px;
      margin-top: 50px;
    }
</style>
<div class="body-wrapper">
	<div class="container-fluid">
		<div class="row">

		<?php 
			$currentDate = date("m-d");
			$birthday = "09-19";
			@$birthday1 = $this->session->bday;
			//var_dump($birthday1);
			// if($birthday == $currentDate AND $this->session->bday != "" AND $this->session->user_id == '1'){ 
			if(@$birthday1 == $currentDate){ 
				// var_dump($birthday1);
			?>
			<br>


				<div class="bday">
				<div class="birthday-gift">
					<div class="gift">
						<div class="candle">
							<div class="flame"></div>
						</div>
						<div class="wishes">Happy Birthday! <?= $this->session->fname?></div>
						
					</div>
				</div>
			</div>
			
		<?php } ?>
		<br>
			
		<div class="col-lg-12 d-flex align-items-stretch">
			<div class="card w-100 border-top border-primary">
				
				<div class="card-body">
					<div class="mb-4">
						<h4 class="card-title mb-0"><i class="fa fa-question-circle-o" aria-hidden="true"></i> <span>Frequently Asked Questions:</span></h4>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											What is REQUEST FOR SETUP (RFS)?
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body" style="padding: 10px;">
											<p>This module is intended only for those who have requested set-up.<br>
												<i style="color: red;">Kini nga module gituyo lamang alang niadtong nangayo og set-up.</i><br>
												(ex. Set up new Item/Account/Customer/Supplier).
											</p>
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											What is TRANSACTION OVERRIDE (TOR)?
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body" style="padding: 10px;">
											<p>This module is intended only for those with adjustments, reprints, and a transaction to be canceled.<br>
												<i style="color: red;">Kini nga module gituyo lamang alang niadtong adunay mga kausaban, reprints, ug usa ka transaksyon nga kanselahon.</i><br>
												(ex. Requesting to cancel order slip)
											</p>
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											What is INFORMATION SYSTEM REQUEST (ISR)?
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body" style="padding: 10px;">
											<p>This module is intended only for those who request a New System Module/System Enhancement.<br>
												<i style="color: red;">Kini nga module gituyo lamang alang niadtong nangayo og Bag-ong System Module/System Enhancement.</i><br>
												(ex. To request an Inhouse System for Meat Processing)
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="accordion" id="accordionExample2">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											Why can't I access/locate the request?
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
										<div class="accordion-body" style="padding: 10px;">
											<p>Check first the tagged <b>business unit, type of request, and user group</b> of the request through REQUEST LOGS, then check if those tagged items match your access.<br> If it doesn't match, call <b>1847</b> to update your access.</p>
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											When to call or contact IT SysDev or MIS to execute the request?
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
										<div class="accordion-body" style="padding: 10px;">
											<p>You can <b>only</b> call the executor once the request is already approved and verified or if it is an urgent matter.</p>
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="headingSix">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
										What is my default username and password?
										</button>
									</h2>
									<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
										<div class="accordion-body" style="padding: 10px;">
										<p>The default username is your <b>Employee No.</b> (you can locate it on your HRMS profile) then the default password is <b>Torrfs2022</b></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<?php if($getType1 == true){ ?>
			<div class="col-lg-4 col-md-6">
				<a href="<?= base_url('view-users') ?>" class="text-decoration-none">
					<div class="card border-start border-primary">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<span class="text-primary display-6">
										<i class="ti ti-users"></i>
									</span>
								</div>
								<div class="ms-auto">
									<h4 class="card-title fs-7 counter">
										<?php echo $this->db->where('status', '1')->count_all_results('users2'); ?>
									</h4>
									<p class="card-subtitle text-primary">Active Users</p>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>


			<div class="col-lg-4 col-md-6">
				<a href="<?= base_url('view-bu') ?>" class="text-decoration-none">
					<div class="card border-start border-primary">
						<div class="card-body">
						<div class="d-flex  align-items-center">
							<div>
							<span class="text-primary display-6">
								<i class="ti ti-map"></i>
							</span>
							</div>
							<div class="ms-auto">
							<h4 class="card-title fs-7 counter"><?php echo $this->db->where('status', 'active')->count_all_results('business_unit');?> </h4>
							<p class="card-subtitle text-primary">Business Units </p>
							</div>
						</div>
						</div>
					</div>
				</a>
			</div>

			<div class="col-lg-4 col-md-6">
				<a href="<?= base_url('view-bu') ?>" class="text-decoration-none">
					<div class="card border-start border-primary">
						<div class="card-body">
						<div class="d-flex  align-items-center">
							<div>
							<span class="text-primary display-6">
								<i class="ti ti-building"></i>
							</span>
							</div>
							<div class="ms-auto">
							<h4 class="card-title fs-7 counter"><?php echo $this->db->count_all('company') ;?> </h4>
							<p class="card-subtitle text-primary">Companies </p>
							</div>
						</div>
						</div>
					</div>
				</a>
			</div>
		<?php } ?>
        <br>

		<?php if($getType2 == true){ ?>
			<div class="col-lg-4">
				<div class="card border-top border-primary">
					<div class="card-body">
					<h4 class="card-title">Request </h4>
					<div id="chart-pie-donut"></div>
					</div>
				</div>
			</div>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					// Dynamically fetch data from PHP variables
					var rfs = <?php  
								foreach($rfs1 as $r) {
									echo($r->rfs);
								}
							?>;
					var tor = <?php  
								foreach($tor1 as $t) {
									echo($t->tor);
								}
							?>;
					var isr = <?php  
								foreach($isr1 as $i) {
									echo($i->isr);
								}
							?>;
							
					// Define options for ApexCharts
					var options_donut = {
						series: [rfs, tor, isr],  // Dynamic data for the chart
						chart: {
							fontFamily: "inherit",
							type: "donut",
							width: 350,
							events: {
								dataPointSelection: function(event, chartContext, config) {
									// Define routes based on clicked label index
									if (config.dataPointIndex === 0) {
										window.location.href = "<?= base_url('view-rfs') ?>"; 
									} else if (config.dataPointIndex === 1) {
										window.location.href = "<?= base_url('view-tor') ?>"; 
									} else if (config.dataPointIndex === 2) {
										window.location.href = "<?= base_url('view-isr') ?>"; 
									}
								}
							}
						},
						colors: [
							"var(--bs-primary)",
							"var(--bs-secondary)",
							"var(--bs-gray-500)",
							
						],
						labels: ["RFS", "TOR", "ISR"],
						dataLabels: {
							enabled: true,
							formatter: function (val, opts) {
								return val.toFixed(2) + "%"; // Formats the percentages
							},
							style: {
								fontSize: '8px', // Adjust this to change the percentage font size
								fontFamily: 'inherit',
								// fontWeight: 'bold',
								
							}
						},
						responsive: [
							{
							breakpoint: 480,
							options: {
								chart: {
								width: 200,
								},
								legend: {
								position: "bottom",
								},
							},
							},
						],
						legend: {
							labels: {
							colors: ["#a1aab2"],
							}
						},
					};

					// Render the chart
					var chart_pie_donut = new ApexCharts(
					document.querySelector("#chart-pie-donut"),
					options_donut
					);
					chart_pie_donut.render();
				});
			</script>
		<?php } ?>

		<?php if($getType3 == true){ ?>
			<div class="col-lg-4">
				<div class="card border-top border-primary">
					<div class="card-body">
					<h4 class="card-title">Approve </h4>
					<div id="chart-pie-donut-approve"></div>
					</div>
				</div>
			</div>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					// Dynamically fetch data from PHP variables
					var rfs = <?php  
								foreach($rfsA as $r) {
									echo($r->rfsA);
								}
							?>;
					var tor = <?php  
								foreach($torA as $t) {
									echo($t->torA);
								}
							?>;
					var isr = <?php  
								foreach($isrA as $i) {
									echo($i->isrA);
								}
							?>;
							
					// Define options for ApexCharts
					var options_donut = {
						series: [rfs, tor, isr],  // Dynamic data for the chart
						chart: {
							fontFamily: "inherit",
							type: "donut",
							width: 350,
							events: {
							dataPointSelection: function(event, chartContext, config) {
								// Define routes based on clicked label index
								if (config.dataPointIndex === 0) {
									window.location.href = "<?= base_url('pending-rfs-status') ?>"; 
								} else if (config.dataPointIndex === 1) {
									window.location.href = "<?= base_url('pending-tor-status') ?>"; 
								} else if (config.dataPointIndex === 2) {
									window.location.href = "<?= base_url('pending-isr-status') ?>"; 
								}
							}
							}
						},
						
						colors: [
							"var(--bs-primary)",
							"var(--bs-secondary)",
							"var(--bs-gray-500)",
							
						],
						labels: ["RFS", "TOR", "ISR"],
						dataLabels: {
							enabled: true,
							formatter: function (val, opts) {
								return val.toFixed(2) + "%"; // Formats the percentages
							},
							style: {
								fontSize: '8px', // Adjust this to change the percentage font size
								fontFamily: 'inherit',
								// fontWeight: 'bold',
								
							}
						},
						responsive: [
							{
							breakpoint: 480,
							options: {
								chart: {
								width: 200,
								},
								legend: {
								position: "bottom",
								},
							},
							},
						],
						legend: {
							labels: {
							colors: ["#a1aab2"],
							},
						},
					};

					// Render the chart
					var chart_pie_donut = new ApexCharts(
					document.querySelector("#chart-pie-donut-approve"),
					options_donut
					);
					chart_pie_donut.render();
				});
			</script>
		<?php } ?>

		<?php if($getType4 == true){ ?>
			<div class="col-lg-4">
				<div class="card border-top border-primary">
					<div class="card-body">
					<h4 class="card-title">Execute </h4>
					<div id="chart-pie-donut-execute"></div>
					</div>
				</div>
			</div>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					// Dynamically fetch data from PHP variables
					var rfs = <?php  
								foreach($rfs as $r) {
									echo($r->rfs);
								}
							?>;
					var tor = <?php  
								foreach($tor as $t) {
									echo($t->tor);
								}
							?>;
					var isr = <?php  
								foreach($isr as $i) {
									echo($i->isr);
								}
							?>;
							
					// Define options for ApexCharts
					var options_donut = {
						series: [rfs, tor, isr],  // Dynamic data for the chart
						chart: {
							fontFamily: "inherit",
							type: "donut",
							width: 350,
							events: {
							dataPointSelection: function(event, chartContext, config) {
								// Define routes based on clicked label index
								if (config.dataPointIndex === 0) {
									window.location.href = "<?= base_url('pending-rfs-status-e') ?>"; 
								} else if (config.dataPointIndex === 1) {
									window.location.href = "<?= base_url('pending-tor-status-e') ?>"; 
								} else if (config.dataPointIndex === 2) {
									window.location.href = "<?= base_url('pending-isr-status-e') ?>"; 
								}
							}
							}
						},
						
						colors: [
							"var(--bs-primary)",
							"var(--bs-secondary)",
							"var(--bs-gray-500)",
							
						],
						labels: ["RFS", "TOR", "ISR"],
						dataLabels: {
							enabled: true,
							formatter: function (val, opts) {
								return val.toFixed(2) + "%"; // Formats the percentages
							},
							style: {
								fontSize: '8px', // Adjust this to change the percentage font size
								fontFamily: 'inherit',
								// fontWeight: 'bold',
								
							}
						},
						responsive: [
							{
							breakpoint: 480,
							options: {
								chart: {
								width: 200,
								},
								legend: {
								position: "bottom",
								},
							},
							},
						],
						legend: {
							labels: {
							colors: ["#a1aab2"],
							},
						},
					};

					// Render the chart
					var chart_pie_donut = new ApexCharts(
					document.querySelector("#chart-pie-donut-execute"),
					options_donut
					);
					chart_pie_donut.render();
				});
			</script>
		<?php } ?>
		
		<?php if($getType1 == true){ ?>
			
			<div class="card w-100 border-top border-primary">
				<div class="card-body">
					<h4 class="card-title">Number of Requests per Month </h4>

					<div style="text-align: center; margin-bottom: 10px;">
					<select id="yearFilter" class="form-control" style="width: auto; display: inline-block;">
						<option value="">Select Year</option>
					</select>

					<script>
						// Get the current year
						const currentYear = new Date().getFullYear();
						const selectYear = document.getElementById('yearFilter');
						
						// Loop through the years from 2023 to the current year
						for (let year = 2023; year <= currentYear; year++) {
							const option = document.createElement('option');
							option.value = year;
							option.textContent = year;
							selectYear.appendChild(option);
						}
					</script>

				</div>
					<div id="chart-line-with-data-label" class="mx-n3"></div>
				</div>
			</div>

			<script>
				document.addEventListener('DOMContentLoaded', function () {
					// ApexCharts chart options
					var options = {
						chart: {
							type: 'line',
							height: 320,
							fontFamily: "inherit",
							toolbar: {
								show: true
							},
						},
						series: [],  // Data will be set dynamically
						xaxis: {
							categories: []  // Months (January, February, etc.)
						},
						colors: ["var(--bs-primary)",
								"var(--bs-secondary)",
								"var(--bs-gray-500)",
							],
						stroke: {
							curve: 'smooth',
							width: 2
						},
						markers: {
							size: 4
						},
						legend: {
							position: 'top',
							horizontalAlign: 'left',
							labels: {
								colors: ["#a1aab2"]
							}
						},
						responsive: [{
							breakpoint: 600,
							options: {
								chart: {
									width: '100%'
								},
								legend: {
									position: 'bottom'
								}
							}
						}]
					};

					// Create the ApexCharts instance
					var areaChart = new ApexCharts(document.querySelector("#chart-line-with-data-label"), options);
					areaChart.render();

					// Function to fetch and update data based on selected year
					function fetchDataCountByMonth(year) {
						const apiUrl = `<?= site_url('Admin/getDataCountByMonth'); ?>?year=${year}`;
						fetch(apiUrl)
							.then(response => response.json())
							.then(data => {
								const labels = Object.keys(data);  // Months
								const dataPointsRfs = [];
								const dataPointsTor = [];
								const dataPointsIsr = [];

								labels.forEach(month => {
									dataPointsRfs.push(data[month].rfs_count);
									dataPointsTor.push(data[month].tor_count);
									dataPointsIsr.push(data[month].isr_count);
								});

								// Update the chart with new data
								areaChart.updateOptions({
									xaxis: {
										categories: labels  // Update x-axis labels with months
									},
									series: [
										{
											name: 'RFS',
											data: dataPointsRfs
										},
										{
											name: 'TOR',
											data: dataPointsTor
										},
										{
											name: 'ISR',
											data: dataPointsIsr
										}
									]
								});
							})
							.catch(error => {
								console.error('Error fetching data:', error);
							});
					}

					// Fetch data initially (without filtering by year)
					fetchDataCountByMonth('');

					// Update chart when year is changed
					document.getElementById('yearFilter').addEventListener('change', function () {
						const selectedYear = this.value;
						fetchDataCountByMonth(selectedYear);
					});
				});
			</script>

			<div class="card w-100 border-top border-primary">
				<div class="card-body">
					<h4 class="card-title">Number of Pending Requests per Group </h4>

					
					<div id="chart-line-with-data-label-group" class="mx-n3"></div>
				</div>
			</div>

			<script>
				document.addEventListener('DOMContentLoaded', function () {
					// ApexCharts options
					var options = {
						chart: {
							type: 'line',
							height: 320,
							fontFamily: "inherit",
							toolbar: {
								show: true
							}
						},
						series: [],  // Will be populated with fetched data
						xaxis: {
							categories: []  // Will be populated with group names
							
						},

			
						colors: ["var(--bs-primary)",
								"var(--bs-secondary)"
							],
						stroke: {
							curve: 'smooth',
							width: 2
						},
						markers: {
							size: 4
						},
						legend: {
							position: 'top',
							horizontalAlign: 'left'
						},
						
						responsive: [{
							breakpoint: 600,
							options: {
								chart: {
									width: '100%'
								},
								legend: {
									position: 'bottom'
								}
							}
						}]
					};
					

					// Create the ApexCharts instance
					var areaChart = new ApexCharts(document.querySelector("#chart-line-with-data-label-group"), options);
					areaChart.render();

					// Function to fetch and update data
					function fetchDataCountByGroup() {
						const apiUrl = '<?= site_url('Admin/getPendingCountByGroup'); ?>';

						// Fetch data from backend
						fetch(apiUrl)
							.then(response => response.json())
							.then(data => {
								// Extract labels and data points
								const labels = Object.keys(data);
								const dataPointsRfs = [];
								const dataPointsTor = [];

								labels.forEach(group_name => {
									dataPointsRfs.push(data[group_name].rfs_count);
									dataPointsTor.push(data[group_name].tor_count);
								});
								console.log(labels);
								// Update chart with new data
								areaChart.updateOptions({
									xaxis: {
										categories: labels, // The group names
										labels: {
											rotate: -45, // Rotate the labels to avoid overlap
											
										},
										tickPlacement: 'on'
										
									},
									series: [
										{
											name: 'RFS',
											data: dataPointsRfs
										},
										{
											name: 'TOR',
											data: dataPointsTor
										}
									]
								});
							})
							.catch(error => {
								console.error('Error fetching data:', error);
							});
					}

					// Fetch data initially
					fetchDataCountByGroup();
				});
			</script>
				
		<?php } ?>		
				
	</div>
</div>




<script type="text/javascript">
	$(document).ready(function() {
		$('.counter').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 5000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
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

<script src="<?=base_url()?>assets/libs/prismjs/prism.js"></script>
<script src="<?=base_url()?>assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?=base_url()?>assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<!-- <script src="<?=base_url();?>assets/js/apex-chart/apex.pie.init.js"></script> -->
<script src="<?=base_url()?>assets/js/confetti.min.js"></script>
<script type="text/javascript">

    function swal_message1(msg_type,msg){
        var Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
          });

        Toast.fire({
            icon: msg_type,
            title: msg
        })
    }
<?php 
if ($this->session->flashdata('SUCCESSMSG')) {  
    $hour = date("H"); // Get the current hour in 24-hour format
    $name = $this->session->name;

    if ($hour >= 5 && $hour < 12) {
        $greeting = 'Good morning, ';
    } elseif ($hour >= 12 && $hour < 17) {
        $greeting = 'Good afternoon, ';
    } else {
        $greeting = 'Good evening, ';
    }
    
    echo "swal_message1('success','$greeting$name')";
} 
?>

<?php 
    $currentDate = date("m-d");
    $birthday = "09-19";
    @$birthday1 = $this->session->bday;
    //var_dump($birthday1);
    // if($birthday == $currentDate AND $this->session->bday != "" AND $this->session->user_id == '1'){  
    if(@$birthday1 == $currentDate){  ?>
        //var_dump($birthday1);
    
    const duration = 15 * 1000,
      animationEnd = Date.now() + duration,
      defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

    function randomInRange(min, max) {
      return Math.random() * (max - min) + min;
    }

    const interval = setInterval(function() {
      const timeLeft = animationEnd - Date.now();

      if (timeLeft <= 0) {
        return clearInterval(interval);
      }

      const particleCount = 50 * (timeLeft / duration);

      // since particles fall down, start a bit higher than random
      confetti(
        Object.assign({}, defaults, {
          particleCount,
          origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 },
        })
      );
      confetti(
        Object.assign({}, defaults, {
          particleCount,
          origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 },
        })
      );
    }, 250);

    //Hide the cake after the animation ends
    setTimeout(function() {
        document.querySelector('.bday').classList.add('hidden');
    }, duration);
<?php } ?>


</script>
</body>

</html>
