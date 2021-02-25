<?php
    require_once('Interface_DeleteData.php');

    class DeleteData implements Interface_DelDat{
        private $requestDeleteData;
        protected $callDb;

        private function deleteData(){
            $this->getCallDb()->ExecDb("delete from clients where nome = {$this->getRequestDeleteData()}");
        }

        private function getRequestDeleteData(){
            return $this->requestDeleteData;
        }
        private function getCallDb(){
            return $this->callDb;
        }

        private function setRequestDeleteData($request){
            $this->requestDeleteData = $request;
        }
        private function setCallDb($c){
            $this->callDb = $c;
        }
    }