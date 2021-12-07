<?php 
class Entity{
    
    private $con,$sqlData;

    public function __construct($con,$input){
        $this->con = $con;

        //ランダムに抽出することにより、arrayであれば
        if (is_array($input)){
            $this->sqlData = $input;
        //そうでなければ
        }else{
            $query = $this->con->prepare("SELECT * FROM entities WHERE id=:d");
            $query->bindValue(":d",$input);
            $query->excute();
            
            $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        }
        


    }
}
?>