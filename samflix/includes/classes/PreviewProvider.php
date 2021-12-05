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
        //データベースからランダムに抽出。余談：この方法は遅い。
        $query = $this->con->prepare("SELECT * FROM entities ORDER BY RAND() LIMIT 1");
        $query->execute();
        //fectch関数のモードを指定することでデータを抽出する。（連想配列）
        $row = $query->fetch(PDO::FETCH_ASSOC);
        echo $row["name"];
    }

}

?>