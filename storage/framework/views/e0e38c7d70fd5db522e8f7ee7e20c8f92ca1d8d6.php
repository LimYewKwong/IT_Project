<?php $__env->startSection('content'); ?>

    <div class="container container_secondary">
        <div class="content_purchases">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="user_container">
                        <i class="fas fa-user-circle fa-8x"></i>
                        <br><br>
                        <span><?php echo e($name); ?></span>
                    </div><br>
                    <div class="user_container_text">
                        <span>Client Purchases</span>
                    </div>
                </div>
                
                <form action="<?php echo e(url('admin/dashboardsearch')); ?>" method="POST" role="search">
                    <?php echo e(csrf_field()); ?>

                    <div class="input-group" style="margin-bottom: 20px">
                        <input type="text" class="form-control" placeholder="Search customer name or reference id" name="adminsearch">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                </form>
                <div class="col-md-8 col-sm-12">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="insurance_providers_container">
                        <?php $__currentLoopData = $insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="insurance_providers" data-price="<?php echo e($insurance->amount); ?>" data-sum="<?php echo e($insurance->sum_insured); ?>">
                                <div class="row">
                                    <div class="col-md-10">
                                        <b>Name: <?php echo e($insurance->full_name); ?></b><br>
                                        <b>Email: <?php echo e($insurance->email); ?></b><br>
                                        <b>Date: <?php echo e($insurance->start_date); ?></b><br>
                                    </div>
                                    
                                    <div class="mailButton">
                                        <form action="<?php echo e(route('admin.reminder.send')); ?>" method="post">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <input type="hidden" name="full_name" value="<?php echo e($insurance->full_name); ?>">
                                            <input type="hidden" name="email" value="<?php echo e($insurance->email); ?>">
                                            <input type="hidden" name="insurance_name" value="<?php echo e($insurance->name); ?>">
                                            <input type="hidden" name="expiry_date" value="<?php echo e($insurance->end_date); ?>">
                                            <button type="submit" name="button" class=" ">Send Expiry Notification</button>
                                        </form>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <img src="<?php echo e(url('/images/'.$insurance->logo)); ?>" alt="Brand Image" width="100px;">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <span><b>Protection Drivers</b></span><br>
                                                <span>Up to <?php echo e($insurance->protection); ?> Drivers</span>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <span><b>Towing Service</b></span><br>
                                                <span>Up to <?php echo e($insurance->towing); ?> Km</span>
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <span>Total amount:</span><br>
                                        <span class="headerfont">RM <?php echo e(number_format($insurance->final_amount, 2)); ?></span><br><br>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <span><b>Ref ID:</b> <?php echo e($insurance->ref_id); ?></span>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <span><b>Expiring:</b> <?php echo e($insurance->end_date); ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <span><b>Sum Insured (SI):</b></span>
                                        <span class="headerfont">RM <?php echo e(number_format($insurance->sum_insured, 2)); ?></span>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <span><b>Add-Ons:</b></span>
                                        <span>
                  <?php
                                            if($insurance->addon_id == ""){
                                                echo "No add-ons selected";
                                            }else{
                                                $addOns = explode(",", $insurance->addon_id);
                                                echo count($addOns).' <a id="view_'.$insurance->id.'" onclick="getAddons('.$insurance->id.')" style="cursor: pointer;">View</a>';
                                            }
                                            ?>
                  <input type="hidden" id="input_addons_<?php echo e($insurance->id); ?>" value="<?php echo e($insurance->addon_id); ?>">
                </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="container_addons_<?php echo e($insurance->id); ?>">
                                    </div>
                                </div><br>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function getAddons(insurance_id){
            if($("#view_"+insurance_id).hasClass("viewed")){
                $("#view_"+insurance_id).removeClass("viewed")
                $("#view_"+insurance_id).html("View");
                $("#container_addons_"+insurance_id).html("");
            }else{
                $("#view_"+insurance_id).addClass("viewed")
                $("#view_"+insurance_id).html("Hide");
                var addon_id = $("#input_addons_"+insurance_id).val();
                var content = "<br><span><b>Selected Add-Ons: </b><br><ul>";
                console.log(addon_id)
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "<?php echo e(route('admin.dashboard.addons')); ?>",
                    data: { addon_id: addon_id },
                    success: function (data) {
                        for(ids in data){
                            content += "<li>"+data[ids].description+"</li>";
                        }
                        content += "</ul>";
                        $("#container_addons_"+insurance_id).html(content);
                    },
                });
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stillwaters\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>