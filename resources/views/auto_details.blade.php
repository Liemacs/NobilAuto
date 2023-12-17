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
    <div class="auto-details container">
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
    <section class="cars-items-box container">
        <header>
            <h3>Recomandări</h3>
            <div class="more">
                <p>Arată toate mașinele</p>
                <i class="fa-solid fa-plus"></i>
            </div>
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
        </div>
    </section>
    <canvas id="canvas3d"></canvas>
           
  
@endsection
