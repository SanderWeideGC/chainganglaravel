@extends('layout')

@section('body')
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>Recipes</h2>
                            <div class="breadcrumb-controls">
                                <a href="/"><i class="fa fa-home"></i> Home</a>
                                <span>Recipes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb End -->

        
<!-- Gallery Section Begin -->
<section class="gallery-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-controls">
                    <ul>
                        <li class="active" data-filter="*">All RECIPES</li>
                        <li data-filter=".fruit">Fruit</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".meals">Meals</li>
                    </ul>
                </div>
            </div>
        </div>

        @foreach ($foto as $key => $data)
        <div class="row gallery-filter">
            <div class="col-lg-4 col-sm-6 mix fruit">
                <div class="gallery-item">
                    <img src="=/uploads/recipes/{{$foto>image}}" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-sm-6 mix meals">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-2.jpg" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mix meals">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-3.jpg" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mix vegetables">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-4.jpg" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-sm-6 mix gym">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-4.jpg"" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-4.jpg" class="image-popup"><i
                                    class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mix crossfit">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-5.jpg"" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-5.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mix gym crossfit">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-6.jpg"" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-6.jpg" class="image-popup"><i
                                    class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mix workout">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-7.jpg"" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-7.jpg" class="image-popup"><i
                                    class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mix crossfit gym">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-8.jpg"" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-8.jpg" class="image-popup"><i
                                    class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Healthy Meal <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mix crossfit gym workout">
                <div class="gallery-item">
                    <img src="img/recipes/gallery-9.jpg"" alt="">
                    <div class="gi-hover-warp">
                        <div class="gi-hover">
                            <a href="img/recipes/gallery-9.jpg" class="image-popup"><i
                                    class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <h6>Time to Try a Bodyweight Workout <span>Fruit, Vegetables, Meat</span></h6>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Gallery Section End -->


@endsection