<x-header title="about-page-header" />
<h1>
   About Page
   {{count($fruits)}} - {{$fruits[1]}}
</h1>

@include('inner')


@if($fruits[2] == "orange")
<h1> It's banana </h1>
@else
<h1> It's not banana </h1>
@endif

<ul>
   @for($i=0; $i < count($fruits); $i++) <li>
      {{$fruits[$i]}}
      </li>
      @endfor
</ul>

<ul>
   @foreach($fruits as $fruit)
   <li> {{$fruit}} </li>
   @endforeach
</ul>

<script>
   var data = @json($fruits);
   console.log(data);
</script>