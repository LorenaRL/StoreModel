<!--é onde vai abrir minha página de login-->
<?php
SESSION_START();

?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>StoreModel | Página do Usuário</title>
		<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
		<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../template/favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="../template/css/default.css" />
		<link rel="stylesheet" type="text/css" href="../template/css/component.css" />
                <script src="../template/js/modernizar.custom.js"></script>
	</head>
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			
			<header>
				<h1>Olá!, <?php echo $_SESSION['email'];?> <span>bem-vindo a sua página do StoreModel</span></h1>	
			</header>
			<div class="main clearfix">
				<nav id="menu" class="nav">					
					<ul>
						<li>
                                                    <a href="../template/pagUsuario/indexUsuario.html">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span>Home</span>
							</a>
						</li>
							<li>
                                                            <a href="../template/pagUsuario/aboutUsuario.html">
								<span class="icon">
									<i aria-hidden="true" class="icon-portfolio"></i>
								</span>
								<span>Sobre</span>
							</a>
						</li>
						
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-blog"></i>
								</span>
								<span>Suas Compras</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-team"></i>
								</span>
								<span>Seus Dados</span>
							</a>
						</li>
						<li>
                                                    <a href="../template/pagUsuario/contactUsuario.html">
								<span class="icon">
									<i aria-hidden="true" class="icon-contact"></i>
								</span>
								<span>Contato</span>

							</a>
						</li>

						<li>
                                                    <a href="logout.php">
								<span class="icon"> 
									<i aria-hidden="true" class="icon-signout"></i>
								</span>
								<span>Sair</span>
							</a>
						</li>

					</ul>
				</nav>
			</div>
		</div><!-- /container -->
		<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
	</body>
</html>
