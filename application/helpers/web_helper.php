<?php

	function user_access()
	{
		$ci	= get_instance();
		if(!$ci->session->userdata('nim'))
		{
			redirect('registration');
		}
	}