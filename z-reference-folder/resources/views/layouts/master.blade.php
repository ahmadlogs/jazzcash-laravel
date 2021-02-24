    <!doctype html>
    <html>
    <head>
       @include('includes.header')
    </head>
    <body>
    
	'@include('includes.topNav')
	
       <div id="main" class="row">
               @yield('content')
       </div>
       <footer class="row">
           @include('includes.footer')
       </footer>
    </div>
    </body>
    </html>