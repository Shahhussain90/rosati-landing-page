@extends('index')


@section('title', 'Home')



@section('content')


    <section class="grids-divs" style="overflow: hidden">
        <div class="container my-5" data-aos="fade-up" data-aos-duration="500">
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

    <section class="visit-us-section" style="overflow: hidden">

        <div>
            <video src="{{ asset('assets\images\visti-us video.mp4') }}" autoplay muted loop class="visit-us-video">
        </div>
        <div class="visit-us-text-div" style="overflow: hidden">
            <h2 data-aos="fade-left" data-aos-duration="500">Visit Us Today</h2>
            <p class="text-muted" data-aos="fade-left" data-aos-duration="500">
                Experience the perfect blend of rich aromas, delicious flavors, and a cozy atmosphere at
                Cafe Rosati. Whether you're catching up with friends, working remotely, or simply unwinding with a
                cup of our finest brew, we invite you to make yourself at home. Come visit us and discover your new
                favorite spot in town!</p>
            <a href="#popularDishes" class="btn btn-primary py-sm-3 px-sm-5 me-3" data-aos="fade-left"
                data-aos-duration="1000">See
                popular dishes</a>

        </div>

    </section>

    {{-- visit us section  done --}}




    {{-- popular dishes --}}

    <section class="popular-dishes my-5" id="popularDishes">
        <div class="txt_div" style="overflow: hidden">
            <div class="pupular_dish_line" data-aos="zoom-in" data-aos-duration="300"></div>
            <div>
                <h3 data-aos="zoom-in" data-aos-duration="1000">popular dishes</h3>
            </div>
            <div class="pupular_dish_line" data-aos="zoom-in" data-aos-duration="300"></div>
        </div>

        <div class="grid-container" style="overflow: hidden">
            <div class="grid-item" data-aos="flip-left" data-aos-duration="500" data-aos-delay="250">
                <img src="{{ asset('assets\images\pop-food-1.jpg') }}" alt="Image 3">
                <h3>buttermilk pancakes</h3>
                <p>Simple, classic, and hearty.</p>
            </div>
            <div class="grid-item" data-aos="flip-left" data-aos-duration="500" data-aos-delay="450">
                <img src="{{ asset('assets\images\pop-food-2.jpg') }}" alt="Image 3">
                <h3>buttermilk pancakes</h3>
                <p>Golden-brown pancakes drizzled with syrup and topped with fresh blueberries and raspberries.</p>
            </div>
            <div class="grid-item " data-aos="flip-left" data-aos-duration="500" data-aos-delay="750">
                <img src="{{ asset('assets\images\pop-food-3.jpg') }}" alt="Image 3">
                <h3>Bistro Grilled Salad</h3>
                <p id="Mcardssss">Classic cafe greens paired with herb-marinated grilled chicken.</p>
            </div>
        </div>


    </section>


    {{-- popular dishes end --}}



    {{-- see menu btn --}}
    <div class="menu-heading-div">
        {{-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft see-full-menu-btn">View Full Menu
            <i class="fas fa-arrow-down" ></i></a> --}}
        <div class="txt_div" style="overflow: hidden">
            <div class="pupular_dish_line" data-aos="zoom-in" data-aos-duration="300"></div>
            <div>
                <h3 data-aos="zoom-in">Our Offerings</h3>
            </div>
            <div class="pupular_dish_line" data-aos="zoom-in" data-aos-duration="300"></div>
        </div>
    </div>
    {{-- see menu btn done --}}


    <section class="full-menu" style="overflow: hidden">

        <div class="menu-card" data-aos="fade-right" data-aos-duration="500">
            <h2 class="menu-title">Food & Desserts</h2>

            <div class="menu-columns">
                <!-- CLEAN EATING -->
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

                    <div class="menu-item">
                        <span class="item-name">Grilled Chicken Bowl</span>
                        <span class="item-price">$8.99</span>
                    </div>
                    <p class="item-desc">Lean grilled chicken with brown rice and vegetables</p>
                </div>

                <!-- DESSERTS -->
                <div class="menu-column">
                    <h3 class="menu-heading">Desserts</h3>

                    <div class="menu-item">
                        <span class="item-name">Lemon Fresh Paste</span>
                        <span class="item-price">$3.99</span>
                    </div>
                    <p class="item-desc">Soft lemon paste with cream</p>

                    <div class="menu-item">
                        <span class="item-name">Chocolate Lava Cake</span>
                        <span class="item-price">$5.99</span>
                    </div>
                    <p class="item-desc">Warm cake with molten chocolate center</p>
                </div>
            </div>
        </div>

        <!-- SECOND SECTION -->
        <div class="menu-card mt-5" data-aos="fade-right" data-aos-duration="500">
            <h2 class="menu-title">BBQ & Grills</h2>

            <div class="menu-columns">
                <div class="menu-column">
                    <h3 class="menu-heading">Grilled Specials</h3>

                    <div class="menu-item">
                        <span class="item-name">Smoked Beef Ribs</span>
                        <span class="item-price">$12.99</span>
                    </div>
                    <p class="item-desc">Slow-cooked ribs with house BBQ sauce</p>

                    <div class="menu-item">
                        <span class="item-name">Grilled Chicken Breast</span>
                        <span class="item-price">$9.50</span>
                    </div>
                    <p class="item-desc">Marinated chicken grilled to perfection</p>
                </div>

                <div class="menu-column">
                    <h3 class="menu-heading">Sides</h3>

                    <div class="menu-item">
                        <span class="item-name">Garlic Fries</span>
                        <span class="item-price">$3.99</span>
                    </div>
                    <p class="item-desc">Crispy fries tossed in garlic butter</p>

                    <div class="menu-item">
                        <span class="item-name">Coleslaw</span>
                        <span class="item-price">$2.50</span>
                    </div>
                    <p class="item-desc">Fresh cabbage with creamy dressing</p>
                </div>
            </div>
        </div>

        <!-- THIRD SECTION -->
        <div class="menu-card mt-5" data-aos="fade-right" data-aos-duration="500">
            <h2 class="menu-title">Beverages</h2>

            <div class="menu-columns">
                <div class="menu-column">
                    <h3 class="menu-heading">Hot Drinks</h3>

                    <div class="menu-item">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">$2.99</span>
                    </div>
                    <p class="item-desc">Freshly brewed coffee with milk foam</p>

                    <div class="menu-item">
                        <span class="item-name">Green Tea</span>
                        <span class="item-price">$1.99</span>
                    </div>
                    <p class="item-desc">Organic green tea leaves</p>
                </div>

                <div class="menu-column">
                    <h3 class="menu-heading">Cold Drinks</h3>

                    <div class="menu-item">
                        <span class="item-name">Fresh Lemonade</span>
                        <span class="item-price">$2.50</span>
                    </div>
                    <p class="item-desc">Fresh lemons with mint</p>

                    <div class="menu-item">
                        <span class="item-name">Iced Coffee</span>
                        <span class="item-price">$3.50</span>
                    </div>
                    <p class="item-desc">Cold brewed coffee with ice</p>
                </div>
            </div>
        </div>
    </section>

    {{-- menu end --}}


    <section class="gallery-section" style="overflow: hidden">
        <div class="gallery-container" data-aos="fade-up" id="contact">

            <!-- LEFT CONTENT -->
            <div class="gallery-content">
                <h2>Contact Us!</h2>

                <ul class="gallery-info">
                    <li><i class='bx  bx-phone'></i> (415) 739-2846</li>
                    <li><i class='bx  bx-location-alt-2'></i> Richmond, VA 23221</li>
                </ul>

                <div class="gallery-socials">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest-p"></i>
                </div>
            </div>
            {{-- 6315 --}}

            <!-- RIGHT IMAGES -->
            <div class="gallery-images">
                <div class="gallery-img large">
                    <video src="{{ asset('assets\images\contact-videos-compress.mp4') }}" style="object-position: left"
                        autoplay muted loop class="visit-us-video">
                </div>

                <div class="gallery-img small" id="video-2-con">
                    <video src="{{ asset('assets\images\contact-videos-compress.mp4') }}" style="object-position: right"
                        autoplay muted loop class="visit-us-video">
                </div>
            </div>

        </div>
    </section>








    {{--  footer --}}
    <footer class="site-footer">
        <div class="container text-center" data-aos="fade-up" id="contact">
            <h3 class="footer-brand">Cafe Rosati</h3>

            <p class="footer-tagline">
                Where great coffee, good food, and calm moments come together.
            </p>

            <div class="footer-divider"></div>

            <p class="footer-copy">
                © {{ date('Y') }} Cafe Rosati. Crafted with care.
            </p>
        </div>
    </footer>








@endsection
