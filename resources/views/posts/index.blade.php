<x-layout>

    @section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Post Title</th>
          <th scope="col">Post Text</th>
          <th scope="col">Created At</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <th scope="row">{{$post->id}}</th>
          <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
          <td>{{$post->description}}</td>
          <td>{{$post->created_at->toFormattedDateString()}}</td>
          <td>
          <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ URL::to('posts/' . $post->id . '/edit') }}">
                  <button type="button" class="btn btn-warning">Edit</button>
              </a>&nbsp;
              <form action="{{url('posts', [$post->id])}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="submit" class="btn btn-danger" value="Delete"/>
                 </form>
                 <form action="{{url('posts', [$post->id])}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
          </div>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection

</x-layout>
