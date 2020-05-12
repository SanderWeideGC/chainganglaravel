@extends('layout')

@section('body')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Blogs</h2>
                    <div class="breadcrumb-controls">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
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
            <div class="col-lg-8 ">
                <div class="contact-info">
                    <h4>Blog Posts</h4>
                </div>
                <div>
                @foreach($blog as $key => $data)
                    <ul class="blog-ul"> 
                        <li class="blog-li"> 
                            <div class="blog-post">
                                <img src="img/blog-single-1.jpg"  height="200">
                                <a href="/blog/{{$data->id}}"><h4 class="blog-h4">{{$data->titel}}</h4></a>
                                <p>{{$data->datum}}</p>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                </div>
                
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="contact-form">
                    <h4>Post Blog</h4>
                    <form method="POST" action="/blog">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                
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
                                <button type="submit" class="c-btn">Post BLog</button>
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