<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
       $this->pdo = $pdo; 
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
        // $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
        $tasks = $statement->fetchAll(PDO::FETCH_CLASS);

        return $tasks;
    }

    public function insert($table, array $datas)
    {
        $sql = sprintf("insert into %s (%s) values (%s)",
                        $table,
                        implode(', ', array_keys($datas)),
                        ':' . implode(', :', array_keys($datas))
                );
       
        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute($datas);   
        }
        catch(Exception $e){
            die('400 Bad Request');
        }
        return $this->pdo->lastInsertId();
    }
}