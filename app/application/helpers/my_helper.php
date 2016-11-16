<?php
	function succ_msg($value) {
		$str = '<div class="alert alert-success" role="alert">' .$value .'</div>';

		return $str;
	}

	function err_msg($value) {
		$str = '<div class="alert alert-danger" role="alert">' .$value .'</div>';

		return $str;
	}

	// MODAL
	function show_my_modal($content='', $title='', $id='', $data='') {
		$_ci = &get_instance();

		if ($content != '') {
			$view_content = $_ci->load->view($content, $data, TRUE);

			return '<div class="modal fade" id="' .$id .'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="modal-dialog">
					        <div class="modal-content">
					            <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                <h4 class="modal-title" id="myModalLabel">' .$title .'</h4>
					            </div>
					            <div class="modal-body">
					                ' .$view_content .'
					            </div>
					            <div class="clearfix">
					            </div>
					            <br>
					        </div>
					    </div>
					</div>';
		}
	}

	function generate_KB($format='') {
		$_ci = &get_instance();
		
		$_ci->load->model('Builder');

		$last_id = $_ci->Builder->countData('barang_masuk')+1;

		$kode = $format .sprintf("%04d", $last_id);

		return $kode;
	}

?>