<?php

namespace App\Controllers;

use App\Models\DaftarModel;

class Daftar extends BaseController
{
    public function index()
    {

        $daftar = new DaftarModel();
        $data = $daftar->findAll();

    return view ('view_siswa', ['data'=>$data]);
    }
    
    public function create_siswa()
    {
        return view ('view_create_siswa');
    }

    public function save_create()
    {
        $create = new DaftarModel();
        $create->insert($this->request->getPost());
            return redirect()->to(base_url('/'));
    }

    public function edit($id=false)
    {
        $edit = new DaftarModel();
        $data = $edit->find($id);
            return view ('view_edit_siswa', ['data'=>$data]);
    }

    public function save_edit()
    {
        $create = new DaftarModel();
        $create->update($this->request->getPost('id'), $this->request->getPost());
            return redirect()->to(base_url('/'));
    }

    public function delete($id=false)
    {
        $delete = new DaftarModel();
        $delete->delete($id);
            return redirect()->to(base_url('/'));
    }
}