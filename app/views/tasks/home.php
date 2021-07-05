<?php $this->layout('layout', ['title' => 'My Tasks'])?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-4">All tasks</h1>
            <a href="tasks/create" class="btn btn-success mt-2">Add task</a>
            <table class="table mt-2">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr class="align-middle">
                        <td><?= $task['id']; ?></td>
                        <td><?= $task['title']; ?></td>
                        <td class="w-50">
                            <a href="tasks/<?= $task['id']; ?>" class="btn btn-primary text-white px-4"><i
                                    class="bi-eye-fill"></i></a>
                            <a href="tasks/<?= $task['id']; ?>/edit" class="btn btn-warning text-white px-4"><i
                                    class="bi-pencil-fill"></i></a>
                            <a onclick="return confirm('Are you sure?');" href="tasks/<?= $task['id']; ?>/delete"
                               class="btn btn-danger text-white px-4"><i class="bi-x-lg"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

