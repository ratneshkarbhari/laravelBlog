<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPageLoader extends Controller
{
    

    private function auth_check($role)
    {

        if($role!='admin'){
            return FALSE;
        }else {
            return TRUE;
        }

    }
    
    public function dashboard(){

        $res = $this->auth_check(session('logged_in_as'));

        if (!$res) {
            return redirect(url('admin-login'));
        }
        
        $data['title'] = 'Admin Dashboard';

        echo view('templates.header',$data);
        echo view('admin_pages.dashboard',$data);
        echo view('templates.footer',$data);

    }

    public function write_new(){

        $res = $this->auth_check(session('logged_in_as'));

        if (!$res) {
            return redirect(url('admin-login'));
        }
        
        $data['title'] = 'Write New';
        $data['success'] = $data['error'] = '';

        echo view('templates.header',$data);
        echo view('admin_pages.write_new_blog',$data);
        echo view('templates.footer',$data);

    }

}
