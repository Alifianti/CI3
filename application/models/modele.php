<?php
/**
*  
*/
class Modele extends CI_Model
{
	public function getInformation(){
		$data=array(
				'name'=>array('firstname'=> "Alfianti",'lastname' => "Widyastuti"),
				'address'=>"jl Terusan Batu Bara 5 No.85",
				'email'=>"walifianti@gmail.com"
			);
		return $data;
	}
}
?>