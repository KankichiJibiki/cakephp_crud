<div class="row">
    <div class="col-md-6 offset-md-4">
        <div class="card">
            <div class="card-body">
                <?= $this->Form->create($posts) ?>
                    <div class="form-group">
                        <label for="name">Name</label>    
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="detail">Detail</label>
                        <textarea name="detail" id="detail"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= $this->Html->link('Back', ['action' => 'index'], ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>