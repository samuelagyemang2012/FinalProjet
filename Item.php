<?php

/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 3/19/2016
 * Time: 3:09 AM
 */

include_once('adb.php');

class Item extends Adb
{
    /**
     * @param $sf
     * @param $np
     * @return bool|mysqli_result
     */
    public function allSkirts($sf, $np)
    {
        $query = "SELECT * FROM skirts s INNER JOIN brand b WHERE s.brand_id = b.brand_id LIMIT $sf,$np";
        return $this->query($query);
    }

    public function getAllSkirts()
    {
        $query = "SELECT * FROM skirts s INNER JOIN brand b WHERE s.brand_id = b.brand_id";
        return $this->query($query);
    }

    public function getSkirtBrands($brand, $sf, $np)
    {
        $query = "SELECT * FROM skirts s INNER JOIN brand b WHERE s.brand_id = b.brand_id AND b.brand_name=? LIMIT $sf,$np";
        $s = $this->prepare($query);
        $s->bind_param('s', $brand);
        $s->execute();
        return $s->get_result();
    }

    /**
     * @return int
     */
    public function countSkirts()
    {
        $query = "SELECT * FROM skirts s INNER JOIN brand b WHERE s.brand_id = b.brand_id";
        $r = $this->query($query);
        $no = mysqli_num_rows($r);
        return $no;
    }

    public function countSkirtBrand($brand)
    {
        $query = "SELECT * FROM skirts s INNER JOIN brand b WHERE s.brand_id = b.brand_id AND brand_name='$brand'";
        $r = $this->query($query);
        $no = mysqli_num_rows($r);
        return $no;
    }

    public function getSkirtDetails($id)
    {
        $query = "SELECT * FROM skirts s INNER JOIN brand b WHERE s.brand_id = b.brand_id AND s.skirt_id = ?";
        $s = $this->prepare($query);
        $s->bind_param('i', $id);
        $s->execute();
        return $s->get_result();
    }

    public function updateSkirt($id, $qty, $nb)
    {
        $query = "UPDATE skirts SET qty=?,num_bought=? WHERE skirt_id=?";
        $s = $this->prepare($query);
        $s->bind_param('iii', $qty, $nb, $id);
        $s->execute();
    }

    public function makeCustomer($f, $m, $l, $em, $a, $c, $p, $ib)
    {
        $query = "INSERT INTO customer(firstname, middlename, lastname, email, address, country, phone,items_bought) VALUES (?,?,?,?,?,?,?,?)";
        $s = $this->prepare($query);
        $s->bind_param('ssssssss', $f, $m, $l, $em, $a, $c, $p, $ib);
        $s->execute();
    }

    public function getCustomerDetails($email)
    {
        $query = "SELECT cust_id FROM customer WHERE email = ?";
        $s = $this->prepare($query);
        $s->bind_param('s', $email);
        $s->execute();
        return $s->get_result();
    }

    public function getCustomerEmail($email)
    {
        $query = "SELECT email FROM customer WHERE email =?";
        $s = $this->prepare($query);
        $s->bind_param('s', $email);
        $s->execute();
        return $s->get_result();
    }

    public function makeOrder($cid, $date)
    {
        $query = "INSERT INTO orders(cust_id,date) VALUES (?,?)";
        $s = $this->prepare($query);
        $s->bind_param('is', $cid, $date);
        $s->execute();
    }

    public function getItemsBought($email)
    {
        $query = "SELECT items_bought FROM customer WHERE email=?";
        $s = $this->prepare($query);
        $s->bind_param('s', $email);
        $s->execute();
        return $s->get_result();
    }

    public function getBrands()
    {
        $query = "SELECT * FROM brand";
        return $this->query($query);
    }

    public function search($price)
    {
        $query = "SELECT * FROM skirts s INNER JOIN brand b WHERE s.brand_id = b.brand_id AND s.price <= ? ORDER BY s.price DESC ";
        $s = $this->prepare($query);
        $s->bind_param('i', $price);
        $s->execute();
        return $s->get_result();
    }

}