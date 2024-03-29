@extends('layouts.app')
@section('content')
<section class="comparare">
    <div class="container">
        <header>
            <h2>Comparare</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Acasă</a></li>
                <li class="breadcrumb-item active">Comparare</li>
            </ul>
        </header>
        <div class="auto-table table-container">
            <table >
                <thead>
                    <tr>
                        <th></th>
                        <th><img src="/assets/images/auto/volvo-x90.jpg" alt="volvo-x90.jpg"><i class="fa-regular fa-trash-can"></i></th>
                        <th><button><i class="fa-solid fa-plus"></i></button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Corpul</td>
                        <td>SUV</td>
                        <td class="empty">-</td>
                    </tr>
                    <tr>
                        <td>Kilometraj (km)</td>
                        <td>250</td>
                        <td class="empty">-</td>
                    </tr>
                    <tr>
                        <td>Tipul de combustibil</td>
                        <td>Hybrid</td>
                        <td class="empty">-</td>
                    </tr>
                    <tr>
                        <td>Anul</td>
                        <td>2021</td>
                        <td class="empty">-</td>
                    </tr>
                    <tr>
                        <td>Transmisie</td>
                        <td>Automată</td>
                        <td class="empty">-</td>
                    </tr>
                    <tr>
                        <td>Motor (cm³)</td>
                        <td>2900</td>
                        <td class="empty">-</td>
                    </tr>
                    <tr>
                        <td>Culoarea</td>
                        <td>Sur</td>
                        <td class="empty">-</td>
                    </tr>
                    <tr>
                        <td>Tipul de tracțiune</td>
                        <td>4x4</td>
                        <td class="empty">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection