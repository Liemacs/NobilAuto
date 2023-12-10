@extends('layouts.app')
@section('content')
    <div class="home-wrapper">
        <section class="banner">
            <div class="banner-container container">
                <div class="banner-titles">
                    <h1>Simplu și Eficient</h1>
                    <h3>în găsirea mașinii potrivite</h3>
                </div>
                <form>
                    <div class="select-box">
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" />
                        <label class="for-dropdown" for="dropdown">Status<i
                                class="uil fa-solid fa-chevron-down"></i></i></label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                        </div>
                    </div>
                    <div class="select-box">
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" />
                        <label class="for-dropdown" for="dropdown">Producător<i
                                class="uil fa-solid fa-chevron-down"></i></i></label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                        </div>
                    </div>
                    <div class="select-box">
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" />
                        <label class="for-dropdown" for="dropdown">Model<i
                                class="uil fa-solid fa-chevron-down"></i></i></label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                        </div>
                    </div>
                    <div class="select-box">
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" />
                        <label class="for-dropdown" for="dropdown">Cutie<i
                                class="uil fa-solid fa-chevron-down"></i></i></label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                        </div>
                    </div>
                    <div class="filter-btn">
                        <button>
                            <img src="/assets/images/header/magnifyingglass.svg" alt="search icon">
                            <span>Caută</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    
        <section class="categories">
            <div class="category-container container">
                <div class="category-swiper owl-carousel owl-categories">
                    <a href="#" class="item" >
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-1.png" alt=" car">
                            <span>Compact</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-2.png" alt=" car">
                            <span>Sedan</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-3.png" alt=" car">
                            <span>SUV</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-4.png" alt=" car">
                            <span>Convertibile</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-5.png" alt=" car">
                            <span>Coupe</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    
        <section class="news">
            <div class="news-container container">
                <div class="news-title">
                    <h1>Descoperiți Anunțurile Noastre Fierbinți</h1>
                    <img src="/assets/images/home/news-img/waves.svg" alt="">
                </div>
    
                <div class="news-slider">
                    <div class="owl-news-cards owl-carousel owl-news">
                        <div class="new-card">
                            <a href="#">
                                <div class="new-img-box">
                                    <div class="img-gradient"></div>
                                    <img src="/assets/images/home/news-img/news-car.jpg" alt="car">
                                    <div class="new-views">
                                        <div class="views">
                                            <i class="fa-regular fa-eye"></i>
                                            <span>5664</span>
                                        </div>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="new-detail">
                                    <h3>Volvo XC90 - 2023</h3>
                                    <div class="car-details">
                                        <div class="car-detail">
                                            <span>€999</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-road"></i>
                                            <span>15462</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gas-pump"></i>
                                            <span>Diesel</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gear"></i>
                                            <span>Automată</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="new-card">
                            <a href="#">
                                <div class="new-img-box">
                                    <div class="img-gradient"></div>
                                    <img src="/assets/images/home/news-img/news-car.jpg" alt="car">
                                    <div class="new-views">
                                        <div class="views">
                                            <i class="fa-regular fa-eye"></i>
                                            <span>5664</span>
                                        </div>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="new-detail">
                                    <h3>Volvo XC90 - 2023</h3>
                                    <div class="car-details">
                                        <div class="car-detail">
                                            <span>€999</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-road"></i>
                                            <span>15462</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gas-pump"></i>
                                            <span>Diesel</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gear"></i>
                                            <span>Automată</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="new-card">
                            <a href="#">
                                <div class="new-img-box">
                                    <div class="img-gradient"></div>
                                    <img src="/assets/images/home/news-img/news-car.jpg" alt="car">
                                    <div class="new-views">
                                        <div class="views">
                                            <i class="fa-regular fa-eye"></i>
                                            <span>5664</span>
                                        </div>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="new-detail">
                                    <h3>Volvo XC90 - 2023</h3>
                                    <div class="car-details">
                                        <div class="car-detail">
                                            <span>€999</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-road"></i>
                                            <span>15462</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gas-pump"></i>
                                            <span>Diesel</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gear"></i>
                                            <span>Automată</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>  
            </div>
        </section>

        <section class="benefits">
            <div class="benefits-container">
                <h1>Ce-ar Fi Să Ai Propria Mașină Începând De Astăzi?</h1>
            </div>
        </section>
    </div>

@endsection