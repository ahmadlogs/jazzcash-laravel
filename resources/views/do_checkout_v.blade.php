<html xmlns="http://www.w3.org/1999/xhtml"><head>
<script type="text/javascript">
 function closethisasap() {
 document.forms["redirectpost"].submit();
  }
</script></head>

<body onload="closethisasap();">
<h1>Please wait you will be redirected soon to <br >Jazzcash Payment Page</h1>
 <form name="redirectpost" method="POST" action="{{Config::get('constants.jazzcash.TRANSACTION_POST_URL')}}">
	 <?php 
	 $post_data = Session::get('post_data');
	 //echo '<pre>';
	 //print_r($post_data);
	 //echo '</pre>';
	 ?>
 @foreach($post_data as $key => $value)
	<input type="hidden" name="{{ $key }}" value="{{ $value }}">
 @endforeach

 </form>
 </body>
 </html>