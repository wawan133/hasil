<?php
function mengecek ($data = array()){
	if (in_array($data))
	{
		print_r($data);
	}
	else{
		echo "tidak ditemukan";
	}

}

?>