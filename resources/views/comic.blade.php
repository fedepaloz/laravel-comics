 @extends('layouts.main')
 
 @section('main-content')
<div class="container">
    <div class="card">
      <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    <h2>{{$comic['description']}}</h2>
    <h2>{{$comic['price']}}</h2>
    <h2>{{$comic['series']}}</h2>
    <h2>{{$comic['type']}}</h2>
   
    <div>



         
<ul>
    @foreach ($comic['artists'] as $artists)
        <li>
<h1>{{$artists}}</h1>
        </li>
    @endforeach
</ul>
        
    </div>
</div>


</div> 
@endsection 

<li></li>