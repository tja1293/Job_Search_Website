<?php

namespace App\Models;

use CodeIgniter\Model;

class JobsModel extends Model
{
    //protected $table = 'jobs';
	
	public function getJobs($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}