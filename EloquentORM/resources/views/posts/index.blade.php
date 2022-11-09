@foreach ($posts as $post)
<h1>{{$post->title}}</h1>
<ul>
    @foreach ($post->tags as $tag)
        <li>{{$tag->name}}</li>        
    @endforeach
</ul>
    
@endforeach
