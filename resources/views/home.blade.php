@extends('layouts.master')


@section('content')




<section class="hero-slider-area">
    <div class="hero-slider owl-carousel owl-theme">
        <div class="hero-slider-item slider-item-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">





                        <div class="hero-slider-text">

                            <h1>I am Looding for a translator in </h1>

                            <form action="/search" method="get">

                                <div class="row">
                                    <div class="col">
                                        <select name="" class="form-control" id="" style="border-color:#3aae36">
                                            <option value="">Choose Location</option>
                                        </select>
                                    </div>
                                    <span>At</span>
                                    <div class="col">
                                        <input type="date" style="color:#FFF" class="form-control" style="border-color:#3aae36">
                                    </div>
                                    <span>In</span>
                                    <div class="col">

                                        <select name="" class="form-control" id="" style="border-color:#3aae36">
                                            <option value="">Choose Language</option>
                                        </select>
                                    </div>

                                </div>
                                <br>
                                <div class="row">

                                    <span>To</span>
                                    <div class="col">
                                        <select name="" class="form-control" id="" style="border-color:#3aae36">
                                            <option value="">French</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <div class="banner-button">
                                            <button type="submit" class="default-btn" href="book-table.html">
                                                search
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="shape shape-1">
        <img src="assets/img/shape/1.png" alt="Shape">
    </div>

</section>



<!-- Start Box Area -->
<section class="box-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-box bg-1">
                    <i class="flaticon-statistics"></i>
                    <h3>Video Translators</h3>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-box bg-2">
                    <i class="flaticon-creativity"></i>
                    <h3>Audio Translators</h3>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-box bg-3">
                    <i class="flaticon-mortarboard"></i>
                    <h3>Presential Translators </h3>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection