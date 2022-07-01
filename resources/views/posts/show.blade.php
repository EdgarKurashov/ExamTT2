<x-layout>

    @section('content')
    <h1>Showing Post {{ $post->title }}</h1>

<div class="jumbotron text-center">
<p>
    <strong>Post Title:</strong> {{ $post->title }}<br>
    <strong>Description:</strong> {{ $post->description }}
</p>
</div>
@endsection

</x-layout>
