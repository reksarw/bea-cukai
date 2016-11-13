<?php
	function succ_msg($value) {
		$str = '<div class="alert alert-success" role="alert">' .$value .'</div>';

		return $str;
	}

	function err_msg($value) {
		$str = '<div class="alert alert-danger" role="alert">' .$value .'</div>';

		return $str;
	}
?>