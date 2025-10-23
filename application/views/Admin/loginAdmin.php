<!DOCTYPE html>
 <html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="horizontal">

 <head>
<!-- Original URL: https://bootstrapdemos.adminmart.com/modernize/dist/horizontal/authentication-login2.html
Date Downloaded: 12/09/2024 10:49:41 am !-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <!-- Required meta tags -->
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <!-- Favicon icon-->
   <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets/images/logos/favicon.png" />

   <!-- Core Css -->
   <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css" />
	 <link rel="stylesheet" href="<?=base_url()?>assets/libs/sweetalert2/dist/sweetalert2.min.css" />

   <title>Online TOR & RFS </title>
 </head>

 <body>
   <!-- Preloader -->
   <div class="preloader">
     <img src="<?=base_url()?>assets/images/logos/dark.png" alt="loader" class="lds-ripple img-fluid" />
   </div>
   <div id="main-wrapper" class="auth-customizer-none">
     <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
       <div class="d-flex align-items-center justify-content-center w-100">
         <div class="row justify-content-center w-100">
           <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
             <div class="card mb-0">
               <div class="card-body">
                 <a href="index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                   <!-- <img src="<?=base_url()?>assets/images/logos/dark.png" width="180" class="dark-logo" alt="Logo-Dark" /> -->
                   <img src="<?=base_url()?>assets/images/logos/dark.png" width="180" class="light-logo" alt="Logo-light" />
                 </a>
                
                 <form action="<?php echo base_url(); ?>Login/logAdmin" method="post"> 
                   

									 <div class="form-floating mb-3">
                       <input type="text" class="form-control" placeholder="Username" id="username"  name="username"/>
                       <label>
                         <i class="ti ti-user me-2 fs-4"></i>Username
                       </label>
                     </div>
                   
									 <div class="form-floating mb-3">
                       <input type="password" class="form-control" placeholder="Password" id="password" name="password"/>
                       <label>
                         <i class="ti ti-lock me-2 fs-4"></i>Password
                       </label>
                     </div>
                   <div class="d-flex align-items-center justify-content-between mb-4">
                     <div class="form-check">
										 <input class="form-check-input text-primary" type="checkbox" onclick="Toggle()" />
                       <label class="form-check-label text-dark fs-3" for="flexCheckChecked">
											 Show Password
                       </label>
                       
                     </div>

										 <br>
                    <div class="col-xs-8">    
                        <select style="border-radius: 4px; padding: 6px; width: 200px" name="form" class="form-select" onchange="location = this.value;">
                          <option value="">Switch Location</option>
                          <option value="<?php echo base_url() ?>Login/logAdmin">Bohol</option>
                          <option value="<?php echo base_url() ?>Login/logCebu">Cebu</option>
                          
                        </select>                     
                    </div>
                     <!-- <a class="text-primary fw-medium" href="authentication-forgot-password.html">Forgot
                      Password ? </a> -->
                   </div>

                   <div style="display: none;">
                    <label>Upload QR code image:</label>
                    <input type="file" accept="image/*" id="qr_image" onchange="decodeQrCode()">
                    <input type="hidden" name="qr_data" id="qr_data">
                </div>
                  <!-- <br> -->
                   <button type="submit"  class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In </button>
                   <div class="d-flex align-items-center justify-content-center">
                     
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     
   

     
   </div>

   <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.js"></script>
  <script>
    function decodeQrCode() {
        const file = document.getElementById('qr_image').files[0];
        const reader = new FileReader();

        reader.onload = function(event) {
            const img = new Image();
            img.src = event.target.result;
            img.onload = function() {
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.width = img.width;
                canvas.height = img.height;
                context.drawImage(img, 0, 0);
                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);

                // Use jsQR to decode QR code from the image
                const code = jsQR(imageData.data, canvas.width, canvas.height);
                if (code) {
                    document.getElementById('qr_data').value = code.data;
                    //alert("QR Code decoded: " + code.data);
                } else {
                    //alert("No QR code found.");
                }
            };
        };

        reader.readAsDataURL(file);
    }
  </script>
   <script> 
			// Change the type of input to password or text 
			function Toggle() { 
					var temp = document.getElementById("password"); 
					if (temp.type === "password") { 
							temp.type = "text"; 
					} 
					else { 
							temp.type = "password"; 
					} 
			} 
	</script> 
   <!-- Import Js Files -->
   <script src="<?=base_url()?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="<?=base_url()?>assets/libs/simplebar/dist/simplebar.min.js"></script>
   <script src="<?=base_url()?>assets/js/theme/app.horizontal.init.js"></script>
   <script src="<?=base_url()?>assets/js/theme/theme.js"></script>
   <script src="<?=base_url()?>assets/js/theme/app.min.js"></script>

	 <script src="<?=base_url();?>assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?=base_url();?>assets/js/forms/sweet-alert.init.js"></script>
<script src="<?=base_url();?>assets/js/plugins/toastr-init.js"></script>


	 <script type="text/javascript">

        function swal_message1(msg_type,msg){
            var Toast = Swal.mixin({
                toast: false,
                position: 'top-center',
                showConfirmButton: true,
                // timer: 5000,
                // timerProgressBar: false,
              });

            Toast.fire({
                icon: msg_type,
                title: 'Oops!',
                text: msg
            })
        }
        <?php 
        if ($this->session->flashdata('errormsg')) {  
            
            $msg = 'Username or password is invalid';
            
            
            echo "swal_message1('error','$msg')";
        } 
        ?>

        <?php 
        if ($this->session->flashdata('errormsg1')) {  
            
            $msg = 'This account is deactivated';
            
            
            echo "swal_message1('error','$msg')";
        } 
        ?>

			
    </script>

<script>
    <?php if ($this->session->flashdata('message')): ?>
        var message = "<?php echo $this->session->flashdata('message'); ?>";
        var messageType = "<?php echo $this->session->flashdata('message_type'); ?>";
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            icon: messageType,
            title: message,
        })
    <?php endif; ?>
</script> 


   
  
 </body>

 </html>
