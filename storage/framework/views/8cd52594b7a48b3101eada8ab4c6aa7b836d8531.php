<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('titulo'); ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #27b8a0;">
            <div class="container-fluid">
                <a class="navbar-brand">Find a Doctor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php if(Auth::guard('clinic')->check()): ?>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('doctors.index')); ?>">Médicos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('clinics.index')); ?>">Clínicas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('appointments.index')); ?>">Consultas</a>
                            </li>
                        </ul>
                    <?php endif; ?>

                    <?php if(Auth::guard('doctor')->check()): ?>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('doctors.index')); ?>">Médicos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('clinics.index')); ?>">Clínicas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('appointments.index')); ?>">Consultas</a>
                            </li>
                        </ul>
                    <?php endif; ?>

                    <?php if(Auth::guard('patient')->check()): ?>
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('patients.index')); ?>">Pacientes</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('doctors.index')); ?>">Médicos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('clinics.index')); ?>">Clínicas</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('appointments.index')); ?>">Consultas</a>
                            </li> -->
                        </ul>
                    <?php endif; ?>
                </div>

                <?php if(Auth::guard('clinic')->check()): ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #ffffff;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::guard('clinic')->user()->nome); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!-- <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('clinics.index')); ?>"
                                >
                                    <?php echo e(__('Visualizar Perfil')); ?>

                                </a>
                                
                                <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('clinics.create')); ?>"
                                >
                                    <?php echo e(__('Editar Perfil')); ?>

                                </a>
                                
                                <hr class="dropdown-divider"> -->

                                <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('clinics.logout')); ?>"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                >
                                    <?php echo e(__('Sair')); ?>

                                </a>
                                    
                                <form id="logout-form" action="<?php echo e(route('clinics.logout')); ?>" method="post" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>

                <?php if(Auth::guard('doctor')->check()): ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #ffffff;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::guard('doctor')->user()->nome); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!-- <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('doctors.index')); ?>"
                                >
                                    <?php echo e(__('Visualizar Perfil')); ?>

                                </a>
                                
                                <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('doctors.create')); ?>"
                                >
                                    <?php echo e(__('Editar Perfil')); ?>

                                </a>

                                <hr class="dropdown-divider"> -->

                                <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('doctors.logout')); ?>"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                >
                                    <?php echo e(__('Sair')); ?>

                                </a>
                                    
                                <form id="logout-form" action="<?php echo e(route('doctors.logout')); ?>" method="post" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>

                <?php if(Auth::guard('patient')->check()): ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #ffffff;"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::guard('patient')->user()->nome); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!-- <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('patients.index')); ?>"
                                >
                                    <?php echo e(__('Visualizar Perfil')); ?>

                                </a>

                                <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('patients.create')); ?>"
                                >
                                    <?php echo e(__('Editar Perfil')); ?>

                                </a>

                                <hr class="dropdown-divider"> -->

                                <a 
                                    class="dropdown-item" 
                                    href="<?php echo e(route('patients.logout')); ?>"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                >
                                    <?php echo e(__('Sair')); ?>

                                </a>
                                    
                                <form id="logout-form" action="<?php echo e(route('patients.logout')); ?>" method="post" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </nav>
    <div class="container">
        <?php echo $__env->yieldContent('conteudo'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\tcc\resources\views/app.blade.php ENDPATH**/ ?>