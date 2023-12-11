@extends('layouts.app')
@section('content')
<section class="contacts">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acasă</a></li>
            <li class="breadcrumb-item active">Credit</li>
        </ul>
    </div>

    <div class="contacts-container container">
        <div class="contacts-details">
            <h3>Contacte</h3>
            <div class="details-box">
                <div class="contact-detail">
                    <span>Adresa</span>
                    <p>mun, Chișinău, str. Studenților 7/7 <br>  {{ '(' }}lângă Universitatea Tehnică{{ ')' }}</p>
                </div>
                <div class="contact-detail">
                    <span>Manager creditare auto</span>
                    <a href="#">+373 61 25 22 22</a>
                </div>
                <div class="contact-detail">
                    <span>Manager vânzare auto</span>
                    <a href="#">+373 61 25 22 22</a>
                </div>
                <div class="contact-detail">
                    <span>Program de lucru</span>
                    <p>Luni - Duminică</p>
                    <p>de la 08:00 până la 18:00</p>
                </div>
                <div class="contact-detail">
                    <span>Social Media</span>
                    <div class="contact-socials">
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <h3>Contactează-ne acum</h3>
            <form action="">
                <div class="form-input">
                    <div class="input">
                        <label for="firstName">Nume</label>
                        <input type="text" name="firstName" id="firstName" placeholder="Will" required>
                    </div>
                    <div class="input">
                        <label for="lastName">Prenume</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Smith" required>
                    </div>
                </div>
                <div class="form-input">
                    <div class="input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="willsmith@gmail.com" required>
                    </div>
                    <div class="input">
                        <label for="phone">Telefon Mobil</label>
                        <input type="number" name="phone" id="phone" placeholder="+373612345" required>
                    </div>
                </div>
                <div class="form-input">
                    <div class="input">
                        <label for="message">Mesaj</label>
                        <textarea id="message" name="message" rows="4" cols="50">Trimite un mesaj ...</textarea>
                    </div>
                </div>
                <div class="contacts-btn">
                    <button>Trimite</button>
                </div>
            </form>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2717.904699158977!2d28.864296026684222!3d47.0617197711451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97ce00125f907%3A0x1eb205d85137058!2sStudentilor%20St%207%2C%20Chi%C8%99in%C4%83u%202012%2C%20Moldova!5e0!3m2!1sen!2s!4v1702335033627!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

@endsection