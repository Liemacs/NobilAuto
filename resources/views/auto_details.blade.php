@extends('layouts.app')
@section('content')
    <section class="auto-details container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acasă</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('auto') }}">Automobile</a></li>
            <li class="breadcrumb-item active">Volvo XC 90</li>
        </ul>
        <div class="auto-photos-container">
            <div class="auto-main-photo">
                <img src="/assets/images/auto/volvo-x90.jpg" alt="volvo x90" loading='lazy'>
                <div class="tags">
                    <div class="tag hot-offer active">
                        <p>Ofertă specială</p>
                    </div>
                    <div class="tag reduced-price active">
                        <p>Preț redus</p>
                    </div>
                </div>
            </div>
            <div class="auto-second-photos">
                <div class="auto-second-photo-item"><img src="/assets/images/auto/volvo-x90.jpg" alt="volvo x90"
                        loading='lazy'></div>
                <div class="auto-second-photo-item"><img src="/assets/images/auto/volvo-x90.jpg" alt="volvo x90"
                        loading='lazy'></div>
                <div class="auto-second-photo-item"><img src="/assets/images/auto/volvo-x90.jpg" alt="volvo x90"
                        loading='lazy'></div>
                <div class="auto-second-photo-item"><img src="/assets/images/auto/volvo-x90.jpg" alt="volvo x90"
                        loading='lazy'></div>
                <div class="auto-second-photo-item"><img src="/assets/images/auto/volvo-x90.jpg" alt="volvo x90"
                        loading='lazy'></div>
                <div class="auto-second-photo-item"><img src="/assets/images/auto/volvo-x90.jpg" alt="volvo x90"
                        loading='lazy'></div>
            </div>
        </div>
    </section>
    <div class="auto-actions container">
        <div class="left">
            <div class="auto-stock">
                <p>Este în Stock</p>
            </div>
            <div class="publication-date">
                <i class="fa-regular fa-clock"></i>
                <p>07 decembrie 2023</p>
            </div>
        </div>
        <div class="right">
            <div class="print-details">
                <i class="fa-solid fa-print"></i>
                <p>Print</p>
            </div>
            <div class="save-auto">
                <i class="fa-regular fa-heart"></i>
                <p>save</p>
            </div>
            <div class="network">
                <i class="fa-solid fa-share-nodes"></i>
                <p>share</p>
            </div>
        </div>
    </div>
    <div class="name-prices container">
        <h1>Volvo XC 90</h1>
        <div class="price">
            <span><s>€92,480</s></span>
            <h3>€89,480</h3>
        </div>
    </div>
    <div class="container">
        <ul class="preview-info">
            <li>white</li>
            <li>Automatic</li>
            <li>Diesel</li>
            <li>280,000</li>
            <li>SUV</li>
        </ul>
    </div>
    <section class="container">
        <div class="auto-details-similar-call">
            <div class="auto-details-similar" id="auto-details-similar">
                <div class="auto-details-item">
                    <p class="title">Prezentare generală</p>
                    <ul>
                        <li>
                            <h4>Producător</h4>
                            <p>Volvo</p>
                        </li>
                        <li>
                            <h4>Model</h4>
                            <p>XC 90</p>
                        </li>
                        <li>
                            <h4>Culoarea</h4>
                            <p>Alb</p>
                        </li>
                        <li>
                            <h4>Tipul de tracțiune</h4>
                            <p>4x4</p>
                        </li>
                        <li>
                            <h4>Transmisie</h4>
                            <p>Automată</p>
                        </li>
                        <li>
                            <h4>Anul</h4>
                            <p>2021</p>
                        </li>
                        <li>
                            <h4>Kilometraj (km)</h4>
                            <p>280,000</p>
                        </li>
                        <li>
                            <h4>Motor (cm³)</h4>
                            <p>3000</p>
                        </li>
                        <li>
                            <h4>Numărul de uşi</h4>
                            <p>5</p>
                        </li>
                        <li>
                            <h4>Tip Combustibil</h4>
                            <p>Diesel</p>
                        </li>
                        <li>
                            <h4>Tip caroserie</h4>
                            <p>SUV</p>
                        </li>
                    </ul>
                </div>
                <div class="cars-items-box">
                    <header>
                        <h3>Recomandări</h3>
                        <a href="{{route('auto')}}" class="more">
                            <p>Arată toate mașinele</p>
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </header>
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
                </div>
            </div>
            <div class="auto-call" id="auto-call">
                <div class="sticky">
                    <p>Prima rată: 0€</p>
                    <button>Comandă un apel</button>
                    <form action="">
                        <h3>Contactați vânzătorul</h3>
                        <input type="text" placeholder="Numele" required>
                        <input type="tel" name="" id="" placeholder="Telefonul" required>
                        <input type="email" name="" id="" placeholder="Email">
                        <textarea name="mesaj" id="" cols="30" rows="6">Sunt interesat de o ofertă de preț pentru acest vehicul. Vă rog să mă contactați cât mai curând posibil cu cel mai bun preț pentru acest vehicul.</textarea>
                        <button type="submit">Expediază</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
