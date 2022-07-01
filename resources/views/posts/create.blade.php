<x-layout>

    @section('content')
    <h1>Add New Post</h1>
    <hr>
     <form action="/posts" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" id="postTitle"  name="title">
      </div>
      <div class="form-group">
        <label for="description">Post Description</label>
        <input type="text" class="form-control" id="postDescription" name="description">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
</x-layout>
