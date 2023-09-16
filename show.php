<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
            width:60%;
            color: #C52184;
            text-align:left;
            
        }th{
            background-color:#554348;
            color:white;
        }
        td{
            border:1px solid black;
        }
    </style>
</head>
<body>
     <table>
        <tr><th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Address</th>
        </tr>
            <?php 
                $con =mysqli_connect('localhost','root','','student');
                if(!$con){
                    die('connect error'.mysqli_connect_error());
                    
                }else{
                    echo "connect success";
                }
                $query ='SELECT * FROM list LIMIT 3';

                $merge =mysqli_query($con,$query);

                $check = mysqli_num_rows($merge);
                
               

                if($check >0){
                  
                    while($inside= mysqli_fetch_array($merge)){
                            echo  "<tr><td>".$inside["id"]."</td><td>".$inside["name"]."</td> <td>".$inside["contact"]."</td><td>".$inside["address"]."</td></tr>";
                    }
                }

                

               
                
            ?>

     </table>
</body>
</html>
