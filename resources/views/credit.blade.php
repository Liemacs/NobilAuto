@extends('layouts.app')
@section('content')
    <section class="credit">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Acasă</a></li>
                <li class="breadcrumb-item active">All banners</li>
            </ul>
        </div>
        <div class="parallax-box">
            <div class="parallax-image"></div>
            <div class="container">
                <div class="parallax-text">
                    <h1>Suntem alături de tine cu oferte generoase pentru viitorul tău automobil</h1>
                    <p>Descoperiți plăcerea de a vă achiziționa automobilul dorit cu cele mai atractive condiții de finanțare,
                        oferite de Parcul Auto NobilAuto</p>
                </div>
            </div>
        </div>
    </section>
    <section class="conditions-section container">
        <p>CUM FUNCȚIONEAZĂ</p>
        <h1>Achiziția - simplă și convenabilă!</h1>
        <p>Procurați-vă mașina atunci când aveți nevoie de libertate de mișcare, economisind considerabil în proces.</p>
        <div class="conditions">
            <div class="column">
                <div class="contidion">
                    <i class="fa-solid fa-user"></i>
                    <p>Vârsta minimă 18 ani</p>
                </div>
                <div class="contidion">
                    <i class="fa-solid fa-id-card"></i>
                    <p>Doar cu Buletinul de Identitate</p>
                </div>
                <div class="contidion">
                    <i class="fa-solid fa-users-slash"></i>
                    <p>Fără persoană garant</p>
                </div>
            </div>
            <div class="column">
                <div class="contidion">
                    <i class="fa-brands fa-creative-commons-nc"></i>
                    <p>Posibil fără prima rată</p>
                </div>
                <div class="contidion">
                    <i class="fa-solid fa-sack-xmark"></i>
                    <p>Fără declararea veniturilor</p>
                </div>
                <div class="contidion">
                    <i class="fa-solid fa-file-circle-check"></i>
                    <p>Aprobarea garantată a dosarului</p>
                </div>
            </div>
        </div>
        
    </section>
    <section class="loan-calc">
        <div class="container">
            <h2 class="loan-title">Calculator de finanțare</h2>
            <div class="loan-box">
                <div class="loan-container">
                    <div class="price-container">
                        <label for="price">Prețul automobilului</label>
                        <input type="text" name="price" id="price" placeholder="Prețul">
                    </div>
                    <div class="loan-rate-period-container">
                        <div class="rate-container">
                            <label for="rate">Rata dobânzii</label>
                            <input type="text" name="rate" id="rate" placeholder="Rata">
                        </div>
                        <div class="period-container">
                            <label for="period">Perioada</label>
                            <input type="text" name="period" id="period" placeholder="Perioada">
                        </div>
                    </div>
                    <div class="down-payment-container">
                        <label for="down-payment">Plata în avans</label>
                        <input type="text" name="down-payment" id="down-payment" placeholder="Plata în avans">
                    </div>
                    <button>Solicitați serviciul</button>
                </div>
                <div class="loan-img">
                    <img src="/assets/images/credit/loan-calc.jpg" loading="lazy" alt="auto cumpara in credit">
                    <h2>Următoarea ta mașină te așteaptă la <br><span>NobilAuto</span></h2>
                    <button>Explorarează ofertele auto</button>
                </div>
            </div>
        </div>
    </section>
    <section class="allure-section container">
        <div class="allure-container">
            <div class="allure-image">
                <img src="/assets/images/credit/allure-img.jpg" loading="lazy" alt="bmw-car">
            </div>
            <div class="allure-text">
                <p>Nu ezita, Apelază acum și descoperă ce rată lunară îți poate aduce mașina visurilor tale!</p>
                <button>+373 12345678</button>
            </div>
        </div>
    </section>
@endsection