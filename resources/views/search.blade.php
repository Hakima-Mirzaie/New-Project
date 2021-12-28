@extends('layouts.master')

@section('content')


<div class="page-title-area item-bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>I am Looking for</h2>
        </div>
    </div>
</div>
<br>
<br>

<br>
<div class="container">
    <div class="row">

        <div class="col">
            <select name="location" id="" class="form-control">
                <option value="">Choose Location</option>
            </select>

        </div>
        <h5>At</h5>
        <div class="col">
            <input type="date" class="form-control" style="border-color:#3aae36">

        </div>
        <h5>In</h5>
        <div class="col">

            <select name="" class="form-control" id="" style="border-color:#3aae36">
                <option value="">Choose Language</option>
            </select>
        </div>

    </div>


    <br>

    <br>
    <div class="row">

        <h3>To</h3>

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
</div>

</div>


<section class="client-area client-page pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="client-details">
                    <img src="assets/img/client-img/1.jpg" alt="">
                    <h3>Amelia Daniel</h3>
                    <span>Chairman and founder</span>
                    <i class="flaticon-quote"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="client-details">
                    <img src="assets/img/client-img/2.jpg" alt="">
                    <h3>Name/language</h3>
                    <span>Location</span>


                    <i class="flaticon-quote"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, .</p>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="client-details">
                    <img src="assets/img/client-img/3.jpg" alt="">
                    <h3>Michael Harper</h3>
                    <span>Sales Manager</span>
                    <i class="flaticon-quote"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="client-details">
                    <img src="assets/img/client-img/4.jpg" alt="">
                    <h3>Evelyn Jackson</h3>
                    <span>Sales Manager</span>
                    <i class="flaticon-quote"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="client-details">
                    <img src="assets/img/client-img/5.jpg" alt="">
                    <h3>Alex Mason</h3>
                    <span>Sales Manager</span>
                    <i class="flaticon-quote"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="client-details">
                    <img src="assets/img/client-img/1.jpg" alt="">
                    <h3>Amelia Daniel</h3>
                    <span>Sales Manager</span>
                    <i class="flaticon-quote"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection