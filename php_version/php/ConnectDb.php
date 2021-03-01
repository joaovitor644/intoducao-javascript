<?php

    class ConnectDb{
        private $user;
        private $host;
        private $passwd;
        private $db;

        protected function connection(){
            $conect = mysqli_connect($this->getUser(),$this->getHost(),$this->getPasswd(),$this->getDb());
            return $connect;
        }
        protected function ExecDb($query){
            $exdb = mysqli_query($this->connection(),$query);
			return $exdb;
        }
        
        private function getUser(){
            return $this->user;
        }
        private function getHost(){
            return $this->host;
        }
        private function getPasswd(){
            return $this->passwd;
        }
        private function getDb(){
            return $this->db;
        }

        private function setUser($u){
            $this->user = $u;
        }
        private function setHost($h){
            $this->host = $h;
        }
        private function setPasswd($p){
            $this->passwd = $p;
        }
        private function setDb($d){
            $this->db = $d;
        }

        function __contruct($u,$h,$p,$d){
            $this->setUser($u);
            $this->setHost($h);
            $this->setPasswd($p);
            $this->setDb($d);
        }
    }