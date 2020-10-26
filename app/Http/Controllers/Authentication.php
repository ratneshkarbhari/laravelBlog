<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AuthModel;

class Authentication extends Controller
{
    
    public function admin_login(Request $req){

        $user = Auth::user();

        if($user!=NULL){
            return redirect(url('admin-dashboard'));
        }

        $usernameGiven = $req->post('admin-username');
        $passwordGiven = $req->post('admin-password');

        if ($usernameGiven==''||$passwordGiven=='') {
            
            $data['title'] = 'Admin Login';
            $data['error'] = 'Please enter both username and password';
            
            echo view('templates.header',$data);
            echo view('pages.admin_login',$data);
            echo view('templates.footer',$data);

        } else {

            $authModel = new AuthModel();

            $userData = $authModel->fetch_by_username($usernameGiven);

            if ($userData) {

                $passwordCorrect = password_verify($passwordGiven,$userData->password);

                if ($passwordCorrect) {
                    
                    session(['first_name' => $userData->first_name,'last_name' => $userData->last_name,'username' => $userData->username,'logged_in_as' => 'admin']);

                    return redirect(url('admin-dashboard'));

                } else {

                    $data['title'] = 'Admin Login';
                    $data['error'] = 'Password is incorrect';
                    
                    echo view('templates.header',$data);
                    echo view('pages.admin_login',$data);
                    echo view('templates.footer',$data);
                    
                }
                

                
            } else {
                
                $data['title'] = 'Admin Login';
                $data['error'] = 'Username is incorrect';
                
                echo view('templates.header',$data);
                echo view('pages.admin_login',$data);
                echo view('templates.footer',$data);
            
            }
            
        }
        
        
    }
    
}
