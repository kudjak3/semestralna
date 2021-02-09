
<form method="post" action="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="title">Title</label>
        <input type="title" class="form-control" id="title" name="title" placeholder="title" value="{{ @$model->title }}">
    </div>
    </div>
    <div class="form-group">
        <label for="text">Textarea</label>
        <textarea type="text"  class="form-control" id="text" name="text" placeholder="text"  rows="3" value="{{ @$model->text }}" ></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary form-control">
    </div>
</form>
