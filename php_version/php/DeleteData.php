<?php
    require_once('Interface_DeleteData.php');

    class DeleteData implements Interface_DelDat{
        private $requestDeleteData;
        protected $callDb;

        public function deleteData(){
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

        function __construct($c,$r){
            $this->setCallDb($c);
            $this->setRequestDeleteData($r);
        }
    }