<?php

class PreviewProvider{
    
    private $con, $username;
    //インスタンスを作ったら、自動的に実行される。
    public function __construct($con,$username){
        $this->con = $con;
        $this->username = $username;
        
    }
    //試しに、hello worldをリターンさせる。
    public function createPreviewVideo($entity){
        
        //もしnullだったらランダムに
        if ($entity == null){
            $entity = $this->getRandomEntity();
        }

    }

    private function getRandomEntity(){
        
        $this->con->prepare();
    }

}

?>