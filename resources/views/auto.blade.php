@extends('layouts.app')
@section('content')
    <section class="automobile container">
        <header>
            <h2>Caută Mașina</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Acasă</a></li>
                <li class="breadcrumb-item active">All banners</li>
            </ul>
        </header>
        <div class="cars-content">
            <aside>
                <div class="cars-filtre">
                    <h2>
                        Filtre
                    </h2>
                    <div class="filters">
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
                    <div class="filters">
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
                    <div class="filters">
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" />
                        <label class="for-dropdown" for="dropdown">Combustibil<i
                                class="uil fa-solid fa-chevron-down"></i></i></label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                        </div>
                    </div>
                    <div class="filters">
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" />
                        <label class="for-dropdown" for="dropdown">Cutia de viteză<i
                                class="uil fa-solid fa-chevron-down"></i></i></label>
                        <div class="section-dropdown">
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                            <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                        </div>
                    </div>
                </div>
                <div class="cars-filtre duo">
                    <h2>
                        Kilometraj
                    </h2>
                    <div class="filters">
                        <input class="km-min" type="text" id="km-min" name="km-min" placeholder="Min"
                            onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" />
                        <input class="km-max" type="text" id="km-max" name="km-max" placeholder="Max"
                            onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" />
                    </div>
                </div>
                <div class="range-slider">
                    <h2>
                        Anul producerii
                    </h2>
                    <div class="rangeslider">
                        <input class="min" name="range_1" type="range" min="1980" max="2035"
                            value="2015" />
                        <input class="max" name="range_1" type="range" min="1980" max="2035"
                            value="2022" />
                    </div>
                    <div class="filters">
                        <input class="range_min" type="text" id="range_min" name="range_min" value="2015"
                            onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" />
                        <input class="range_max" type="text" id="range_max" name="range_max" value="2022"
                            onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" />
                    </div>
                </div>
                <div class="range-slider_euro">
                    <h2>
                        Preț (EUR)
                    </h2>
                    <div class="rangeslider_euro">
                        <input class="min_euro" name="range_1" type="range" min="0" max="100000"
                            value="1000" />
                        <input class="max_euro" name="range_1" type="range" min="0" max="100000"
                            value="10000" />
                    </div>
                    <div class="filters">
                        <input class="range_min_euro" type="text" id="range_min_euro" name="range_min"
                            value="1.000€" onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" />
                        <input class="range_max_euro" type="text" id="range_max_euro" name="range_max"
                            value="10.000€" onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" />
                    </div>
                </div>
                <div class="range-slider_euro">
                    <h2>
                        Tipul Combustibilului
                    </h2>
                    <div class="checkboxs">
                        <div class="check-box-group">
                            <label class="custom-checkbox" tab-index="0" aria-label="CheckboxLabel">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                <span class="label">Petrol (245)</span>
                            </label>
                        </div>
                        <div class="check-box-group">
                            <label class="custom-checkbox" tab-index="0" aria-label="CheckboxLabel">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                <span class="label">Diesel (245)</span>
                            </label>
                        </div>
                        <div class="check-box-group">
                            <label class="custom-checkbox" tab-index="0" aria-label="CheckboxLabel">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                <span class="label">Electric (245)</span>
                            </label>
                        </div>
                        <div class="check-box-group">
                            <label class="custom-checkbox" tab-index="0" aria-label="CheckboxLabel">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                <span class="label">Hybrid (245)</span>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="button-filtre">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <p>Search</p>
                </div>

                <div class="reset">
                    Resetați filtrul
                </div>

            </aside>
            <div class="cars-items-box">
                <div class="cars-details">
                    <p>Am găsit <b>325</b> mașini disponibile</p>
                    <div class="cars-sort-box">
                        <p>Sortează:</p>
                        <div class="filters">
                            <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" />
                            <label class="for-dropdown" for="dropdown">Sort<i
                                    class="uil fa-solid fa-chevron-down"></i></i></label>
                            <div class="section-dropdown">
                                <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                                <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                                <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub" />
                                <label class="for-dropdown-sub" for="dropdown-sub">Dropdown Sub</i></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cars-items">
                    <a href="/" class="item">
                        <figure class="item-img">
                            <img src="/assets/images/auto/volvo.jpg" loading="lazy" alt="volvo x90">
                            <div class="item-img-detail">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                    <p>6789</p>
                                </span>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </figure>
                        <span>€999 <small>€1500</small> </span>
                        <p>Volvo XC90 - 2023</p>
                        <div class="details">
                            <div class="detail-item">
                                <i class="fa-solid fa-road"></i>
                                <p>67858</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gear"></i>
                                <p>Automată</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gas-pump"></i>
                                <p>Diesel</p>
                            </div>
                        </div>
                    </a>
                    <a href="/" class="item">
                        <figure class="item-img">
                            <img src="/assets/images/auto/volvo.jpg" loading="lazy" alt="volvo x90">
                            <div class="item-img-detail">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                    <p>6789</p>
                                </span>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </figure>
                        <span>€999 <small>€1500</small> </span>
                        <p>Volvo XC90 - 2023</p>
                        <div class="details">
                            <div class="detail-item">
                                <i class="fa-solid fa-road"></i>
                                <p>67858</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gear"></i>
                                <p>Automată</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gas-pump"></i>
                                <p>Diesel</p>
                            </div>
                        </div>
                    </a>
                    <a href="/" class="item">
                        <figure class="item-img">
                            <img src="/assets/images/auto/volvo.jpg" loading="lazy" alt="volvo x90">
                            <div class="item-img-detail">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                    <p>6789</p>
                                </span>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </figure>
                        <span>€999 <small>€1500</small> </span>
                        <p>Volvo XC90 - 2023</p>
                        <div class="details">
                            <div class="detail-item">
                                <i class="fa-solid fa-road"></i>
                                <p>67858</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gear"></i>
                                <p>Automată</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gas-pump"></i>
                                <p>Diesel</p>
                            </div>
                        </div>
                    </a>
                    <a href="/" class="item">
                        <figure class="item-img">
                            <img src="/assets/images/auto/volvo.jpg" loading="lazy" alt="volvo x90">
                            <div class="item-img-detail">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                    <p>6789</p>
                                </span>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </figure>
                        <span>€999 <small>€1500</small> </span>
                        <p>Volvo XC90 - 2023</p>
                        <div class="details">
                            <div class="detail-item">
                                <i class="fa-solid fa-road"></i>
                                <p>67858</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gear"></i>
                                <p>Automată</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gas-pump"></i>
                                <p>Diesel</p>
                            </div>
                        </div>
                    </a>
                    <a href="/" class="item">
                        <figure class="item-img">
                            <img src="/assets/images/auto/volvo.jpg" loading="lazy" alt="volvo x90">
                            <div class="item-img-detail">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                    <p>6789</p>
                                </span>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </figure>
                        <span>€999 <small>€1500</small> </span>
                        <p>Volvo XC90 - 2023</p>
                        <div class="details">
                            <div class="detail-item">
                                <i class="fa-solid fa-road"></i>
                                <p>67858</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gear"></i>
                                <p>Automată</p>
                            </div>
                            <div class="detail-item">
                                <i class="fa-solid fa-gas-pump"></i>
                                <p>Diesel</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="page">
                    <ul class="pagination" id="pagination-container">

                    </ul>
                </div>
            </div>


    </section>
@endsection
