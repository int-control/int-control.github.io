@extends('app')

@section('content')
  <!-- slider Area Start-->
  <div class="slider-area">
    <div class="slider-active">
      <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
           style="background-size: cover"
           data-background="{{ asset('assets/img/hero/h1_hero.jpg') }}">

        <div class="container">
          <div class="row">
            <div class="col-lg-11">
              <div class="hero__caption">
                <h1 data-animation="fadeInUp" data-delay=".5s" style="color: #27AE60">Int</h1>
                <h1 data-animation="fadeInUp" data-delay=".5s" style="color: #27AE60">Control</h1>
                {{-- <div class="stock-text" data-animation="fadeInUp" data-delay=".8s"> --}}
                {{-- 	<h2>Control 2000</h2> --}}
                {{-- 	<h2>Control 2000</h2> --}}
                {{-- </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider Area End-->

  <!-- Services Area Start -->
  {{-- <div class="services-area1 section-padding30"> --}}
  {{-- 	<div class="container"> --}}
  {{-- 		<div class="row"> --}}
  {{-- 			<div class="col-lg-12"> --}}
  {{-- 				<div class="section-tittle mb-55"> --}}
  {{-- 					<div class="front-text"> --}}
  {{-- 						<h2>{{ __('app.home_page.services') }}</h2> --}}
  {{-- 					</div> --}}
  {{-- 					<span class="back-text">{{ __('app.home_page.services') }}</span> --}}
  {{-- 				</div> --}}
  {{-- 			</div> --}}
  {{-- 		</div> --}}

  {{-- 		<div class="row"> --}}
  {{-- 			<div class="col-xl-4 col-lg-4 col-md-6"> --}}
  {{-- 				@include('components.service-preview', [ --}}
  {{--   					'image' => 'assets/img/service/servicess2.png', --}}
  {{--   					'name' => trans('app.nav.services.repairs'), --}}
  {{-- 				]) --}}
  {{-- 			</div> --}}

  {{-- 			<div class="col-xl-4 col-lg-4 col-md-6"> --}}
  {{-- 				@include('components.service-preview', [ --}}
  {{--   					'image' => 'assets/img/service/servicess3.png', --}}
  {{--   					'name' => trans('app.nav.services.development'), --}}
  {{-- 				]) --}}
  {{-- 			</div> --}}

  {{-- 			<div class="col-xl-4 col-lg-4 col-md-6"> --}}
  {{-- 				@include('components.service-preview', [ --}}
  {{--   					'image' => 'assets/img/service/servicess1.png', --}}
  {{--   					'name' => trans('app.nav.services.consultations'), --}}
  {{-- 				]) --}}
  {{-- 			</div> --}}
  {{-- 		</div> --}}
  {{-- 	</div> --}}
  {{-- </div> --}}
  <!-- Services Area End -->

  <!-- About Area Start -->
  <section class="support-company-area fix" style="margin: 7rem 0 0">
    {{-- <div class="support-wrapper align-items-end"> --}}
    {{-- <div class="left-content"> --}}
    <div class="container">
      <div class="section-tittle section-tittle2 mb-25">
        <div class="front-text">
          <h2 class="">С какво се занимаваме?</h2>
        </div>
      </div>

      <div class="support-caption">
        <h4 class="pera-top">Предлагаме проектиране, инженерингови услуги и развойна дейност в следните области:</h4>

        <ul>
          <li style="list-style: initial" class="ml-30"><h5>минно-добивна и преработвателна индустрия</h5></li>
          <li style="list-style: initial" class="ml-30"><h5>фармация</h5></li>
          <li style="list-style: initial" class="ml-30"><h5>хранително-вкусова промишленост</h5></li>
          <li style="list-style: initial" class="ml-30"><h5>електроника, електронни изделия</h5></li>
          <li style="list-style: initial" class="ml-30"><h5>електрозадвижвания</h5></li>
          <li style="list-style: initial" class="ml-30"><h5>рециклиране</h5></li>
          <li style="list-style: initial" class="ml-30"><h5>машиностроене</h5></li>
          <li style="list-style: initial" class="ml-30"><h5>енергетика - ВЕЦ, ТЕЦ, ФВЕЦ</h5></li>
        </ul>

        {{-- <a href="" class="btn red-btn2 mt-30">{{ trans('app.general.read_more') }}</a> --}}
      </div>
      {{-- </div> --}}
      {{-- </div> --}}

      {{-- <div class="right-content"> --}}
      {{-- 	<div class="right-img"> --}}
      {{-- 		<img src="{{ asset('assets/img/gallery/safe_in.png') }}" alt=""> --}}
      {{-- 	</div> --}}

      {{-- 	<div class="support-img-cap text-center"> --}}
      {{-- 		<span>2009</span> --}}
      {{-- 		<p>Since</p> --}}
      {{-- 	</div> --}}
      {{-- </div> --}}
    </div>
  </section>
  <!-- About Area End -->

  <!-- Project Area Start -->
  <section class="project-area  section-padding30">
    <div class="container">
      <div class="project-heading mb-35">
        <div class="row align-items-end">
          <div class="col-lg-12">
            <div class="section-tittle section-tittle3">
              <div class="front-text">
                <h2 class="">Дейности</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
               aria-labelledby="nav-home-tab">
            <div class="project-caption">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  @include('components.project-preview', [
                    'image' => 'assets/img/projects/development-electronic-devices.jpg',
                    'link' => '/activities/development-electronic-devices',
                    'name1' => 'Разработване, проектиране и производство на електронни устройства и системи за управление на технологични процеси',
                   ])
                </div>

                <div class="col-lg-4 col-md-6">
                  @include('components.project-preview', [
                    'image' => 'assets/img/projects/technological-processes.jpg',
                    'link' => '/activities/technological-processes',
                    'name1' => 'Управление на технологични процеси',
                   ])
                </div>

                <div class="col-lg-4 col-md-6">
                  @include('components.project-preview', [
                    'image' => 'assets/img/projects/measurement-of-quantities.jpg',
                    'link' => '/activities/measurement-of-quantities',
                    'name1' => 'Измерване на електрически и неелектрически величини',
                   ])
                </div>

                <div class="col-lg-4 col-md-6">
                  @include('components.project-preview', [
                    'image' => 'assets/img/projects/electrical-panels.jpg',
                    'link' => '/activities/electrical-panels',
                    'name1' => 'Проектиране и производство на електрически табла',
                   ])
                </div>

                <div class="col-lg-4 col-md-6">
                  @include('components.project-preview', [
                    'image' => 'assets/img/projects/software-development.jpg',
                    'link' => '/activities/software-development',
                    'name1' => 'Разработване на програмно осигуряване',
                   ])
                </div>

                <div class="col-lg-4 col-md-6">
                  @include('components.project-preview', [
                    'image' => 'assets/img/projects/machinery-and-equipment.jpg',
                    'link' => '/activities/machinery-and-equipment',
                    'name1' => 'Реконструкция и модернизация на машини и съоръжения',
                   ])
                </div>

                <div class="col-lg-4 col-md-6">
                  @include('components.project-preview', [
                    'image' => 'assets/img/projects/production-systems.jpg',
                    'link' => '/activities/production-systems',
                    'name1' => 'Проучвания и анализи на производствени системи',
                   ])
                </div>

                <div class="col-lg-4 col-md-6">
                  @include('components.project-preview', [
                    'image' => 'assets/img/projects/electrical-components.jpg',
                    'link' => '/activities/electrical-components',
                    'name1' => 'Доставка на електронни и електро компоненти',
                   ])
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Project Area End -->

  <!-- contact with us Start -->
  <section class="contact-with-area" data-background="{{ asset('assets/img/gallery/section-bg2.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-9 offset-xl-1 offset-lg-1">
          <div class="contact-us-caption">
            <div class="team-info mb-30 pt-45">
              <div class="section-tittle section-tittle4">
                <div class="front-text">
                  <h2 class="">Свържи се с нас</h2>
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
  <!-- contact with us End-->

  <!-- CountDown Area Start -->
  {{-- <div class="count-area"> --}}
  {{-- 	<div class="container"> --}}
  {{-- 		<div class="count-wrapper count-bg" data-background="assets/img/gallery/section-bg3.jpg"> --}}
  {{-- 			<div class="row justify-content-center"> --}}
  {{-- 				<div class="col-lg-4 col-md-4 col-sm-6"> --}}
  {{-- 					<div class="count-clients"> --}}
  {{-- 						<div class="single-counter"> --}}
  {{-- 							<div class="count-number"> --}}
  {{-- 								<span class="counter">124</span> --}}
  {{-- 							</div> --}}
  {{-- 							<div class="count-text"> --}}
  {{-- 								<p>Завършени</p> --}}
  {{-- 								<h5>проекта</h5> --}}
  {{-- 							</div> --}}
  {{-- 						</div> --}}
  {{-- 					</div> --}}
  {{-- 				</div> --}}

  {{-- 				<div class="col-lg-4 col-md-4 col-sm-6"> --}}
  {{-- 					<div class="count-clients"> --}}
  {{-- 						<div class="single-counter"> --}}
  {{-- 							<div class="count-number"> --}}
  {{-- 								<span class="counter">124</span> --}}
  {{-- 							</div> --}}
  {{-- 							<div class="count-text"> --}}
  {{-- 								<p>Завършени</p> --}}
  {{-- 								<h5>проекта</h5> --}}
  {{-- 							</div> --}}
  {{-- 						</div> --}}
  {{-- 					</div> --}}
  {{-- 				</div> --}}

  {{-- 				<div class="col-lg-4 col-md-4 col-sm-6"> --}}
  {{-- 					<div class="count-clients"> --}}
  {{-- 						<div class="single-counter"> --}}
  {{-- 							<div class="count-number"> --}}
  {{-- 								<span class="counter">124</span> --}}
  {{-- 							</div> --}}
  {{-- 							<div class="count-text"> --}}
  {{-- 								<p>Завършени</p> --}}
  {{-- 								<h5>проекта</h5> --}}
  {{-- 							</div> --}}
  {{-- 						</div> --}}
  {{-- 					</div> --}}
  {{-- 				</div> --}}
  {{-- 			</div> --}}
  {{-- 		</div> --}}
  {{-- 	</div> --}}
  {{-- </div> --}}
  <!-- CountDown Area End -->

  <!-- Team Start -->
  {{-- <div class="team-area section-padding30"> --}}
  {{--   <div class="container"> --}}
  {{--     <div class="row"> --}}
  {{--       <div class="col-xl-12"> --}}
  {{--         <!-- Section Tittle --> --}}
  {{--         <div class="section-tittle section-tittle5 mb-50"> --}}
  {{--           <div class="front-text"> --}}
  {{--             <h2 class="">Our team</h2> --}}
  {{--           </div> --}}
  {{--           <span class="back-text">exparts</span> --}}
  {{--         </div> --}}
  {{--       </div> --}}
  {{--     </div> --}}
  {{--     <div class="row"> --}}
  {{--       <!-- single Tem --> --}}
  {{--       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-"> --}}
  {{--         <div class="single-team mb-30"> --}}
  {{--           <div class="team-img"> --}}
  {{--             <img src="assets/img/team/team1.png" alt=""> --}}
  {{--           </div> --}}
  {{--           <div class="team-caption"> --}}
  {{--             <span>UX Designer</span> --}}
  {{--             <h3>Ethan Welch</h3> --}}
  {{--           </div> --}}
  {{--         </div> --}}
  {{--       </div> --}}
  {{--       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-"> --}}
  {{--         <div class="single-team mb-30"> --}}
  {{--           <div class="team-img"> --}}
  {{--             <img src="assets/img/team/team2.png" alt=""> --}}
  {{--           </div> --}}
  {{--           <div class="team-caption"> --}}
  {{--             <span>UX Designer</span> --}}
  {{--             <h3>Ethan Welch</h3> --}}
  {{--           </div> --}}
  {{--         </div> --}}
  {{--       </div> --}}
  {{--       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-"> --}}
  {{--         <div class="single-team mb-30"> --}}
  {{--           <div class="team-img"> --}}
  {{--             <img src="assets/img/team/team3.png" alt=""> --}}
  {{--           </div> --}}
  {{--           <div class="team-caption"> --}}
  {{--             <span>UX Designer</span> --}}
  {{--             <h3>Ethan Welch</h3> --}}
  {{--           </div> --}}
  {{--         </div> --}}
  {{--       </div> --}}
  {{--     </div> --}}
  {{--   </div> --}}
  {{-- </div> --}}
  <!-- Team End -->

  {{-- <!-- Testimonial Start --> --}}
  {{-- <div class="testimonial-area t-bg testimonial-padding"> --}}
  {{-- 	<div class="container "> --}}
  {{-- 		<div class="row"> --}}
  {{-- 			<div class="col-xl-12"> --}}
  {{-- 				<!-- Section Tittle --> --}}
  {{-- 				<div class="section-tittle section-tittle6 mb-50"> --}}
  {{-- 					<div class="front-text"> --}}
  {{-- 						<h2 class="">Testimonial</h2> --}}
  {{-- 					</div> --}}
  {{-- 					<span class="back-text">Feedback</span> --}}
  {{-- 				</div> --}}
  {{-- 			</div> --}}
  {{-- 		</div> --}}
  {{-- 		<div class="row"> --}}
  {{-- 			<div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1"> --}}
  {{-- 				<div class="h1-testimonial-active"> --}}
  {{-- 					<!-- Single Testimonial --> --}}
  {{-- 					<div class="single-testimonial"> --}}
  {{-- 						<!-- Testimonial Content --> --}}
  {{-- 						<div class="testimonial-caption "> --}}
  {{-- 							<div class="testimonial-top-cap"> --}}
  {{-- 								<!-- SVG icon --> --}}
  {{-- 								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" --}}
  {{-- 									 width="86px" height="63px"> --}}
  {{-- 									<path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 95, 19)" --}}
  {{-- 										  fill-opacity="0" fill="rgb(0, 0, 0)" --}}
  {{-- 										  d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/> --}}
  {{-- 								</svg> --}}
  {{-- 								<p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit --}}
  {{-- 									esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat --}}
  {{-- 									non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore --}}
  {{-- 									mofllit anim. Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate --}}
  {{-- 									velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjn.</p> --}}
  {{-- 							</div> --}}
  {{-- 							<!-- founder --> --}}
  {{-- 							<div class="testimonial-founder d-flex align-items-center"> --}}
  {{-- 								<div class="founder-text"> --}}
  {{-- 									<span>Jessya Inn</span> --}}
  {{-- 									<p>Co Founder</p> --}}
  {{-- 								</div> --}}
  {{-- 							</div> --}}
  {{-- 						</div> --}}
  {{-- 					</div> --}}
  {{-- 					<!-- Single Testimonial --> --}}
  {{-- 					<div class="single-testimonial"> --}}
  {{-- 						<!-- Testimonial Content --> --}}
  {{-- 						<div class="testimonial-caption "> --}}
  {{-- 							<div class="testimonial-top-cap"> --}}
  {{-- 								<!-- SVG icon --> --}}
  {{-- 								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" --}}
  {{-- 									 width="86px" height="63px"> --}}
  {{-- 									<path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 95, 19)" --}}
  {{-- 										  fill-opacity="0" fill="rgb(0, 0, 0)" --}}
  {{-- 										  d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/> --}}
  {{-- 								</svg> --}}
  {{-- 								<p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit --}}
  {{-- 									esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat --}}
  {{-- 									non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore --}}
  {{-- 									mofllit anim. Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate --}}
  {{-- 									velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjn.</p> --}}
  {{-- 							</div> --}}
  {{-- 							<!-- founder --> --}}
  {{-- 							<div class="testimonial-founder d-flex align-items-center"> --}}
  {{-- 								<div class="founder-text"> --}}
  {{-- 									<span>Jessya Inn</span> --}}
  {{-- 									<p>Co Founder</p> --}}
  {{-- 								</div> --}}
  {{-- 							</div> --}}
  {{-- 						</div> --}}
  {{-- 					</div> --}}
  {{-- 				</div> --}}
  {{-- 			</div> --}}
  {{-- 		</div> --}}
  {{-- 	</div> --}}
  {{-- </div> --}}
  {{-- <!-- Testimonial End --> --}}

  <!--latest News Area start -->
  {{-- <div class="latest-news-area section-padding30"> --}}
  {{--   <div class="container"> --}}
  {{--     <div class="row"> --}}
  {{--       <div class="col-xl-12"> --}}
  {{--         <!-- Section Tittle --> --}}
  {{--         <div class="section-tittle section-tittle7 mb-50"> --}}
  {{--           <div class="front-text"> --}}
  {{--             <h2 class="">{{ trans('app.home_page.news') }}</h2> --}}
  {{--           </div> --}}
  {{--         </div> --}}
  {{--       </div> --}}
  {{--     </div> --}}

  {{--     <div class="row"> --}}
  {{--       <div class="col-xl-6 col-lg-6 col-md-6"> --}}
  {{--         @include('components.news-preview', ['image' => 'assets/img/david/david_1.png']) --}}
  {{--       </div> --}}

  {{--       <div class="col-xl-6 col-lg-6 col-md-6"> --}}
  {{--         @include('components.news-preview', ['image' => 'assets/img/david/david_2.png']) --}}
  {{--       </div> --}}
  {{--     </div> --}}
  {{--   </div> --}}
  {{-- </div> --}}
  <!--latest News Area End -->
@endsection('content')
