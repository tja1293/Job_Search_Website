<?php

namespace App\Controllers;


use CodeIgniter\Exceptions\PageNotFoundException; 

class Users extends BaseController
{
    public function index()
    {
        return view('templates/header', $data)
            . view('users/' . $page)
            . view('templates/footer');
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
	
	public function signUp()
    {
        return view('templates/header', $data)
            . view('users/' . $page)
            . view('templates/footer');
    }
}