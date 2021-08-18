<?php
class Customer
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCustomers()
    {
        $this->db->query("SELECT * FROM customers");
        $result = $this->db->resultSet();
        return $result;
    }

    public function addCustomer($values)
    {
        $sql = 'INSERT INTO customers (id, name, email, pass) VALUES("'.$values['id'].'", 
        "'.$values['name'].'", "'.$values['email'].'", "'.$values['pass'].'")';
    
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
        //echo $sql.'<br>';
    }
}