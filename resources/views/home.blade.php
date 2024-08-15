@extends('layout.main')
@section('title','Home')
@section('content')
<section class="homepage">
    <div class="home">
        <div class="page">
            <img src="../images//photo-1506059612708-99d6c258160e.avif" alt="Hpmepage">
            <div class="overlay"></div>
            <div class="show">
                <div class="showcase">
                    <h1>Welcome to Online Hotel Room Booking Services</h1>
                    
                    <button class="btn" type="button">Book Now</button>
                </div>
            </div>
        </div>
    </div>
    <section id="service">
        <h1 class="primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="">
                <h2 class="secondary center">Best room</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laudantium est ad
                    quisquam cupiditate nemo.</p>
            </div>
            <div class="box">
                <img src="">
                <h2 class="secondary center">Best Quality services </h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laudantium est ad
                    quisquam cupiditate nemo.</p>
            </div>
            <div class="box">
                <img src="">
                <h2 class="secondary center">Easy Booking</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laudantium est ad
                    quisquam cupiditate nemo.</p>
            </div>
        </div>
    </section>
</section>
@endsection