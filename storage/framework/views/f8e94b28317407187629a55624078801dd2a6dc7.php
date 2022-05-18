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
                <a class="navbar-brand" href="<?php echo e(route('index')); ?>">Find a Doctor</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('patients.index')); ?>">Pacientes</a>
                            </li>
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
                    </div>
                    <form class="form-inline">
                        <input class="form-control" type="procurar" placeholder="Pesquisar">
                    </form>
                    <form class="form-inline">
                        <button class="btn btn-outline-light" type="submit"> Buscar</button>
                    </form>
            </div>
        </nav>
    <div class="container">
        <?php echo $__env->yieldContent('conteudo'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\tcc2\resources\views/app.blade.php ENDPATH**/ ?>