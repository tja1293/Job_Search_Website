<?php


namespace App\Controllers;

use App\Models\ReviewsModel;


class Reviews extends BaseController
{
	public function register()
	{
		
		return view('news/register');
	}
	
    public function savedata()
	{
		$model = model(ReviewsModel::class);
		
		if($this->input->post('type')==1)
		{
			$name=$this->input->post('name');
			$title=$this->input->post('title');
			$body=$this->input->post('body');
			$this->ReviewsModel->saverecords($name,$title,$body);	
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}
}