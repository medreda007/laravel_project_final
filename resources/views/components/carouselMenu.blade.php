@extends('layouts.index')

@section('main')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner sm:h-[500px]">
            <div class="carousel-item active">
                <img src="https://readymadeui.com/cardImg.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://readymadeui.com/cardImg.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://readymadeui.com/cardImg.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    {{-- menus --}}

    <div>
        <section class="d-flex flex-column align-items-center justify-content-center text-center gap-5" id="menu">
            <div class="d-flex flex-column gap-2 pt-5">
                <h6 class="opacity-50">OUR MENU</h6>
                <p class="fs-1 fw-bolde ft-A">CHECK OUR<span class="text-danger"> YUMMY MENU</span></p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-black menu-btn menu-btn" id="Breakfast-tab" data-bs-toggle="tab"
                            data-bs-target="#Breakfast-tab-pane" type="button" role="tab" aria-controls="Breakfast-tab-pane"
                            aria-selected="true">Breakfast</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-black menu-btn" id="Lunch-tab" data-bs-toggle="tab"
                            data-bs-target="#Lunch-tab-pane" type="button" role="tab" aria-controls="Lunch-tab-pane"
                            aria-selected="false">Lunch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-black menu-btn" id="Dinner-tab" data-bs-toggle="tab"
                            data-bs-target="#Dinner-tab-pane" type="button" role="tab" aria-controls="Dinner-tab-pane"
                            aria-selected="false">Dinner</button>
                    </li>
                </ul>
                <div class="tab-content d-flex justify-content-center" id="myTabContent">
                    
                    <div class="tab-pane fade show active" id="Breakfast-tab-pane" role="tabpanel" aria-labelledby="Breakfast-tab"
                        tabindex="0">
                        <div class="pt-5">
                            <h6 class="opacity-50">MENU</h6>
                            <h2 class="text-danger fw-bolder fs-1">Breakfast</h2>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center p-5">
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic1">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic2">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic3">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic4">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic5">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic6">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Lunch-tab-pane" role="tabpanel" aria-labelledby="Lunch-tab"
                        tabindex="0">
                        <div class="pt-5">
                            <h6 class="opacity-50">MENU</h6>
                            <h2 class="text-danger fw-bolder fs-1">Lunch</h2>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center p-5">
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic3">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic1">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic2">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic5">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic4">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic6">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Dinner-tab-pane" role="tabpanel" aria-labelledby="Dinner-tab"
                        tabindex="0">
                        <div class="pt-5">
                            <h6 class="opacity-50">MENU</h6>
                            <h2 class="text-danger fw-bolder fs-2">Dinner</h2>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center p-5">
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic3">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic3">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic6">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic2">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic1">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                            <div
                                class="menu-box d-flex flex-column justify-content-center text-center align-items-center p-5">
                                <div class="sec4-menu-pics menu-pic6">
                                </div>
                                <h3>Magname Tiste</h3>
                                <p class="opacity-50">Lorem ipsum dolor sit amet.</p>
                                <p class="text-danger fs-2 fw-bolder">$5.95</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
