<?php

use LDAP\Result;

class CategoryModel extends DB
{
    public function getListCategory()
    {
        $qr = "SELECT * FROM categories";
        $result = mysqli_query($this->con, $qr);
        while ($row = $result->fetch_array()) {
            $rows[] = $row;
        }

        /* free result set */
        $result->close();
        return $rows;
    }

    public function addCategory($name, $description)
    {
        $qr = "INSERT INTO categories VALUES (null ,'$name', '$description')";
        $result = false;
        if (mysqli_query($this->con, $qr)) {
            $result = true;
        }

        return $result;
    }

    public function editCategory($id, $name, $description)
    {
        $qr = "UPDATE categories SET name = '$name', description = '$description' WHERE id = '$id'";
        $result = false;
        if (mysqli_query($this->con, $qr)) {
            $result = true;
        }

        return $result;
    }

    public function deleteCategory($id)
    {
        $qr = "DELETE FROM categories WHERE id = '$id'";
        $result = false;
        if (mysqli_query($this->con, $qr)) {
            $result = true;
        }

        return $result;
    }

    public function findCategory($id)
    {
        $qr = "SELECT * FROM categories WHERE id = '$id'";
        $result = mysqli_query($this->con, $qr);
        if ($result) {
            $row = $result->fetch_array();
        }
        $result->close();
        return $row;
    }
}
