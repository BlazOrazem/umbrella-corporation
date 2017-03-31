<h1>Add new page</h1>
<hr>
<form method="POST" action="?action=insertPage">
    <div class="row control-group">
        <div class="form-group">
            <label class="col-md-2">Page title</label>
            <div class="col-md-10">
                <input name="title" type="text" class="form-control" placeholder="Page title" required>
            </div>
        </div>
    </div>
    <hr>
    <div class="row control-group">
        <div class="form-group">
            <label class="col-md-2">Menu title</label>
            <div class="col-md-10">
                <input name="menu" type="text" class="form-control" placeholder="Menu title" required>
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
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row control-group">
        <div class="form-group col-md-12">
            <label>Page content</label>
            <br /><br />
            <textarea id="summernote" name="content" rows="5" class="form-control" placeholder="Page content"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-default">Create new page</button>
        </div>
    </div>
</form>