<?php
class ReviewsModel extends Model 
{
	function saverecords($name,$title,$body)
	{
		$query="INSERT INTO `reviews`( `name`, `title`, `body`) 
		VALUES ('$name','$title','$body')";
		$this->db->query($query);
	}
}