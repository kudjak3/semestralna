<div class="form-group text-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>
<form method="post" action="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="name" >Full name</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" placeholder="Full name" value="{{ old('name',@$model->name) }}">
        </div>
    </div>
    <div class="form-group">
        <label for="email" >Email address</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"  placeholder="Enter email" value="{{@$model->email}}">
            <small id="emailHelp" class="form-text text-muted">We`ll never share your email with anyone else.</small>
        </div>
    </div>
    <div class="form-group">
        <label for="password" >Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary form-control">
    </div>
</form>

