<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
  <form action="#" method="GET">
        <label>Input ID number</label>
        <input type="text" name="x"> 
        <button type="submit" name="submit">Submit</button>
       <div class="row center">
        
       </div>
    </form>
    </div>
   
  </body>
</html>


 




<?php

$connection = new mysqli("localhost", "root", "mysql", "news");	


//SQL Injection: website.com?x= ''OR'1'='1'
//if when input 1 = id=1 is equal true -display content
//if when input 2 = id=2 is equal to tru -display content
//if when input 3 = id=3 is equal to false -display content


    // SQL Injectable 

if(isset($_GET['x']))
    {
    $query = 'SELECT short_description,article FROM news WHERE id='.$_GET['x'] ;                                                                               
    $res = $connection->query($query);                                        
    if($res && mysqli_num_rows($res)> 0)
        {
        while($row = $res->fetch_assoc())
            {
            echo "Short Description: " .$row['short_description']."<br>";
            echo "Article: ". $row['article'];
            }
        }else
            {
                echo "No data id=" .$_GET['x']." in the database list";
            }
    }   




	//SQL Injection not workable
	   
if(isset($_GET['x']))
{
    $sql = "SELECT short_description, article FROM news WHERE id=?";
    $sqlSafe=$connection->real_escape_string($sql); //escape character
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sqlSafe)) 
        {
            mysqli_stmt_bind_param($stmt, "i", $_GET['x']);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($res)>0) 
                {
                while($row = $res->fetch_assoc()) 
                    {
                        echo $row["short_description"];
                        echo $row["article"];
                    }
                }else
                    {
                        
                        header("HTTP/1.1 404 Not Found");    // Status 404 in Developer Tools/Network
                        echo "No data Found";
                        exit;
                    } 
        }
}
	
    ?>