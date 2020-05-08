

<?php $__env->startSection('body'); ?>

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
                    <ul class="blog-ul"> 
                        <li class="blog-li"> 
                            <div class="blog-post">
                                <img src="img/blog-single-1.jpg"  height="200">
                                <h4 class="blog-h4">Title</h4>
                                <p>22-4-2020</p>
                            </div>
                        </li>
                        <li class="blog-li">
                            <div class="blog-post">
                                <img src="img/blog-single-2.jpg" height="200">
                            <h4 class="blog-h4">Hallo</h4>
                            <p>22-4-2020</p>
                            </div>
                        </li>
                        <li class="blog-li">
                            <div class="blog-post">
                                <img src="img/blog-single-3.jpg" height="200">
                            <h4 class="blog-h4">Hallo</h4>
                            <p>22-4-2020</p>
                            </div>
                        </li>
                        <li class="blog-li">
                            <div class="blog-post">
                                <img src="img/blog-single-4.jpg" height="200">
                            <h4 class="blog-h4">Hallo</h4>
                            <p>22-4-2020</p>
                            </div>
                        </li>
                        <li class="blog-li">
                            <div class="blog-post">
                                <img src="img/blog-single-1.jpg" height="200">
                            <h4 class="blog-h4">Hallo</h4>
                            <p>22-4-2020</p>
                            </div>
                        </li>
                        <li class="blog-li">
                            <div class="blog-post">
                                <img src="img/blog-single-2.jpg" height="200">
                            <h4 class="blog-h4">Hallo</h4>
                            <p>22-4-2020</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="contact-form">
                    <h4>Post Blog</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" placeholder="Title">
                            </div>
                            <div class="col-lg-12">
                                <label class="c-btn" style="margin-bottom: 30px;">
                                    <input type="file" accept="image/png, image/jpeg">
                                    Image
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Text"></textarea>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Chaingang\resources\views/blog.blade.php ENDPATH**/ ?>