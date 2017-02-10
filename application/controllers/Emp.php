<?php

//emp/jsonRead
class Emp extends CI_Controller{
    public function jsonRead(){
        $list=  $this->Emp_model->Read();
        echo json_encode([
            "list"=>$list
        ]);
    }
}
