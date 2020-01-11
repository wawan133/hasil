<?php
function validasi_user ($username, $password){
	if (preg_match('/^[a-zA-Z0-9_]+$/', $username))
	{
		if (preg_match('/^\S*(?=\S{7,12})(?=\S*[A-Z])(?=\S*[\d])\S*$/', $username))
		{
			return true;	
				
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
?> 