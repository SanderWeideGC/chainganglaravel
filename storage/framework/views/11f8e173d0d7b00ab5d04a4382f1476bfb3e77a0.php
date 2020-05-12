

<?php $__env->startSection('body'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg spad" data-setbg="/img/about-bread.jpg">
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
                    <h4><?php echo e($post->titel); ?></h4>
                </div>
                <div>
                    <p><?php echo e($post->body); ?></p>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div style="">
                    <img src="/uploads/blog/<?php echo e($post->image); ?>" style="
                    position: absolute;
                    margin: auto;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;">
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\chainganglaravel\resources\views/blog-post.blade.php ENDPATH**/ ?>