<?php

class Emp_model extends CI_Model {

    public $id;
    public $name;
    public $salary;

    public function Read() {
        return $this->db->get("emp")->result();
    }

}
