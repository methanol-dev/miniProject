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
            $name = $_POST['name'];
            $description = $_POST['description'];
            $result = $this->model('CategoryModel')->addCategory($name, $description);
            if ($result) {
                echo 'them thanh cong';
            } else {
                echo 'them that bai';
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
            $name = $_POST['name'];
            $description = $_POST['description'];
            $result = $this->model('CategoryModel')->editCategory($id, $name, $description);
            if ($result) {
                header("Location:http://localhost/miniProject/Category");
            } else {
                echo 'sua that bai';
            }
        }
    }

    public function delete($id)
    {
        $category = $this->model('CategoryModel')->findCategory($id);
        $this->view('deleteCategory', [
            'category' => $category,
        ]);
        // $category = $this->model('CategoryModel')->findCategory($id);
        if (isset($_POST['submit'])) {
            $result = $this->model('CategoryModel')->deleteCategory($id);
            if ($result) {
                header("Location:http://localhost/miniProject/Category");
            } else {
                echo 'Xoa that bai';
            }
        }
    }
}
