<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;
use Illuminate\Support\Facades\Storage;


class PublicPageLoader extends Controller
{
    public function home(){
        $data['title'] = 'Tagline';
        $articleModel = new ArticleModel();
        $data['posts'] = $articleModel::all();
        echo view('templates.header',$data);
        echo view('pages.home',$data);
        echo view('templates.footer',$data);
    }
    
    public function admin_login(){
        $data['title'] = 'Admin Login';
        $data['error'] = '';

        echo view('templates.header',$data);
        echo view('pages.admin_login',$data);
        echo view('templates.footer',$data);
    }
}
