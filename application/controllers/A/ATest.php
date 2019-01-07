<?php
Class ATest extends CI_Controller{
	public function printHello(){
		$data['message']="Passed to the controller";
		$this->load->view("A/ATestView.php",$data);
	}
}
?>
