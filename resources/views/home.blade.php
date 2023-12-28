@extends('layouts.app')
@section('title')
Nobil Auto
@endsection
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
                        <input class="dropdown" type="checkbox" id="dropdown-1" name="dropdown" />
                        <label class="for-dropdown" for="dropdown-1">
                            Status
                            <i class="uil fa-solid fa-chevron-down"></i>
                        </label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub-1" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub-1">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub-2" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub-2">Dropdown Sub</i></label>
                        </div>
                    </div>
                    <div class="select-box">
                        <input class="dropdown" type="checkbox" id="dropdown-2" name="dropdown" />
                        <label class="for-dropdown" for="dropdown-2">Producător<i
                                class="uil fa-solid fa-chevron-down"></i></i></label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                        </div>
                    </div>
                    <div class="select-box">
                        <input class="dropdown" type="checkbox" id="dropdown-3" name="dropdown" />
                        <label class="for-dropdown" for="dropdown-3">Model<i
                                class="uil fa-solid fa-chevron-down"></i></i></label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                        </div>
                    </div>
                    <div class="select-box">
                        <input class="dropdown" type="checkbox" id="dropdown-4" name="dropdown" />
                        <label class="for-dropdown" for="dropdown-4">Cutie<i
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
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.53223 14.0332C8.92969 14.0332 10.2393 13.6113 11.3291 12.8906L15.1787 16.749C15.4336 16.9951 15.7588 17.1182 16.1104 17.1182C16.8398 17.1182 17.376 16.5469 17.376 15.8262C17.376 15.4922 17.2617 15.167 17.0156 14.9209L13.1924 11.0801C13.9834 9.95508 14.4492 8.59277 14.4492 7.11621C14.4492 3.31055 11.3379 0.199219 7.53223 0.199219C3.73535 0.199219 0.615234 3.31055 0.615234 7.11621C0.615234 10.9219 3.72656 14.0332 7.53223 14.0332ZM7.53223 12.1875C4.74609 12.1875 2.46094 9.90234 2.46094 7.11621C2.46094 4.33008 4.74609 2.04492 7.53223 2.04492C10.3184 2.04492 12.6035 4.33008 12.6035 7.11621C12.6035 9.90234 10.3184 12.1875 7.53223 12.1875Z" fill="white"/>
                                </svg>
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
                            <img src="/assets/images/home/car-category/car-1.png" loading="lazy" alt=" car">
                            <span>Compact</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-2.png" loading="lazy" alt=" car">
                            <span>Sedan</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-3.png" loading="lazy" alt=" car">
                            <span>SUV</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-4.png" loading="lazy" alt=" car">
                            <span>Convertibile</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <img src="/assets/images/home/car-category/car-5.png" loading="lazy" alt=" car">
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
                    <img src="/assets/images/home/news-img/waves.svg" loading="lazy" alt="Nobil Auto">
                </div>
    
                <div class="news-slider">
                    <div class="owl-news-cards owl-carousel owl-news">
                        <div class="new-card">
                            <a href="#">
                                <div class="new-img-box">
                                    <div class="img-gradient"></div>
                                    <img src="/assets/images/home/news-img/news-car.jpg" loading="lazy" alt="car">
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
                                    <img src="/assets/images/home/news-img/news-car.jpg" loading="lazy" alt="car">
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
                                    <img src="/assets/images/home/news-img/news-car.jpg" loading="lazy" alt="car">
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
            <div class="benefits-container container">
                <h1>Cum-ar Fi Să Ai Propria Mașină Începând De Astăzi?</h1>

                <div class="benefits-box">
                    <div class="benefits-content">
                        <div class="benefit-box">
                            <div class="benefit-icon">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/surcxhka.json"
                                    trigger="hover"
                                    state="hover-jump-roll"
                                    colors="primary:#121331,secondary:#f07900"
                                    style="width:90px;height:90px">
                                </lord-icon>
                            </div>
                            <div class="benefit-text">
                                <h3>Randez-Vous</h3>
                                <p>Stabilim o întâlnire la Parcarea NobilAuto</p>
                            </div>
                        </div>
                        <div class="benefit-box">
                            <div class="benefit-icon">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/wzrwaorf.json"
                                    trigger="hover"
                                    colors="primary:#121331,secondary:#f07900"
                                    style="width:90px;height:90px">
                                </lord-icon>
                            </div>
                            <div class="benefit-text">
                                <h3>Personalizare</h3>
                                <p>Alegem împreună mașina dorită</p>
                            </div>
                        </div>
                        <div class="benefit-box">
                            <div class="benefit-icon">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/ghhwiltn.json"
                                    trigger="hover"
                                    colors="primary:#121331,secondary:#f07900"
                                    style="width:90px;height:90px">
                                </lord-icon>
                            </div>
                            <div class="benefit-text">
                                <h3>Contacte</h3>
                                <p>Formalizarea angajamentului nostru Auto!</p>
                            </div>
                        </div>
                        <div class="benefit-box">
                            <div class="benefit-icon">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/gqjpawbc.json"
                                    trigger="hover"
                                    colors="primary:#121331,secondary:#f07900"
                                    style="width:90px;height:90px">
                                </lord-icon>
                            </div>
                            <div class="benefit-text">
                                <h3>Noul Început</h3>
                                <p>Pornește la drum cu volanul unei mașini noi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="benefit-img">
                        <img src="/assets/images/home/benefit.jpg" loading="lazy" alt="benefit">
                    </div>
                </div>
            </div>
        </section>

        <section class="achivements">
            <div class="achivements-container container">
                <div class="achivement">
                    <span>450</span>
                    <p>Mașini vândute</p>
                </div>
                <div class="achivement">
                    <span>20</span>
                    <p>Diverse modele</p>
                </div>
                <div class="achivement">
                    <span>8350</span>
                    <p>Vizitatori Zilnic</p>
                </div>
            </div>
        </section>
        <div class="parallax-box">
            <div class="parallax-image"></div>
            <div class="container">
                <div class="parallax-text choose-us">
                    <h1>Suntem alături de tine cu oferte generoase pentru viitorul tău automobil</h1>
                    <p>Descoperiți plăcerea de a vă achiziționa automobilul dorit cu cele mai atractive condiții de finanțare,
                        oferite de Parcul Auto NobilAuto</p>
                </div>
            </div>
        </div>
    </div>
@endsection