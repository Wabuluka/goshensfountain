@extends('layout')


@section('title')
{{trans('strings.Home')}}
@stop
@section('desctription', 'Goshens Fountain of Nutrition and Health is operating a Mobile Nutrition Clinic to address Nutrition issues among the children, pregnant and lactating mothers and PLWHIV/AIDS undergoing Anti-Retroviral Treatment. We are currently running the Nutrition clinic in Goma Health Center 3 in Mukono – Uganda and the surrounding villages. We shall be rolling out the clinic services to the rest of the country')
@section('keywords', 'Goshens, Fountain, Health, Uganda, Pregnant Women in Uganda, OVC, mukono, children with AIDS, Nutrition in Uganda')
@section('content')
<section id="LandingPage">
        <div class="container LandingPage">
            <div class="row">
                <div class="col-6 LanginPageLeft">
                    <h1>Discover your talent</h1>
                    <p class="lead">The fact that these children are orphans does not deny the fact that God created them each with their talents</p>

                    <p class="small alert-danger">Please note that this website is still under construction, check back for updates</p>
                </div>
                <div class="col-4 LanginPageRight text-right small">
                    
                </div>
            </div>
        </div>
    </section>
    <!--simple about us-->
    <section id="LandingPageSimpleIntro">
        <div class="container LandingPageSimpleIntro">
            <div class="row">
                <div class="col-12 mt-1 text-lg-center">
                    <h1><strong>Goshen’s Fountain of Nutrition and Health</strong></h1>
                    <p class="lead">Goshen’s Fountain of Nutrition and Health is an indigenous Non-Governmental Organization (NGO) Registered on the 30th September 2015 under the Uganda National Bureau for NGOs. Goshen’s has implemented different Nutrition, Health  & Economic Empowerment projects among OVCs and their caregivers, PLWHIV & TB, Pregnant mothers, Low income women and the youth in & out of school. Across this spectrum, a total of 2,500 livelihoods have been positively impacted.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Section for the vision on the homepage-->
    <<section id="missionSection">
        <div class="container">
            <div class="row text-lg-center">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card-group">
                      <div class="card rounded-0">
                        <div class="card-body">
                          <h5 class="card-title">MISSION</h5>
                          <p class="card-text"><strong>Improving Nutrition and Heath through Community Participation</strong></p>
                        </div>
                      </div>
                      <div class="card rounded-0">
                        <div class="card-body">
                          <h5 class="card-title">MAIN GOAL</h5>
                          <p class="card-text"><strong>To empower individuals, Households and Communities with Resources for Sustainable food and Nutrition Security</strong></p>
                        </div>
                      </div>
                      <div class="card rounded-0">
                        <div class="card-body">
                          <h5 class="card-title">VISION</h5>
                          <p class="card-text"><strong>A Productive and Health Population</strong></p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>
    <!--section on the homepage with the youtube video-->
    <section id="homepageVid">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <iframe width="760" height="315" src="https://www.youtube-nocookie.com/embed/BTB83fPO4O4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-4">
                    <p class="lead right">Goshen’s Fountain of Nutrition and Health is a Non-profit Organisation with focus on improving nutrition status of pregnant women, breast feeding mothers and children.</p>
                </div>
            </div>
        </div>
    </section>     
@endsection