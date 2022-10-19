{{-- if and else --}}

Id = {{$gender='women'}}

@if($gender == 'women')
    <h2>{{$gender}}☕ </h2>
    
@else
    <h2> </h2>
@endif




{{-- isset and empty --}}
{{-- 
@isset($gender)

<h2>age is {{$gender}}</h2>
@endisset
 
@empty($gender)
    <h2>age is empty</h2>
@endempty

@php
$user = array("botaina","nada")    
@endphp

@foreach ($user  as $value)
    <p>User name id : {{ $value }}</p>
@endforeach --}}