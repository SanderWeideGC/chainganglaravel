<?php $__env->startSection('body'); ?>
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
            <div class="col-lg-8">
                <div class="contact-info">
                    <h4>Recipes Posts</h4>
                </div>
                <div>
                <?php $__currentLoopData = $foto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="gallery-ul"> 
                        <li class="gallery-li"> 
                            <div class="gallery-post">
                            <a href="/recipes/<?php echo e($data->id); ?>">
                                <img src="/uploads/recipes/<?php echo e($data->image); ?>"  height="200">
                                <h4 class="gallery-h4"><?php echo e($data->titel); ?></h4>
                                <p><?php echo e($data->datum); ?></p>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="contact-form">
                    <h4>Post recipes</h4>
                    <form enctype="multipart/form-data" method="POST" action="/recipes">
                    <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="help is-danger"><?php echo e($errors->first('titel')); ?></p>
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

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lucas/code/chainganglaravel/resources/views/recipes.blade.php ENDPATH**/ ?>