<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/data/morris-data.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

<!-- DataTable -->
<script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

<script>
$(document).ready(function() {
    $('#list-data').DataTable({
        responsive: true
    });
});

$(document).on("click", ".edit-perusahaan", function() {
	var id = $(this).attr("data-id");
	
	$.ajax({
		method: "POST",
		url: "<?php echo base_url('Master/edit_perusahaan'); ?>",
		data: "id=" +id
	})
	.done(function(data) {
		var result = jQuery.parseJSON(data);
		console.log(result);

		$('#mymodal').html(result.modal);
		$('#'+result.id).modal('show');
	})
})

$(document).on("click", ".edit-jenis-layanan", function() {
	var id = $(this).attr("data-id");
	
	$.ajax({
		method: "POST",
		url: "<?php echo base_url('Master/edit_jenisLayanan'); ?>",
		data: "id=" +id
	})
	.done(function(data) {
		var result = jQuery.parseJSON(data);
		console.log(result);

		$('#mymodal').html(result.modal);
		$('#'+result.id).modal('show');
	})
})

</script>