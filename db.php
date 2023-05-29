<?php
echo "<pre>";
echo print_r(all('images'));
echo "</pre>";
echo "<pre>";
echo print_r(find('images','1'));
echo "</pre>";

$tmp1='popmjj';
$tmp2 = 'ihouhoi';

echo "'\$tmp1'";
echo "<br>";

echo "{'$tmp1'}='$tmp1'" ;




function all($table){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=upload";
    $pdo = new PDO($dsn,'root','');
    $sql = "select * from $table ";

    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $rows ;
}

function find($table,$id){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=upload";
    $pdo = new PDO($dsn,'root','');
   

    $sql = "select * from `$table` where `id` = '$id' ";
    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row ;

}



update('images',['description'=>'63987','type'=>'jpg'],1);

function update($table,$col,$id){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=upload";
    $pdo = new PDO($dsn,'root','');

    $tmp = '';

    foreach ($col as $key => $value){
        $tmp .= "`$key` = '$value',";
    }

    $tmp = trim($tmp,',');



   

    $sql = "UPDATE `$table` SET $tmp
                              
                                where `id` ='$id' ";


   $result=$pdo->exec($sql);

   return $result;

}


delete('images',6);


function delete($table,$id){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=upload";
    $pdo = new PDO($dsn,'root','');

    



   

    $sql = "delete  from `$table`
                              
                                where `id` ='$id' ";


   $result=$pdo->exec($sql);

   return $result;

}




