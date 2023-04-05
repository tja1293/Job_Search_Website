<?php

namespace App\Controllers;

use App\Models\ReviewsModel;

class Reviews extends BaseController
{
    public function index()
    {
        $model = model(ReviewsModel::class);

        $data = [
            'reviews'  => $model->getReviews(),
            'name' => 'reviews archive',
        ];

        return view('templates/header-new', $data)
            . view('reviews/index')
            . view('templates/footer');
    }

    public function view($title = null)
    {
        $model = model(ReviewsModel::class);

        $data['reviews'] = $model->getReviews($reviews);

        if (empty($data['reviews'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $reviews);
        }

        $data['name'] = $data['reviews']['name'];

        return view('templates/header-new', $data)
            . view('reviews/view')
            . view('templates/footer');
    }
}