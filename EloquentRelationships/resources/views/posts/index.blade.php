<div>
    @foreach ($posts as $post )
    <h2>{{$post->title}}</h2>
    <p>{{optional($post->user)->name  }}</p>
    {{-- ?? 'None' --}}

    @endforeach

</div>
