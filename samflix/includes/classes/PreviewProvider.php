<?php

class PreviewProvider{
    
    private $con, $username;
    //インスタンスを作ったら、自動的に実行される。
    public function __construct($con,$username){
        $this->con = $con;
        $this->username = $username;
        
    }

    public function createPreviewVideo($entity){
        
        //もしnullだったらランダムに
        if ($entity == null){
            $entity = $this->getRandomEntity();
        }
        //try
        //$name=$entity->getId();
        //return $name;
        $id=$entity->getId();
        $name=$entity->getName();
        $preview=$entity->getPreview();
        $thumbnail=$entity->getThumbnail();
        //try
        //echo "<img src='$thumbnail'>";
        return "<div class='previewContainer'>

                    <img src='$thumbnail' class='previewImage' hidden>

                    <video autoplay muted class='previewVideo'>
                        <source src='$preview' type='video/mp4'>
                    </video>
        
                </div>";
        
    }

    private function getRandomEntity(){
        //データベースからランダムに抽出。余談：この方法は遅い。
        $query = $this->con->prepare("SELECT * FROM entities ORDER BY RAND() LIMIT 1");
        $query->execute();
        //fectch関数のモードを指定することでデータを抽出する。（連想配列）
        $row = $query->fetch(PDO::FETCH_ASSOC);
        
        return new Entity($this->con, $row);
    }

}

?>