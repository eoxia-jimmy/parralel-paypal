<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Paypal Parralel Payment NVP</title>
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
	<script>
		paypal.Button.render( {
			env: 'sandbox', // Specify 'sandbox' for the test environment

			client: {
				sandbox: '****************************'
			},

			payment: function( resolve, reject ) {
				paypal.request.post( 'http://127.0.0.1/tests/paypal/set-express-checkout.php' )
					.then( function( data ) { resolve( data.TOKEN ); })
					.catch( function( err ) { reject( err ); });
			},

			onAuthorize: function() {

			}

		}, '#paypal-button' );
	</script>
</head>
<body>
	<div id="paypal-button"></div>
</body>
</html>
