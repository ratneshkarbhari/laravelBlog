<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;


class Articles extends Controller
{
    private function auth_check($role)
    {

        if($role!='admin'){
            return FALSE;
        }else {
            return TRUE;
        }

    }

    public function add_new(Request $request){
        $res = $this->auth_check(session('logged_in_as'));
        if(!$res){
            return redirect(url('admin-login'));
        }
        $title = $request->post('blog-title');
        $slug = $request->post('blog-slug');
        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->file('featured_image');
            $destination = 'public/images/article_featured';
            $featuredImageName = uniqid().'.'.$featuredImage->extension();
            $featuredImage->storeAs($destination,$featuredImageName);
        } else {
            $featuredImageName = "noimage.jpg";
        }

        $slug = strtolower(str_replace(' ','-',$slug));

        $objToInsert = array(
            
            'title' => $title,
            'slug' => $slug,
            'body' => $request->post('post-body'),
            'featured_image' => $featuredImageName

        );

        $articleModel = new ArticleModel();

        $exists = $articleModel::where('slug',$slug)->first();

        if ($exists) {
            
            $data['title'] = 'Write New';
            $data['success'] = ''; $data['error'] = 'Slug already Exists';
    
            echo view('templates.header',$data);
            echo view('admin_pages.write_new_blog',$data);
            echo view('templates.footer',$data);
            
        }else {

            $created = $articleModel::create($objToInsert);

            if ($created) {
                
                $data['title'] = 'Write New';
                $data['success'] = 'Article Created'; $data['error'] = '';
        
                echo view('templates.header',$data);
                echo view('admin_pages.write_new_blog',$data);
                echo view('templates.footer',$data);
                
            } else {
    
                $data['title'] = 'Write New';
                $data['success'] = ''; $data['error'] = 'Article not created';
        
                echo view('templates.header',$data);
                echo view('admin_pages.write_new_blog',$data);
                echo view('templates.footer',$data);
                
            }
            
        }


        

    }
}
