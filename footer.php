
<footer>
        <section class="metodologia">
			<div class="center">
				<h2>Conheça nossos Serviços</h2>
				<p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por whatsapp ou por e-mail.</p>
				<a href="" target="_blank">Entrar Contato</a>
			</div>
		</section>

<?php if(is_404() == false){ ?>
		<section id="contato" class="contato">
			<div class="center">
			<h2 class="contato-info">Se preferir informe seus dados <br> e entraremos em contato!</h2>

				<div class="w50 contato-info">
					<div class="mapa-container">
						<div id="mapa"></div>
					</div><!--mapa-->
				</div>

				<div class="w50 contato-form">
					<form>
						<input placeholder="Nome" type="text" />
						<input placeholder="E-mail" type="text" />
							<input placeholder="Telefone" type="text" />
						<textarea placeholder="Mensagem"></textarea>
						<input type="submit" value="Enviar!">
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</section>
        <?php } ?>
        
		<div class="center footer" style="padding-top:50px;">
			<div class="col-footer">
				<h2>Telefone</h2>
				<a href="" target="_blank">(88) 9.9669-1112</a>
			</div>
			<div class="col-footer">
				<h2>e-mail</h2>
				<a href="https://outlook.live.com/owa/" target="_blank">carroceriascariri@hotmail.com</a>
			</div>
			<div class="col-footer">
				<h2>instagram</h2>
				<a href="https://www.instagram.com/carrocerias_cariri/" target="_blank">carrocerias_cariri</a>
			</div>

			<div style="width: 40%;text-align: right;" class="col-footer">
				<img src="<?php echo get_theme_root_uri(); ?>/carroceriascariri/images/logowe.png" style="width: 150px;" />
			</div>
		</div>
	</footer>

	<footer class="footer2">
			<div class="center">
				<div class="w50">
					<p>Todos os direitos reservados ™ Carrocerias Cariri</p>
				</div>
				<div class="w50">
					<p class="autor">2022 © Copyright - Kevyn Bezerra Ladislau</p>
				</div>
			</div>
    	</footer>


	<script src="<?php echo get_theme_root_uri(); ?>/carroceriascariri/js/jquery.js"></script>
	<script src="<?php echo get_theme_root_uri(); ?>/carroceriascariri/js/slick.min.js"></script>
	<script type="text/javascript">
		$('section.clientes-slider .slider-container').slick({
			dots: true,
			arrows:false,
			infinite: false,
			speed:1000,
			slidesToShow: 1,
			autoplay: true,
			centerMode:false,
			autoplaySpeed: 3000,
			pauseOnHover:false,
			responsive: 
			[
			{
			breakpoint: 768,
			settings: {
				slidesToShow: 2
			}
			}
			]
		});

		$('section.depoimentos .depoimentos-box').slick({
			dots: true,
			arrows:false,
			infinite: true,
			speed:1000,
			slidesToShow: 1,
			centerMode:false
		});
	</script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo get_theme_root_uri(); ?>/carroceriascariri/js/map.js"></script>
	<script>
		//Menu responsivo.
		$('.menu-mobile i').click(function(){
			$('.menu-mobile').find('ul').slideToggle();
		})
	</script>
</body>
</html>
<?php wp_footer(); ?>