<div class="row">

    <div class="form-group p-3 col-9">
        <label for="input-name">Name</label>
        <input type="text" class="form-control" class="@error('name') is-invalid @enderror" id="input-category-name" name="name"
        value="{{ request()->routeIs('admin.tags.edit') ? $tag->name : '' }}">
        <small id="titleHint" class="form-text text-muted">
            Insert here your category's title
        </small>
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>


</div>








