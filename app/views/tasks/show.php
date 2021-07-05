<?php $this->layout('layout', ['title' => $task['title']])?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="py-3"><?= $task['title']; ?></h1>
            <p>
                <?= $task['content'] ?>
            </p>
            <a href="/tasks" class="btn btn-primary text-white">Back</a>
        </div>
    </div>
</div>