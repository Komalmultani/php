
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 position-relative">
            <div class="row">
                <div class="col-md-4 bg-sucess sidebar">
                    <ul>
                        <li><a href="">
                                <h4>Manage employee & Rooms</h4>
                            </a></li>
                        <li><a href="/add-employee">Add Employee</a></li>
                        <li><a href="/manageemployee">Manage Employee</a></li>
                        <li><a href="/add-room">Add Room</a></li>
                        <li><a href="/manage-room">Manage Rooms</a></li>
                        <li><a href="">Delete Rooms</a></li>
                        <li><a href="">Edit Rooms</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="card-header active text-white" style="background-color:rgba(20,0,0,0.5)!important">
                        <h2>Add employee</h2>
                    </div>
                    <div class="card-body>">
                        <!-- flash data message with validation -->
                        <?php if('sucess'): ?>
                        <div class="alert alert-sucess">
                            <span class="text-white"><?php echo e(session('sucess')); ?>

                        </span>
                        </div>
                        <?php endif; ?>
                        <!-- error message for validation -->
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ul>
                                <li>
                                   <?php echo e($error); ?> 
                                </li>
                            </ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                        <form method="post">

                            <?php echo csrf_field(); ?>

                            <div class="form-group mt-2">
                                <label>user name*</label>
                                <input type="text" class="form-control" name="username" placeholder="username*">
                            </div>


                            <div class="form-group mt-2">
                                <label> name*</label>
                                <input type="text" class="form-control" name="name" placeholder="name*">
                            </div>
                            <div class="form-group mt-2">
                                <label>mobile*</label>
                                <input type="text" class="form-control" name="mobile" placeholder="mobile*">
                            </div>
                            <div class="form-group mt-2">
                                <label>gender</label>
                                <select class="form-control bg-secondary" name="gender">
                                    <option value="">select gender</option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>

                                    </option>
                                </select>

                                <div class="form-control mt-2">
                                    <label>Address</label>
                                    <textarea class="form-control" name="address" placeholder="textarea"></textarea>

                                </div>
                                <div class="form-group mt-2">
                                    <label>password</label>
                                    <input type="password" class="form-control" name="password">

                                </div>
                                <div class="form-group mt-2">
                                    <label>confirm password</label>
                                    <input type=" password" class="form-control" name="cpassword">


                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" class="btn btn-lg btn-lg btn-success" name="addemployee"
                                        value="Add Employee">
                                </div>

                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel-managenment-app\resources\views/employee.blade.php ENDPATH**/ ?>