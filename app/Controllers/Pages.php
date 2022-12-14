<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_page');
    }
    public function view($page = 'home')
    {
        if(!is_file(APPPATH . 'Views/pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page);

        return view('pages/head', $data)
                .view('pages/'.$page)
                .view('pages/foot');
    }

    public function features()
    {
        $data = 
        [
            'title' => 'Features',
            'title1' => 'More Features'
        ];
        return view('pages/head', $data)
                .view('pages/features')
                .view('pages/foot');
    }
}
?>