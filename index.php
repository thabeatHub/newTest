<html>

	<head>
		
		<meta charset="UTF-8">

		<style type="text/css">

			body{
				margin: 20px auto 0 auto;
				width: 90%;
				background-color:#416aa8;
				color:white;
			}

			h1{
				font-weight: bold;
			}

			p{
				font-family: sans-serif;
			}

			ul{
				//list-style: none;
			}

			li{
				text-indent: 0px;
				margin-bottom: 5px;
				-webkit-transition: all 300ms ease-in-out;
				-moz-transition: all 300ms ease-in-out;
				-ms-transition: all 300ms ease-in-out;
				-o-transition: all 300ms ease-in-out;
				transition: all 300ms ease-in-out;
			}

			li:hover{
				text-indent: 3px;
			}

			li a{
				color: white;
				text-decoration: none;
				font-family: sans-serif;
				-webkit-transition: all 300ms ease-in-out;
				-moz-transition: all 300ms ease-in-out;
				-ms-transition: all 300ms ease-in-out;
				-o-transition: all 300ms ease-in-out;
				transition: all 300ms ease-in-out;
				
			}

			li a:hover{
				color: red;
				font-size: 1.2em;
				font-weight: bold;
			}

		</style>

	</head>

	<body>

		<h1>I+D+i</h1>

		<p>Aquí tenemos nuestro banco de pruebas: ideas en las que trabajamos, tests, cosas que hemos visto y queremos desgranar, conceptos nuevos...</p>

		<p>Trastead, chafardead y sentíos libres de proponer o preguntar cualquier cosa a testmaster(arroba)wizdrafts.com</p>

		<ul>
		
			<?php foreach (glob("*", GLOB_ONLYDIR) as $dir): ?>
		
			    <li><a href='./<?php echo $dir ?>' target="_blank" ><?php echo $dir ?></a></li>
		
			<?php endforeach; ?>
		
		</ul> 
		
		<!--<?php phpinfo(); ?>-->

	</body>

</html>
