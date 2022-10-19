{{-- {{$user}} --}}
@foreach ($user as $user)

<h1>{{$user->name}}</h1>
<h1>{{$user->email}}</h1>
@endforeach