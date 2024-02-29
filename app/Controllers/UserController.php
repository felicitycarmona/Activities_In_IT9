<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\GenderModel;

class UserController extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function addUser(){
        $data = array();
    helper(['form']);

    //When submit button is clicked
    if($this->request->getMethod() == 'post') {
        $post = $this->request->getPost(['first_name', 'middle_name', 'last_name', 'age','gender', 'email', 'password']);

        //Provide validation for every text field
        $rules = [
            'first_name' => ['lable' => 'first name', 'rules' => 'required'],
            'middle_name' => ['lable' => 'first name', 'rules' => 'required'],
            'last_name' => ['lable' => 'last name', 'rules' => 'required'],
            'age' =>  ['lable' => 'age', 'rules' => 'required|numeric'],
            'gender_id' => ['required'],
            'email' =>  ['lable' => 'email', 'rules' => 'required|valid_email|is_unique[users.email]'],
            'password' => ['lable' => 'password', 'rules' => 'required'],
            'confirm_password' => ['lable' => ' confirm password', 'rules' => 'required_with[password]|matches[password]']
        ];

        if(! $this->validate($rules)){
            $data['validation'] = $this->validator;
        } else {
            //Save user to database
            $post['password'] = sha1($post['password']);
        
            $userModel = new UserModel();
            $userModel->save($post);

            $session = session();
            $session ->setFlashdata('success-add-user', 'User Successfully Saved!');

            return redirect()->to('/users/add', );
        }

    }

            $genderModel = new UserModel();
            $data['genders'] = $genderModel->findAll();

        return view('users/add');
    }
}
