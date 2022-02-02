<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1> hELLO WORLD</H1>
</body>
</html>


<?php
<?php

// $string = file_get_contents("test.json");
// if ($string === false) {
//     // deal with error...
// }

// $json_a = json_decode($string, true);
// if ($json_a === null) {
//     // deal with error...
// }

// foreach ($json_a as $person_name => $person_a) {
//     echo $person_a['status'];
// }


// $string = file_get_contents("test.json");
// $json_a = json_decode($string, true);
// echo "<ul>";
// foreach($json_a['books'] as $movies){
//     echo $movies['title']."<br>";
//     echo $movies['publish']."<br>";
//     echo $movies['author']."<br>";
//     echo "<br>";

    
// }
// print_r($json_a);



//2 ways
  //this is for string from $_REQUEST,$_POST to array
//   $jsonText = $_REQUEST['myJSON'];
//   $decodedText = html_entity_decode($jsonText);
//   $myArray = json_decode($decodedText, true);
  
//   //this is for json to array
//   $assosiative_array = json_decode(json_encode($jsonText),true);


 class Json {

    public $json;
    public $result;

   

    function getFile()
    {
        $answer = scandir('parseJsonToArray');
        
            echo var_dump($answer);
         
        // $extension = '.json';
        // $result = file_get_contents($jsonfile.$extension);
      
    }

    // function parseJson{
    //     $decodedData = json_decode($result, true);

    //     if($dataType == "Array")
    //     {
    //         var_dump($decodedData);
    //     }
    //     if ($dataType == "String")
    //     {
    //         foreach($decodedData['books'] as $movies)
    //         {
    //                 echo $movies['title']."<br>";
    //                 echo $movies['publish']."<br>";
    //                 echo $movies['author']."<br>";
    //                 echo "<br>";
    //         } 
    //     }
    // }
}

$test1 = new Json();
echo $test1->getFile();
?>