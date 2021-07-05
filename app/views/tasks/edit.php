<?php $this->layout('layout', ['title' => $task['title']]) ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="py-3">Edit task</h1>
            <form action="/tasks/<?= $task['id'] ?>/update" method="post">
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?= $task['id']; ?>">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="<?= $task['title']; ?>">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content"><?= $task['content']; ?></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>