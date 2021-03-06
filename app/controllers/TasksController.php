<?php

namespace App\controllers;

use App\models\Database;
use League\Plates\Engine;

class TasksController
{
    private $view;
    private $database;

    public function __construct(Engine $view, Database $database)
    {
        $this->view = $view;
        $this->database = $database;
    }

    public function index()
    {
        $tasks = $this->database->all('tasks');

        echo $this->view->render('tasks/home', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = $this->database->getOne('tasks', $id);

        echo $this->view->render('tasks/show', ['task' => $task]);
    }

    public function create()
    {
        echo $this->view->render('tasks/create');
    }

    public function store()
    {
        $this->database->store('tasks', $_POST);

        header('Location: /tasks');
    }

    public function edit($id)
    {
        $task = $this->database->getOne('tasks', $id);

        echo $this->view->render('tasks/edit', ['task' => $task]);
    }

    public function update($id)
    {
        $this->database->update('tasks', $_POST, $id);

        header('Location: /tasks');
    }

    public function delete($id)
    {
        $this->database->delete('tasks', $id);

        header('Location: /tasks');
    }
}