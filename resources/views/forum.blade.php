@extends('layout')

@section('body')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Forum</h2>
                        <div class="breadcrumb-controls">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Forum</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ">
                    <div class="contact-info">
                        <h4>Active Discussions</h4>
                    </div>
                    <div>
                        <ul class="forumul"> 
                            <li><h5 class="forumh5"><i class="fas fa-thumbtack fa-xs" style="margin-right: 5px;"></i>Pinned</h5></li>
                            <li><h4 class="forumh4">FAQ</h4></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada augue ut elit vehicula, non hendrerit risus fringilla....</p></li>
                        </ul>
                        <ul class="forumul">
                            <li><h4 class="forumh4">Izjen Vraag</h4></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada augue ut elit vehicula, non hendrerit risus fringilla....</p></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-lg-3 offset-lg-4">
                    <div class="contact-form">
                        <h4>Start Discussion</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Title">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Question"></textarea>
                                    <button type="submit" class="c-btn">Start Discussion</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection