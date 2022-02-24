<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Category extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index($page = null)
    {
        $data['title']      = 'Admin: Category';
        $data['content']    = $this->category->paginate($page)->get();
        $data['total_rows'] = $this->category->count();
        $data['pagination'] = $this->category->makePagination(
            base_url('category'),
            2,
            $data['total_rows']
        );
        $data['page']       = 'pages/category/index';

        $this->view($data);
    }

    public function create()
    {
        if (!$_POST) {
            $input = (object) $this->category->getDefaultValues();
        } else {

            $input = (object) $this->input->post(null, true);
        }

        if (!$this->category->validate()) {
            $data['title']          = 'Tambah Kategori';
            $data['input']          = $input;
            $data['form_action']    = base_url('category/create');
            $data['page']           = 'pages/category/form';

            $this->view($data);
            return;
        }

        if ($this->category->create($input)) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        } else {
            $this->session->set_flashdata('error', 'Oops! terjadi kesalahan data');
        }

        redirect(base_url('category'));
    }

    public function edit($id)
    {
        $data['content'] = $this->category->where('id', $id)->first();

        if (!$data['content']) {
            $this->session->set_flashdata('warning', 'Maaf! Data tidak ditemukan');
            redirect(base_url('category'));
        }

        if (!$_POST) {
            $data['input'] = $data['content'];
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->category->validate()) {
            $data['title']          = 'Ubah Kategori';
            $data['form_action']    = base_url("category/edit/$id");
            $data['page']           = 'pages/category/form';

            $this->view($data);
            return;
        }

        if ($this->category->where('id', $id)->update($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil diperbaharui');
        } else {
            $this->session->set_flashdata('error', 'Data gagal diperbaharui');
        }

        redirect(base_url('category'));
    }

    public function unique_slug()
    {
        $slug       = $this->input->post('slug');
        $id         = $this->input->post('id');
        $category   = $this->category->where('slug', $slug)->first();

        if ($category) {
            if ($id == $category->id) {
                return true;
            }
            $this->load->library('form_validation');
            $this->form_validation->set_message('unique_slug', '%s sudah digunakan');
            return false;
        }

        return true;
    }
}

/* End of file Category.php */
