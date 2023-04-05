<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewsModel extends Model
{
    protected $table = 'reviews';
	
	
	
	 public function getReviews($title = false)
    {
        if ($title === false) {
            return $this->findAll();
        }

        return $this->where(['title' => $title])->first();
    }
	
}