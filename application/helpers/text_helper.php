<?php
	/**
	*	Format a timestamp string into the form MM D YYY HH:MM AM/PM
	*
	*	@param	string 	$str	timestamp
	*
	*	@return	string	formatted timestamp
	*/
	function format_timestamp($str) {
		return date('M j Y g:i A',strtotime($str));
	}

	/**
	*	Format a date string into the form MM D YYY
	*
	*	@param	string 	$str	timestamp
	*
	*	@return	string	formatted timestamp
	*/
	function format_date($str) {
		return date('M j Y',strtotime($str));
	}



/* End of file text_helper.php */
/* Location: ./application/helpers/text_helper.php */