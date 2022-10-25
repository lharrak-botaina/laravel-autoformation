<div>
    @foreach ($users as $user )
        <h2>{{$user->name}}</h2>


            @foreach ($user->posts as $post )
            <p>{{$post->title}}</p>

            @endforeach


    @endforeach

</div>
