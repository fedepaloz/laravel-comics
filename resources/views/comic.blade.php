 @extends('layouts.main')
 
 @section('main-content')
<div class="container">
    <div class="card">
      <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    <h2>{{$comic['description']}}</h2>
    <h2>{{$comic['price']}}</h2>
    <h2>{{$comic['series']}}</h2>
    <h2>{{$comic['type']}}</h2>
</div>


</div> 
@endsection 