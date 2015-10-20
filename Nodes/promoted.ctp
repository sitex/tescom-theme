
<div class="container">
	<div class="row slider">

		<div class="iosSlider" style="background: url(/theme/Tes/img/slider1.jpg) no-repeat center center;">
			<div class="slider">
				<div class="item" id="item1">
					<!-- <div class="image" style="background: url(/img/slider1.jpg) no-repeat center top;"></div> -->
					<div class="text">
						<div class="title">
							<span>Наши услуги помогут вам:</span>
						</div>
						<div class="desc">
							<span>Сосредоточиться на непосредственном ведении бизнеса</span>
						</div>
					</div>
				</div>
				<div class="item" id="item2">
					<!-- <div class="image" style="background: url(/img/slider1.jpg) no-repeat center top;"></div> -->
					<div class="text">
						<div class="title">
							<span>Наши услуги помогут вам:</span>
						</div>
						<div class="desc">
							<span>Снизить затраты и повысить доходы</span>
						</div>
					</div>
				</div>
				<div class="item" id="item3">
					<!-- <div class="image" style="background: url(/img/slider1.jpg) no-repeat center top;"></div> -->
					<div class="text">
						<div class="title">
							<span>Наши услуги помогут вам:</span>
						</div>
						<div class="desc">
							<span>Оптимизировать налогооблажение</span>
						</div>
					</div>
				</div>
			</div>
			<div class="prevButton"></div>
			<div class="nextButton"></div>
		</div>

	</div>
</div>

<div class="spacer space2"><!-- vertical spacer --></div>

<!--<div class="container">-->
<!--	<div class="row">-->
<!--		<div id="content" class="span8 offset2">-->
<!--			<h1>Сайт находится в стадии доработки и наполнения</h1>-->
<!--			<p>Мы рады приветствовать Вас на нашем обновленном сайте. В настоящий момент он проходит доработку и наполнение, поэтому просим Вас отнестись с пониманием к тому, что не все разделы сайта функционируют в полном объеме.</p>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->

<script type="text/javascript">
	$(document).ready(function() {

		$('.iosSlider').iosSlider({
			infiniteSlider: true,
			snapToChildren: true,
			desktopClickDrag: true,
			navPrevSelector: $('.prevButton'),
			navNextSelector: $('.nextButton')
		});

	});
</script>
