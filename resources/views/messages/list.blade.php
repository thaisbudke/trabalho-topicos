<h1>Lista de Mensagens</h1>
<hr>
@foreach($messages as $m)
	
	<h3>{{\Carbon\Carbon::parse($m->created_at)->format('d/m/Y h:m')}}</h3>
	<p><a href="/messages/{{$m->id}}">{{$m->titulo}}</a></p>
	<p>{{$m->texto}}</p>
	<p>{{$m->autor}}</p>
	<br>
	
@endforeach

<!--Mensagem -->
@if ($errors->any())
	<hr>
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
	<hr>
@endif

<!--Mensagem -->
@if (\Session::has('success'))
	<hr>
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
	<hr>
@endif

<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->