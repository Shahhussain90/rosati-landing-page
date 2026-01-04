@extends('index')


@section('title', 'Home')



@section('content')


    <section class="grids-divs">
        <div class="container my-5">
            <div class="row no-gutters justify-content-center">

                <div class="col-12 col-md-4 px-2">
                    <div class="info-box text-center">
                        <i class='bx bx-coffee-cup info-icon'></i>
                        <h5 class="mt-3">Made With Love</h5>
                        <p class="text-muted mb-0">
                            Organic coffee and wholesome food crafted with passion and care.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 px-2">
                    <div class="info-box text-center"
                        style="border-left: 1px solid #d5d5d5a8; border-right: 1px solid #d5d5d5;">
                        <i class='bx bx-seal-check info-icon'></i>
                        <h5 class="mt-3">Fresh Ingredients</h5>
                        <p class="text-muted mb-0">
                            Carefully selected, high-quality ingredients used fresh every day.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 px-2">
                    <div class="info-box text-center">
                        <i class='bx bx-sun-fog info-icon'></i>
                        <h5 class="mt-3">Cozy Ambience</h5>
                        <p class="text-muted mb-0">
                            A warm, inviting space designed for comfort, calm, and meaningful moments.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- 3 grids section done --}}




    {{-- visit us section  --}}

    <section class="visit-us-section">

        <div>
            <video src="{{ asset('assets\images\visti-us video.mp4') }}" autoplay muted loop class="visit-us-video">
        </div>
        <div class="visit-us-text-div">
            <h2>Visit Us Today</h2>
            <p class="text-muted">
                Experience the perfect blend of rich aromas, delicious flavors, and a cozy atmosphere at Cafe
                Gillbert. Whether you're catching up with friends, working remotely, or simply unwinding with a
                cup of our finest brew, we invite you to make yourself at home. Come visit us and discover your new
                favorite spot in town!</p>
            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft see-full-menu-btn">See menu</a>

        </div>

    </section>

    {{-- visit us section  done --}}




    {{-- popular dishes --}}

    <section class="popular-dishes my-5">
        <div class="txt_div">
            <div class="pupular_dish_line"></div>
            <div>
                <h3>popular dishes</h3>
            </div>
            <div class="pupular_dish_line"></div>
        </div>

        <div class="grid-container">
            <div class="grid-item">
                <img src="{{ asset('assets\images\pop-food-1.jpg') }}" alt="Image 3">
                <h3>Avacado Toast </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('assets\images\pop-food-2.jpg') }}" alt="Image 3">
                <h3>Avacado Toast </h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id.</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('assets\images\pop-food-3.jpg') }}" alt="Image 3">
                <h3>Avacado Toast </h3>
                <p>Morbi blandit cursus risus at ultrices mi tempus imperdiet.</p>
            </div>
        </div>


    </section>


    {{-- popular dishes end --}}



    {{-- see menu btn --}}
    <div class="text-center">
        <a href="#" class="btn btn-primary py-sm-3 px-sm-5 animated slideInLeft see-full-menu-btn">
            See full menu
        </a>
    </div>
    {{-- see menu btn done --}}

   <section class="full-menu" id="fullMenu">
    <div class="menu-card">
        <h2 class="menu-title">Sample Menu</h2>

        <div class="menu-columns">
            <!-- LEFT COLUMN -->
            <div class="menu-column">
                <h3 class="menu-heading">Clean Eating</h3>

                <div class="menu-item">
                    <span class="item-name">Garden Egg Mash</span>
                    <span class="item-price">$2.99</span>
                </div>
                <p class="item-desc">Fresh garden eggs mashed with light spices</p>

                <div class="menu-item">
                    <span class="item-name">Hotte Fresh – with Bread</span>
                    <span class="item-price">$5.99</span>
                </div>
                <p class="item-desc">Served with warm bread and herbs</p>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="menu-column">
                <h3 class="menu-heading">Desserts</h3>

                <div class="menu-item">
                    <span class="item-name">Lemon Fresh Paste</span>
                    <span class="item-price">$3.99</span>
                </div>
                <p class="item-desc">Soft lemon paste with cream</p>

                <div class="menu-item">
                    <span class="item-name">Puff Bread, Butter</span>
                    <span class="item-price">$4.50</span>
                </div>
                <p class="item-desc">Light puff bread served warm</p>
            </div>
        </div>

        {{-- <div class="text-center mt-4">
            <button class="view-menu-btn">View Full Menu</button>
        </div> --}}
    </div>
</section>




























@endsection
