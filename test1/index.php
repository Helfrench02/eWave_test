<?php

class Json 
{ 

    public $results;
    public $dataType;  

    function __construct($dataType)
    {

    $this->dataType = $dataType;                             
        
    if(!file_exists('sample4.json'))
        {
            echo "No File Found inside the folder";
            die("No such File");
            return;
        }else
        { 
            $this->hasFile = true;
            return  $this->result = file_get_contents('sample4.json');  
        }  

    }  

    function ArrayToString():string
    {

        $encodeData = JSON_encode($this->result);
        return $encodeData;
        
    }

    function ObjectToArray(): array 
    {                  
        $decodedData = json_decode($this->result, true);    
        return $decodedData;                       
    
    }

    function parseJson()
    {
    if ($this->dataType == "1")  
        {
            echo $this->ArrayToString();
        }elseif($this->dataType == "2")
        {
            echo "<pre>";
            print_r($this->ObjectToArray());
            echo "</pre>";
        } 
    } 

}


// 1 = Array to String
// 2 = String to Array
$test1 = new Json("1");
$test1->parseJson();
?>

