@extends('layouts.index')

@section('main')
    <!-- &&section7 -->
    {{-- <section class="seventh-section" id="chefs">
        <div class="flex flex-col items-center justify-center gap-2 pb-5">
            <h6 class="  grad-text">- Chefs -</h6>
            <p class="py-2  border-t-2 border-b-2 border-black text-4xl">From all around the world</p>
        </div>
        <div
            class="sec7-cards d-flex justify-content-lg-center align-items-lg-center flex-lg-row flex-column align-items-center justify-content-center h-100 pt-4 w-100">
            <div class="col">
                <div class="card position-relative">
                    <div class="card-hov position-absolute">
                        <div class="d-flex flex-column text-black  gap-3 ">
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-snapchat"></i></a>
                            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="sec7-img-border ">
                        <img src="{{ asset('assets/image/chef.jpg') }}" class="card-img-top max-h-[450px] object-cover w-full" alt="...">
                    </div>
                    <div class="card-body text-center py-4">
                        <h5 class="card-title">Walter White</h5>
                        <h6 class="opacity-25">Chef Master</h6>
                        <p class="card-text text-secondary">This is a longer card with supporting text below as a
                            natural lead-in to Lorem ipsum dolor sit amet, consectetur adipisicing
                            additional content</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card position-relative">
                    <div class="card-hov position-absolute">
                        <div class="d-flex flex-column text-black  gap-3 ">
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-snapchat"></i></a>
                            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="sec7-img-border">
                        <img src="{{ asset('assets/image/chef2.jpg') }}" class="card-img-top max-h-[450px] object-cover w-full" alt="...">
                    </div>
                    <div class="card-body text-center py-4">
                        <h5 class="card-title">Susane Salamanca</h5>
                        <h6 class="opacity-25">Patissier</h6>
                        <p class="card-text text-secondary">This is a longer card with supporting text below as a
                            natural lead-in to Lorem ipsum dolor sit amet, consectetur adipisicing
                            additional content</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card position-relative">
                    <div class="card-hov position-absolute">
                        <div class="d-flex flex-column text-black  gap-3 ">
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-snapchat"></i></a>
                            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="sec7-img-border">
                        <img src="{{ asset('assets/image/chef3.jpg') }}" class="card-img-top max-h-[450px] object-cover w-full" alt="...">
                    </div>
                    <div class="card-body text-center py-4">
                        <h5 class="card-title">Gustavo Ching</h5>
                        <h6 class="opacity-25">Cook</h6>
                        <p class="card-text text-secondary">This is a longer card with supporting text below as a
                            natural lead-in to Lorem ipsum dolor sit amet, consectetur adipisicing
                            additional content</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- &&section5 -->
    <div class="flex flex-col items-center justify-center gap-2 pb-1">
        <h6 class="">- What Our Clients Say  -</h6>
        <p class="py-2 grad-border border-t-2 border-b-2 border-black text-[2.5rem] text-center lg:w-fit w-full">TESTIMONIALS</p>
    </div>
    <section class="fifth-section text-center">
        <!-- ? carousel 1 -->
        <div id="carouselExampleIndicators" class="carou carousel slide carousel-dark" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-H d-lg-flex d-flex flex-lg-row flex-column ">
                        <div class="sec5-part1 w-75">
                            <div class="vertical-line">
                                <p class="carousel1-p w-75"><span><i class="bi bi-quote text-danger fs-2"></i></span>
                                    Five stars! La Luna is a revelation. Every dish is a masterpiece – a symphony of flavors
                                    and textures. I started with the pan-seared scallops with saffron risotto, a perfect
                                    balance of delicate seafood and creamy rice. The main course, the lamb shank with
                                    rosemary and roasted vegetables, was melt-in-your-mouth tender and bursting with savory
                                    goodness. The highlight, though, was the dessert – a chocolate lava cake with a molten
                                    center paired with homemade raspberry sorbet. Absolutely divine! The service was
                                    impeccable, and the ambiance was elegant yet comfortable. La Luna is an experience, not
                                    just a meal. A must-try for any serious foodie.

                                </p>
                                <div class="d-flex flex-column align-items-start justify-content-center pt-2">
                                    <h3>SAM ALEX</h3>
                                    <p class="opacity-50 d-flex">lorem</p>
                                    <div class="text-warning mt-2">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-pic1 lg:block hidden">
                            <img class="object-cover rounded-full" src="{{ asset('assets/image/testimonials-1.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-H d-lg-flex d-flex flex-lg-row flex-column ">
                        <div class="sec5-part1 w-75">
                            <div class="vertical-line">
                                <p class="w-75"><span><i class="bi bi-quote text-danger fs-2"></i></span> The Happy
                                    Plate is our family's favorite spot for a weekend outing. They have a large menu with
                                    something to please everyone, from kid-friendly favorites like pizza and mac and cheese
                                    to more sophisticated options for the adults. Plus, they have a dedicated play area that
                                    keeps the little ones entertained while we wait for our food. The staff is incredibly
                                    patient and accommodating with children, making it a stress-free dining experience. We
                                    especially love their themed nights, like "Taco Tuesdays" and "Build-Your-Own-Sundae
                                    Sundays." The Happy Plate is a great place for creating lasting family memories over
                                    delicious food.

                                </p>
                                <div class="d-flex flex-column align-items-lg-start pt-4">
                                    <h3>SAM ALEX</h3>
                                    <p class="opacity-50">lorem</p>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-pic2 lg:block hidden">
                            <img class="object-cover rounded-full" src="{{ asset('assets/image/testimonials-2.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-H d-lg-flex d-flex flex-lg-row flex-column ">
                        <div class="sec5-part1 w-75">
                            <div class="vertical-line">
                                <p class="w-75"><span><i class="bi bi-quote text-danger fs-2"></i></span> Zest Express
                                    is a lifesaver for busy professionals like myself. They offer a variety of healthy and
                                    flavorful dishes that are perfect for a quick lunch break. I love their build-your-own
                                    salad bar – it allows me to customize my meal based on my dietary needs and preferences.
                                    They also have pre-made wraps and sandwiches that are perfect for grabbing on the go.
                                    The food is always fresh and tasty, and the service is lightning fast. Plus, it's
                                    conveniently located near my office. Zest Express is my go-to for a healthy and
                                    efficient lunch break
                                </p>
                                <div class="d-flex flex-column align-items-lg-start pt-4">
                                    <h3>SAM ALEX</h3>
                                    <p class="opacity-50">lorem</p>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-pic3 lg:block hidden">
                            <img class="object-cover rounded-full" src="{{ asset('assets/image/testimonials-3.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-H d-lg-flex d-flex flex-lg-row flex-column ">
                        <div class="sec5-part1 w-75">
                            <div class="vertical-line">
                                <p class="w-75"><span><i class="bi bi-quote text-danger fs-2"></i></span>Friendly Fork
                                    is my go-to place for a satisfying and affordable meal. The portions are generous, and
                                    the prices are friendly to my wallet. I usually get the cheeseburger with fries – a
                                    classic done right. The burger is juicy and flavorful, and the fries are crispy on the
                                    outside and fluffy on the inside. They have a decent selection of vegetarian options
                                    too, like the portobello mushroom sandwich I tried last week, which was surprisingly
                                    filling and delicious. The staff is always friendly and efficient, even when it gets
                                    busy. It's not fancy, but it's a reliable spot for a good, no-frills meal
                                </p>
                                <div class="d-flex flex-column align-items-lg-start pt-4">
                                    <h3>SAM ALEX</h3>
                                    <p class="opacity-50">lorem</p>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-pic4 lg:block hidden">
                            <img class="object-cover rounded-full" src="{{ asset('assets/image/testimonials-4.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
