<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="icons/font/bootstrap-icons.css"> 
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<title>Websites 3.0</title>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		list-style: none;
	}

	header{
		height: 100vh;
		background: linear-gradient(to right, purple, blue);
	}

		nav{
			position: fixed;
			top: 0;
			width: 100%;
			padding: 1rem 0;
			box-shadow: 0px 0px 6px 1px #2526278d;
			z-index: 99;
			background: #ffffff30;
			transition: 0.7s;
		}

		.nav-scroll{
			transition: ease 1s;
			padding: 1rem 8%;
			background: #adb5bd;
		}

		.list-none-nav li{
			padding:0 8px;
			color: white;
			text-shadow: 2px 2px 2px #252627;
		}

		.list-none-icons li{
			margin: 0 5px;
			padding: 4px 8px;
			border-radius: 4px;
			border:1px solid #f3f3f3ad;
			color: white
		}

	.section-uno{
		background: #ebd8ef;
		padding: 2.5rem 0rem;
	}
	.section-dos{
		background: #f5f5f5;
		/*min-height: 100vh;*/
		padding: 3rem 0;
	}
		.prodcut-items{
			margin:15px 10px;
			padding: 15px;
		}
	.section-tres{
		background: #ebd8ef;
		padding: 2.5rem 0rem;
	}
		.colap {
		  display: grid;
		  grid-template-columns: repeat(3, 1fr);
		  grid-gap: 25px;
		  padding: 10px;
		  list-style: none;
		}
		.colap li {
			min-height: 200px;
			background-color: white;
			box-shadow: 6px 8px 18px -2px #25262766; 
		}
		.colap li:nth-child(1) {
		  grid-row: 1/3;
		  grid-column: 1/2;
		}
		.colap li:nth-child(4) {
		  grid-row: 2/2;
		  grid-column: span 2;
		}

	.section-cuatro{
		padding: 3rem 0;
		background: #f5f5f5;
		/*min-height: 100vh;*/
	}
		.product-desta{
			background: white;
			box-shadow: 6px 8px 12px -5px #25262766; 
			margin: 15px 15px;
			padding: 10px 20px;
		}

	.section-cinco{
		background: #ebd8ef;
		min-height: 100vh;
		padding: 3rem 0;
	}

		.detalles li{
			line-height: 3.5rem;
		}
	
	.section-seis{
		background: #f5f5f5;
		padding: 3rem 0;
	}

		.product-tips{
			background: white;
			box-shadow: 6px 8px 12px -5px #25262766; 
			margin: 15px 15px;
			padding: 0;
		}

	.section-siete{
		padding: 3rem 0;
		background: blue;
		color: white;
	}
		.section-siete button{
			margin-left: 10px;
			border-radius: 16px;
			padding: 5px 2.5rem;
			background: orange;
			border:none;
			box-shadow: 0px 0px 6px 1px #252627; 
			color: white;
		}

	footer{
		/*padding: 3rem 0;*/
		background: #f5f5f5;
	}

		.footer-items{
			padding-left: 0;
		}
		
		.footer-items li{
			line-height: 2rem;
		}
		
		.footer-redes{
			display: flex;
			justify-content:center;
			margin-bottom: 0;
			padding-left: 0;
		}

			.footer-redes li{
				font-size: 1rem;
				border-radius: 50%;
				padding: 2px 6px;
				margin: 5px;
				box-shadow: 0px 0px 2px 0px #252627; 
			}

		.footer-money{
			display: flex;
			justify-content:flex-end;
			margin-bottom: 0;
			padding-left: 0;
		}
			.footer-money li{
				margin-left: 10px;
				font-size: 1rem;
				margin: 5px;
				padding: 2px 15px;
				box-shadow: 0px 0px 2px 0px #252627; 
				border-radius: 4px;
			}
</style>
<body>
	<header>
		<nav>
			<div class="d-flex">
				<figure class="col-md-3 m-0">
					<h2 class="mb-0">DESIGN</h2>
					<!-- <img src="" alt=""> -->
				</figure>
				<div class="col-md-7 d-flex ">
					<input type="text" class="form-control">
					<ul class="d-flex mb-0 align-items-center h-100 list-none-nav">
						<li>Home</li>
						<li>Abouts</li>
						<li>Blog</li>
						<li>Contact</li>
					</ul>
				</div>
				<div class="col-md-2">
					<ul class="d-flex mb-0 align-items-center h-100 list-none-icons justify-content-end">
						<li class="bi bi-heart"></li>
						<li class="bi bi-bag"></li>
						<li class="bi bi-list"></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section class="section-uno">
		<article class="container-xl">
			<div class="row">
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-2">
							<i class="bi bi-house"></i>
						</div>
						<div class="col-md-10">
							<h4>Lorem, ipsum.</h4>
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-2">
							<i class="bi bi-house"></i>
						</div>
						<div class="col-md-10">
							<h4>Lorem, ipsum.</h4>
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-2">
							<i class="bi bi-house"></i>
						</div>
						<div class="col-md-10">
							<h4>Lorem, ipsum.</h4>
							<p>Lorem ipsum dolor sit, amet.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-2">
							<i class="bi bi-house"></i>
						</div>
						<div class="col-md-10">
							<h4>Lorem, ipsum.</h4>
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
	<section class="section-dos">
		<article class="container-xl">
			<div class="text-center p-4">
				<h5>Lorem ipsum, dolor.</h5>
				<h2>Unde ommis iste</h2>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita voluptates, dolorem repellendus a, nam assumenda!</p>
			</div>
			<div class="product-one owl-carousel">
				<?php for ($i=0; $i < 10; $i++) { ?>
					<div id="$i" class="prodcut-items">
						<figure class="">
							<img src="img/laptop.png" alt="" class="w-100 h-100">
						</figure>
						<ul>
							<li>nombre</li>
							<li>Descripcion</li>
							<li>Peso</li>
							<li>Capacidad</li>
							<li><b>Precio</b></li>
						</ul>
					</div>
				<?php } ?>
			</div>
		</article>
	</section>
	<section class="section-tres">
		<article class="container-xl">
			<div class="text-center">
				<h5>Lorem, ipsum, dolor.</h5>
				<h2>Mollit anim</h2>
			</div>
			<ul class='colap'>
				<li></li>
				<li></li>
				<li></li>
				<li class="d-flex">
					<figure class="w-50 h-100">
						<img src="img/laptops.png" alt="" class="w-100 h-100">
					</figure>
					<div>
						<h3>Lorem, ipsum, dolor.</h3>
					</div>
				</li>
			</ul>
		</article>
	</section>
	<section class="section-cuatro">
		<article class="container-xl">
			<div class="row">
				<div class="col-md-6">
					<h3>Unde ommis</h3>
				</div>
				<div class="col-md-6">
					<ul class="d-flex">
						<li>Top</li>
						<li>Dest</li>
						<li>Low</li>
						<li>Hide</li>
					</ul>
				</div>
			</div>
			<div class="product-two owl-carousel">
				<?php for ($i=0; $i < 10 ; $i++) { ?>
					<div id="$i" class="product-desta">
						<figure>
							<img src="img/audifonos.png" alt="" class="w-100 h-100">
						</figure>
						<h4>Title product</h4>
						<ul class="d-flex justify-content-between ps-0">
							<li>$12.00</li>
							<li><i class="bi bi-heart"></i></li>
						</ul>
					</div>
				<?php } ?>
			</div>
		</article>
	</section>
	<section class="section-cinco">
		<article class="container-xl">
			<div class="row">
				<div class="col-md-6">
					<h4>Magni Dolores</h4>
				</div>
				<div class="col-md-6">
					<h4>12:17:08:42</h4>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md-3 p-3">
					<div class="d-flex flex-column" style="background: white; box-shadow: 6px 8px 18px -2px #25262766;padding: 1rem;">
						<h3>Detalles</h3>
						<ul class="detalles ps-0">
							<li>Confort</li>
							<li>Calidad</li>
							<li>Estilo</li>
							<li>Glamourt</li>
							<li>Precio</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5" style="height: 550px;">
					<figure class="h-100 p-3">
						<img src="img/audifonos.png" alt="" class="w-100 h-100">
					</figure>
				</div>
				<div class="col-md-4">
					<div></div>
				</div>
			</div>
		</article>
	</section>
	<section class="section-seis">
		<article class="container-xl">
			<div class="product-three owl-carousel">
				<?php for ($i=0; $i < 10 ; $i++) { ?>
					<div id="$i" class="product-tips">
						<figure>
							<img src="img/escritorio.jpg" alt="" class="w-100 h-100">
						</figure>
						<div class="p-3">
							<h4>Title product</h4>
							<p>Lorem ipsum dolor, sit amet consectetur.</p>
						</div>
					</div>
				<?php } ?>
			</div>
		</article>
	</section>
	<section class="section-siete">
		<article class="container-xl">
			<h4>Lorem ipsum, dolor.</h4>
			<div class="row align-items-center">
				<div class="col-md-6">
					<h3>Ducimus qui</h3>
					<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Maxime, temporibus fugit dolores mollitia, ex rem. Esse non magnam fugiat nesciunt doloremque? Tempora, ex reiciendis! Quam esse libero error, corrupti sit.</p>
				</div>
				<div class="col-md-6">
					<div class="d-flex align-items-center">
						<input type="text" class="form-control">
						<button>Sending</button>
					</div>
				</div>
			</div>
		</article>
	</section>
	<footer>
		<div class="container-xl pt-5">
			<div class="row">
				<div class="col-md-3">
					<h5>About</h5>
					<ul class="footer-items">
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem ipsum, dolor.</li>
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem, ipsum, dolor.</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>Proveedores</h5>
					<ul class="footer-items">
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem, ipsum, dolor.</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>Contribuciones</h5>
					<ul class="footer-items">
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem ipsum, dolor.</li>
						<li>Lorem, ipsum dolor.</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>Address</h5>
					<ul class="footer-items">
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem, ipsum, dolor.</li>
						<li>Lorem ipsum, dolor.</li>
						<li>Lorem, ipsum, dolor.</li>
					</ul>
				</div>
			</div>
		</div>
		<hr>
		<div class="container-xl pb-2">
			<div class="row align-items-center">
				<div class="col-md-4 ">
					<p class="mb-0">Lorem ipsum dolor sit, amet consectetur.</p>
				</div>
				<div class="col-md-4">
					<ul class="footer-redes">
						<li><i class="bi bi-facebook"></i></li>
						<li><i class="bi bi-instagram"></i></li>
						<li><i class="bi bi-twitter"></i></li>
					</ul>
				</div>	
				<div class="col-md-4 text-end">
					<ul class="footer-money">
						<li><i class="bi bi-currency-dollar"></i></li>
						<li><i class="bi bi-currency-bitcoin"></i></li>
						<li><i class="bi bi-currency-yen"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="owlcarousel/owl.carousel.min.js"></script>
	<script type="text/javascript">
		$(`.product-one`).owlCarousel({
	      	loop:true,
	        margin:30,
	        nav:false,
	        autoplay:true,
	        autoplayTimeout:6000,
	        autoplayHoverPause:false,
	        responsive:{
	            0:{ items:1 },
	            500: { items:2 },
	            1000:{ items:4 }
	        }
	    });
	    $(`.product-two`).owlCarousel({
	    	loop:true,
	    	margin:30,
	    	nav:false,
	    	autoplay:true,
	    	autoplayTimeout:6000,
	    	autoplayHoverPause:false,
	    	responsive:{
	    		0:{ items:1 },
	    		500:{ items:2 },
	    		1000:{ items:4 }
	    	}
	    });
	    $(`.product-three`).owlCarousel({
	    	loop:true,
	    	margin:30,
	    	nav:false,
	    	autoplay:true,
	    	autoplayTimeout:6000,
	    	autoplayHoverPause:false,
	    	responsive:{
	    		0:{ items:1 },
	    		500:{ items:2 },
	    		1000:{ items:3 }
	    	}
	    });

	    $("document").ready(function(){
	    	var nav = $('nav');
	    	$(window).scroll(function(){
	    		if($(this).scrollTop() > 600){
	    			nav.addClass('nav-scroll');
	    		}else{
	    			nav.removeClass('nav-scroll');
	    		}
	    	});
	    })
	</script>
</body>
</html>