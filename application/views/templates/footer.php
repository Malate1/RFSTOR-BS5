<div class="float-right d-flex justify-content-end">
<a class="btn btn-primary text-right mx-2 my-2" href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
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
<script>
	$(window).on("scroll", function(e) {
		if ($(this).scrollTop() > -10) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$("#back-to-top").on("click", function(e) {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	}); 
</script>
</body>
</html>
