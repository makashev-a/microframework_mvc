<?php


namespace App\models;


use Aura\SqlQuery\QueryFactory;
use PDO;

class Database
{
    private $queryFactory;
    private $pdo;

    public function __construct(QueryFactory $queryFactory, PDO $pdo)
    {
        $this->queryFactory = $queryFactory;
        $this->pdo = $pdo;
    }

    public function all($table)
    {
        $select = $this->queryFactory->newSelect();
        $select
            ->cols(['*'])
            ->from($table);

        $statement = $this->pdo->prepare($select);
        $statement->execute($select->getBindValues());
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne($table, $id)
    {
        $select = $this->queryFactory->newSelect();
        $select
            ->cols(['*'])
            ->from($table)
            ->where('id = :id')
            ->bindValues(['id' => $id]);

        $statement = $this->pdo->prepare($select);
        $statement->execute($select->getBindValues());
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function store($table, $data)
    {
        $insert = $this->queryFactory->newInsert();

        $insert
            ->into($table)
            ->cols($data);

        $statement = $this->pdo->prepare($insert->getStatement());
        $statement->execute($insert->getBindValues());
    }

    public function update($table, $data, $id)
    {
        $update = $this->queryFactory->newUpdate();
        $update
            ->table($table)
            ->cols($data)
            ->where('id = :id')
            ->bindValue('id', $id);

        $statement = $this->pdo->prepare($update->getStatement());
        $statement->execute($update->getBindValues());
    }

    public function delete($table, $id)
    {
        $delete = $this->queryFactory->newDelete();
        $delete
            ->from($table)
            ->where('id = :id')
            ->bindValue('id', $id);

        $statement = $this->pdo->prepare($delete->getStatement());
        $statement->execute($delete->getBindValues());
    }
}