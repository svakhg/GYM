<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>GYM</title>

        <!-- Bootstrap core CSS -->     
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">        
    </head>
    <body class="bs-docs-home">        
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="<?php echo base_url() ?>">Habana Gym</a>
                <ul class="nav">
                    <li>
                        <a href="#">Vencimientos <span class="badge badge-important">3</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Socios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-plus"></i> Agregar socio</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Modificar socio</a></li>
                            <li><a href="#"><i class="icon-align-justify"></i> Ver socios</a></li>
                            <li><a href="#"><i class="icon-folder-open"></i> Subscripciones y rutinas</a></li>
                            <li><a href="#"><i class="icon-book"></i> Tipos de subscripciones</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i> Ejercicios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-plus"></i> Agregar musculo</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Modificar musculo</a></li>
                            <li><a href="#"><i class="icon-trash"></i> Eliminar musculo</a></li>
                            <li><a href="#"><i class="icon-plus"></i> Agregar ejercicio</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Modificar ejercicio</a></li>
                            <li><a href="#"><i class="icon-trash"></i> Eliminar ejercicio</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-search pull-right" action="">
                    <input type="text" class="search-query span2" placeholder="Search">
                </form>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i><b class="caret"></b></a>                                
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('users/create') ?>"><i class="icon-plus"></i> Agregar usuario</a></li>
                            <li><a href="<?php echo base_url('users/listUsers') ?>"><i class="icon-list"></i> Ver usuarios</a></li>                        
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-off"></i><b class="caret"></b></a>                                
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('users/create') ?>"><i class="icon-share-alt"></i> Cerrar sesion</a></li>                            
                        </ul>
                    </li>                   
                </ul>
            </div>
        </div>