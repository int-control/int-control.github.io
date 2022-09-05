@extends('app')

@section('content')
  <!-- slider Area Start-->
  <div class="slider-area">
    <div class="slider-active">
      <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
           data-background="{{ asset('assets/img/hero/h1_hero.jpg') }}">

        <div class="container">
          <div class="row">
            <div class="col-lg-11">
              <div class="hero__caption">
                <h1 data-animation="fadeInUp" data-delay=".5s">Дейности</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider Area End-->

  <section class="project-area  section-padding30">
    <div class="container">
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
@endsection('content')
