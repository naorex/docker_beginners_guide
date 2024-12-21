<?php
    try{
        $dsn = 'mysql:dbname=sample;host=db';
        $db = new PDO($dsn, 'testuser', 'testpass');
        echo "接続成功\n";
    } catch (PDOException $e){
        echo "接続失敗: ";
        echo $e->getMessage()
        exit;
    }
?>
