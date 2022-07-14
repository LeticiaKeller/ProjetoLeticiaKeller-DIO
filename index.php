<html>

    <head>
        <title> Meu primeiro site em PHP!</title>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		
		<style type="text/css">
		    .linha {
				font-weight: bold;
				color: blue;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
	</head>
	 
	 <body>
	 
	    <?php
		    for ( $i =0 ; $i <10 ; $i++) {
				print ( "linha número " . $i . "<br />");
			}
			?>
			</body>
			
			<script type="text/javascript">
			    $(document) .ready(function() {
					alert("Yeees!");
				}) ;
			</script>
			
</html>