@include('client.layouts.header')

<body>
	<div class="body">
		@include('client.layouts.menu')

		
			@yield('content')
	
    

    @include('client.layouts.footer')