<?php

namespace App\Controllers;


use CodeIgniter\Exceptions\PageNotFoundException; 

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
	
	/*"public function login()
    {
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
	
	public function logout()
    {
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
	
	public function jobs()
    {
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
	
	public function about()
    {
        return view('templates/header', $data)
		.view('apis/ ', $data)
		.view('templates/footer', $data);
    }
	
	*/
}