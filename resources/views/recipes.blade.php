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
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ">
                <div class="contact-info">
                    <h4>Recipes Posts</h4>
                </div>
                <div>
                @foreach($foto as $key => $data)
                    <ul class="gallery-ul"> 
                        <li class="gallery-li"> 
                            <div class="gallery-post">
                            <a href="/recipes/{{$data->id}}">
                                <img src="/uploads/recipes/{{$data->image}}"  height="200">
                                <h4 class="gallery-h4">{{$data->titel}}</h4>
                                <p>{{$data->datum}}</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                </div>
                
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="contact-form">
                    <h4>Post recipes</h4>
                    <form enctype="multipart/form-data" method="POST" action="/recipes">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="help is-danger">{{ $errors->first('titel') }}</p>
                                <input type="text" name="titel" id="titel" placeholder="Title" required>
                            </div>
                            <div class="col-lg-12">
                                <label class="c-btn" style="margin-bottom: 30px;">
                                    <input type="file" name="image" id="image" accept="image/png, image/jpeg" required>
                                    Image
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Text" name="body" id="body" required></textarea>
                                <button type="submit" class="c-btn">Post recipes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Gallery Section End -->


@endsection