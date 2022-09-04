@extends('app')

@section('content')
	{{-- <div class="slider-area "> --}}
	{{-- 	<div class="single-slider hero-overly slider-height2 d-flex align-items-center" --}}
	{{-- 		 data-background="assets/img/hero/about.jpg"> --}}
	{{-- 		<div class="container"> --}}
	{{-- 			<div class="row"> --}}
	{{-- 				<div class="col-xl-12"> --}}
	{{-- 					<div class="hero-cap pt-100"> --}}
	{{-- 						<h2>{{ trans('app.nav.contacts') }}</h2> --}}
	{{-- 					</div> --}}
	{{-- 				</div> --}}
	{{-- 			</div> --}}
	{{-- 		</div> --}}
	{{-- 	</div> --}}
	{{-- </div> --}}

	<section class="contact-with-area" data-background="assets/img/gallery/section-bg2.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-9 offset-xl-1 offset-lg-1">
					<div class="contact-us-caption">
						<div class="team-info mb-30 pt-45">
							<div class="section-tittle section-tittle4">
								<div class="front-text">
									<h2 class="mb-5">Свържи се с нас</h2>
								</div>
							</div>

							<p style="font-size: 20px">
								<i class="fa-solid fa-location-dot"></i>
								<span class="pl-2">
									1407 гр. София, кв. "Кръстова вада", ул. "Ген. Иван Колев" №31
								</span>
							</p>

							<p style="font-size: 20px">
								<i class="fa-solid fa-envelope"></i>
								<span class="pl-2">
									<a href="mailto:office@int-control.com">office@int-control.com</a>
								</span>
							</p>

							<p style="font-size: 20px">
								<i class="fa-solid fa-phone"></i>
								<span class="pl-2">
									<a href="tel:+359888494276">0888 494 276</a>
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- <div class="container py-5"> --}}
	{{-- 	<div class="media py-4"> --}}
	{{-- 		<span class="contact-info__icon"><i class="ti-home"></i></span> --}}
	{{-- 		<div class="media-body"> --}}
	{{-- 			<h4>кв. "Кръстова вада", ул. "Ген. Иван Колев" №31, гр. София 1407</h4> --}}
	{{-- 		</div> --}}
	{{-- 	</div> --}}

	{{-- 	<div class="media py-4"> --}}
	{{-- 		<span class="contact-info__icon"><i class="ti-tablet"></i></span> --}}
	{{-- 		<div class="media-body"> --}}
	{{-- 			<h4><a href="tel:+359888494276">0888 494 276</a></h4> --}}
	{{-- 		</div> --}}
	{{-- 	</div> --}}

	{{-- 	<div class="media py-4"> --}}
	{{-- 		<span class="contact-info__icon"><i class="ti-email"></i></span> --}}
	{{-- 		<div class="media-body"> --}}
	{{-- 			<h4><a href="mailto:office@int-control.com">office@int-control.com</a></h4> --}}
	{{-- 		</div> --}}
	{{-- 	</div> --}}
	{{-- </div> --}}
@endsection('content')
