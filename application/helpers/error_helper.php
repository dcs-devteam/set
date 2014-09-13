<?php
/**
 * Generate 403 error.
 */
	function show_403_error() {
		show_error('You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.',403,'403 Forbidden');
	}
/* End of file error_helper.php */
/* Location: ./application/helpers/error_helper.php */