

<?php $__env->startSection('titulo', 'Login de Médico'); ?>

<?php $__env->startSection('conteudo'); ?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto mb-3">
            <div class="card">
                <div class="card-header"><?php echo e(__('Login de Médico')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('doctors.login')); ?>">
                        <?php echo csrf_field(); ?> 

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right"><?php echo e(__('E-mail')); ?></label>

                            <div class="col-lg-9 mx-auto mb-3">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Senha')); ?></label>

                            <div class="col-lg-9 mx-auto mb-3">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-7 mx-auto mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Lembrar-me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <!-- <?php if(Route::has('doctors.password.request')): ?>
                                    <a class="btn btn-link" style="color: #27b8a0;" href="<?php echo e(route('doctors.password.request')); ?>">
                                        <?php echo e(__('Esqueseu a senha?')); ?>

                                    </a>
                                <?php endif; ?> -->
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mb-3 text-center">
                                <a class="btn btn-link" style="color: #27b8a0;" href="<?php echo e(route('doctors.create')); ?>">
                                    <?php echo e(__('Novo aqui? Cadastre-se agora')); ?>

                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/doctors/login.blade.php ENDPATH**/ ?>