<H1>Edit</H1>
<p>Hello, i am edit</p>

<div class="row">
        <div class="col-6">
            <form action="{{ url('users') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="fullname" class="form-label">Fullname</label>
                    <input type="text" name="fullname" class="form-control" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form> 
        </div>
</div>

<form action="{{ url('users', $id) }}" method="POST">
    @csrf 
    method('DELETE')
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Delete</button>
    </div>
</form>