<?php $this->layout('layout', ['title' => 'Create Task']) ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="py-3">Create task</h1>
            <form action="/tasks" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
