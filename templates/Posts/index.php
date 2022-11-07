<div class="row">
    <div class="col-md-6">
        <h3>CRUD CakePHP</h3>
    </div>
    <div class="col-md-6 text-right">
        <?= $this->Html->link('Add Data', ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<table class="table table-dordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Detail</th>
            <th width="160">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $post) : ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->name ?></td>
                <td><?= $post->detail ?></td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>