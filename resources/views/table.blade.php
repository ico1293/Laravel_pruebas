<html>
	<head lang="{{ app()->getLocale() }}">
	 	<meta charset="utf-8">
	 	<title>Table</title>
	 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <h1 class="navbar-brand mb-0">Table</h1>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
			      </li>
			    </ul>
			    <span class="navbar-text">
    				Display a listing of the resource
  				</span>
			  </div>
		</nav>

		<div class="container">
			<table class="table">
				<thead class="thead bg-primary text-white">
	                <tr>
	                    <th>Id</th>
	                    <th>Name</th>
	                    <th>Commentary</th>
	                </tr>
                </thead>
                <tbody>
	                @foreach($commentaries as $commentary)
	                    <tr>
	                        <th scope="row">{{ $commentary->id }}</td>
	                        <td>{{ $commentary->name }}</td>
	                        <td>{{ $commentary->commentary }}</td>
	                    </tr>
	                @endforeach
                </tbody>
            </table>
            {{-- pagination links --}}
            @if(count($commentaries))
			    {{-- mt:margen relativo por arriba, mx: izq, der, margen automatico --}}
			    <div class="mt-2 mx-auto">
			        {{-- show links to pages --}}
			        {{ $commentaries->links('pagination::bootstrap-4') }}
			    </div> 
		    @endif
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</body>
</html>