
<form method="post" action="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ @$model->title }}">
    </div>
    <div class="form-group">
        <label for="text">Textarea</label>
        <input type="text"  class="form-control" id="text" name="text" placeholder="text"  value="{{ @$model->text }}" >
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary form-control">
    </div>
</form>
