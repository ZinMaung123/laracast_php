<?php

function connectToDb()
{
    try{
        return new PDO("mysql:host=127.0.0.1;dbname=mytodo", 'zmm@oway', '123456');
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
}