<?php

class Category extends Controller
{
    public function index()
    {
        $categories = $this->model('CategoryModel')->getListCategory();
        $this->view('Category', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        if (!(isset($_POST['name']) && isset($_POST['description']))) {
            $this->view('addCategory', []);
        }
        if (isset($_POST['submit'])) {
            $name = $this->checkInput($_POST['name']);
            $description = $this->checkInput($_POST['description']);
            if ($name == '' || $description == '') {
                $this->view('addCategory', [
                    'mess' => 'Bạn chưa nhập đủ thông tin',
                ]);
            } else {
                $result = $this->model('CategoryModel')->addCategory($name, $description);
                if ($result) {
                    header("Location:http://localhost/miniProject/Category");
                }
            }
        }
    }

    public function update($id)
    {

        $category = $this->model('CategoryModel')->findCategory($id);
        $this->view('editCategory', [
            'category' => $category,
        ]);
        if (isset($_POST['submit'])) {
            $name = $this->checkInput($_POST['name']);
            $description = $this->checkInput($_POST['description']);
            if ($name == '' || $description == '') {
                $this->view('editCategory', [
                    'mess' => 'Bạn chưa nhập đủ thông tin',
                ]);
            } else {
                $result = $this->model('CategoryModel')->editCategory($id, $name, $description);
                if ($result) {
                    header("Location:http://localhost/miniProject/Category");
                }
            }
        }
    }

    public function delete($id)
    {
       
        $result = $this->model('CategoryModel')->deleteCategory($id);
        if ($result) {
            header("Location:http://localhost/miniProject/Category");
        }
    }

    public function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
