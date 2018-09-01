@extends('layout')
@section('content')
        <header id="landingpage"> 
            <div class="container">
                <div class="row">
                    <div class="col-6 LanginPageLeft">
                        <h1>Discover your talent</h1>
                        <p class="lead">The fact that these children are orphans does not deny the fact that God created them each with their talents</p>

                    <a href="#" class="btn btn-primary">Find out more</a>
                    </div>
                    <div class="col-4 LanginPageRight text-right small">
                        
                    </div>
                </div>
            </div>
        </header><!-- /header -->

        <main id="begin">
             <!--simple about us-->
        <section id="LandingPageSimpleIntro">
            <div class="container LandingPageSimpleIntro">
                <div class="row">
                    <div class="col-12 mt-1 text-lg-center intro">
                        <h1><strong>Goshen’s Fountain of Nutrition and Health</strong></h1>
                        <p class="lead">Goshen’s Fountain of Nutrition and Health is an indigenous Non-Governmental Organization (NGO) Registered on the 30th September 2015 under the Uganda National Bureau for NGOs. For the past Two (2) years, Goshen’s has implemented different Nutrition, Health  & Economic Empowerment projects among OVCs and their caregivers, PLWHIV & TB, Pregnant mothers, Low income women and the youth in & out of school. Across this spectrum, a total of 2,500 livelihoods have been positively impacted.
Malnutrition will represent an often invisible impediment to the successful achievement of the SDGs. It results not just from a lack of sufficient and adequately nutritious and safe food, but from a host of intertwined factors linking health, care, education, water, sanitation and hygiene, access to food and resources, women’s empowerment and more.</p>
                    </div>
                </div>
            </div>
            <div class="container pricing">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-6">
                        <div class="card-group">
                        <div class="card align-self-center mr-2 mission-card">
                            <div class="card-body">
                                <h5 class="card-title">Mission</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                        <div class="card align-self-center mr-2 goal-card">
                            <div class="card-body">
                                <h5 class="card-title">Goal</h5>
                                <p class="card-text">To empower individuals, Households and Communities with Resources for Sustainable food and Nutrition Security</p>
                            </div>
                        </div>
                        <div class="card align-self-center vision-card">
                            <div class="card-body">
                                <h5 class="card-title">Vision</h5>
                                <p class="card-text">A Productive and Health Population</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div id="landingpagesubscription">
                <div class="container mt-5 mb-5">
                    <form class="form-inline">
                      <div class="form-group mx-sm-3 mb-2">
                        <input type="email" class="form-control" id="inputemail" placeholder="email">
                      </div>
                      <button type="submit" class="btn btn-primary mb-2">accept</button>
                    </form>
                </div>
            </div>
        </section>
        
        </main> 
@endsection