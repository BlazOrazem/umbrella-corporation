<h1>Edit page</h1>
<hr>
<form method="POST" action="?action=updatePage&ID=<?= $page['id'] ?>" enctype="multipart/form-data">
    <div class="row control-group">
        <div class="form-group">
            <label class="col-md-2">Page title</label>
            <div class="col-md-10">
                <input name="title" value="<?= $page['title'] ?>" type="text" class="form-control" placeholder="Page title" required>
            </div>
        </div>
    </div>
    <hr>
    <div class="row control-group">
        <div class="form-group">
            <label class="col-md-2">Menu title</label>
            <div class="col-md-10">
                <input name="menu" value="<?= $page['menu'] ?>" type="text" class="form-control" placeholder="Menu title" required>
            </div>
        </div>
    </div>
    <hr>
    <div class="row control-group">
        <div class="form-group col-md-2">
            <label>Active?</label>
        </div>
        <div class="form-group col-md-10">
            <select name="is_active" class="form-control" style="width: 100px;">
                <option value="1" <?php $page['is_active'] ? print("selected") : '' ?> >Yes</option>
                <option value="0" <?php !$page['is_active'] ? print("selected") : '' ?> >No</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row control-group">
        <div class="form-group col-md-12">
            <label>Page content</label>
            <br /><br />
            <textarea id="summernote" name="content" rows="5" class="form-control" placeholder="Page content"><?= $page['content'] ?></textarea>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group">
            <label class="col-md-2">Picture</label>
            <div class="col-md-10">
                <input name="image" type="file" class="form-control">
            </div>
        </div>
    </div>
    <hr>
    <?php if($page['image']): ?>
        <div class="row control-group">
            <div class="form-group col-md-2">
                Current picture
            </div>
            <div class="form-group col-md-10">
                <img src="../uploads/<?= $page['image'] ?>" height="100">
            </div>
        </div>
        <hr>
    <?php endif; ?>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-default">Save changes</button>
        </div>
    </div>
</form>