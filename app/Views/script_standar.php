<script>
	var url_base = 'http://localhost/contabilidad/public/';
</script>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url();?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url();?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url();?>/js/sb-admin-2.min.js"></script>

<?php if ($graficas):?>

	<!-- Page level plugins -->
	<script src="<?php echo base_url();?>/vendor/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?php echo base_url();?>/js/demo/chart-area-demo.js"></script>
	<script src="<?php echo base_url();?>/js/demo/chart-pie-demo.js"></script>

<?php endif ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- script propio de la pagina -->
<script src="<?php echo base_url();?>/js/<?php echo $archivo_js?>"></script>

</body>

</html>