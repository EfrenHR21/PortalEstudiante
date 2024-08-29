<!DOCTYPE html>
<html lang="en">
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        </head>
        <body>
        <?php 
            require('../includes/funciones.php');    
            incluirTemplate('header');
        ?>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <h1>Subir Archivos</h1>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-8">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Nuevo
                        </button>
    
                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">titulo</th>
                                    <th scope="col">descripcion</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    <tr>
                                        <td><?php ?> </td>
                                        <td><?php ?></td>
                                        <td><?php ?></td>
                                        <td>
                                            <button onclick="" class="btn btn-primary" type="button">Ver Archivo Modal</button>
                                            <a class="btn btn-primary" target="_black" href="" >Ver Archivo pagina</a>
                                        </td>
                                    </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nuevo archivo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form enctype="multipart/form-data" id="form1">
                                <div class="form-group">
                                    <label for="title">Titulo</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    <input type="text" class="form-control" id="description" name="description">
                                </div>
                                <div class="form-group">
                                    <label for="description">archivo</label>
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" onclick="onSubmitForm()">Cuardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    
                        </div>
                    </div>
                </div>
            </div>