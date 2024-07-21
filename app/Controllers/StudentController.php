<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $student = new StudentModel();
        $data['students'] = $student->findAll();
        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create.php');
    }

    public function store(){
        $students= new StudentModel();
        $data=[
            'name'=> $this->request->getPost('name'),
            'email'=> $this->request->getPost('email'),
            'phone'=> $this->request->getPost('phone'),
            'course'=> $this->request->getPost('course')
        ];
        $students->save($data);
        return redirect('students')->with('status', 'Student Inserted Successfully');
        
    }
    
    public function edit($id=null)
    {
        $student= new StudentModel();
        $data['student']= $student->find($id);
        return view('students/edit', $data);
    }

    public function update($id=null){
        $student = new StudentModel();
        $data=[
            'name'=> $this->request->getPost('name'),
            'email'=> $this->request->getPost('email'),
            'phone'=> $this->request->getPost('phone'),
            'course'=> $this->request->getPost('course')
        ];
        $student->update($id, $data);
        session()->setFlashdata('status_text', 'Your Student Data has been updated');
        return redirect()->to(base_url('students'))
        ->with('status_icon','success')
        ->with('status', 'Student Updated Successfully');
    }

    public function delete($id=null)
    {
        $student=new StudentModel();
        $student->delete($id);
        return redirect()->back()->with('status', 'Student Deleted Succesfully');
    }
    public function confirmdelete($id=null)
    {
        $student=new StudentModel();
        $student->delete($id);
        $data = [
            'status' => 'Deleted Successfully',
            'status_text'      => "Your student data has been delete successfully",
            'status_icon'   => 'success'
        ];
        
        return $this->response->setJSON($data);
      
    }

    

}
