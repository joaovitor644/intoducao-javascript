<?php

require_once('Interface_ReadData.php');

class ReadData implements Interface_ReadData{
    private $callDb;
    private $data;

     function requestData(){
        $result = $this->getcallDb()->ExecDb("select * from clients;");
        if(!mysqli_num_rows($result)){
            return false;
        } else {
            while($res = mysqli_fetch_assoc($result)){
                $data[] = $res;
            }
        }
        $this->setData($data);
    }

    private function getCallDb(){
        return $this->callDb;
    }
    public function getData(){
        return $this->data;
    }

    private function setData($d){
        $this->data = $d;
    }
    private function setCallDb($c){
        $this->callDb = $c;
    }

    function __construct($c){
        $this->setCallDb($c);
    }

}