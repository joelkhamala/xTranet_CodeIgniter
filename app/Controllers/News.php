<?php
namespace App\Controllers;
use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = 
        [
            'news' => $model->getNews(),
            'title' => 'News',
            'title1' => 'News Archive'
        ];

        return view('pages/head', $data)
                .view('news/overview')
                .view('pages/foot');
    }

    public function view($slug = null)
    {
        $model = model(NewsModel::class);
        $data['news'] = $model->getNews($slug);

        if (empty($data['news']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '.$slug);
        }

        $data['title'] = 'News';
        $data['title1'] = ucwords(str_replace('-',' ',$slug));

        return view('pages/head', $data)
                .view('news/view')
                .view('pages/foot');
    }
}
?>