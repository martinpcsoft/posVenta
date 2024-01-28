<div id="layoutSidenav_content">
 <main>
     <div class="container-fluid">
         <h4 class="mt-4"><?php echo $titulo;?></h4>
        
        <form method="post" action="<?php echo base_url();?>/productos/insertar" autocomplte="off">
                 <?php csrf_field();?>
                    <div class="form-group">
                        <div class="row"> 
                           <div class="col-12 col-sm-6">
                            <lablel>Código</lablel>
                            <input class="form-control" id="codigo" name="codigo" type="text" autofocus require/>
                       </div>
                       <div class="col-12 col-sm-6">
                            <lablel>Nombre </lablel>
                            <input class="form-control" id="nombre" name="nombre" type="text" require/>
                       </div>
                    </div>
                   </div>
                   <div class="form-group">
                        <div class="row"> 
                           <div class="col-12 col-sm-6">
                            <lablel>Unidad</lablel>
                            <select class="form-control" id="id_unidad" name="id_unidad" required>
                              <option value="">Seleccionar unidad</option>
                              <?php  foreach($unidades as $unidad) { ?>
                                   <option value="<?php echo $unidad['id'];?> ">
                                                  <?php echo $unidad['nombre'];?></option>  
                                   <?php  } ?>
                                   
                           </select>
                       </div>
                       <div class="col-12 col-sm-6">
                            <lablel>Categorias </lablel>
                            <select class="form-control" id="id_categoria" name="id_categoria" required>
                              <option value=""> Seleccionar categoria</option>
                                  
                                   </select>
                       </div>
                    </div>
                   </div>
                    <a href="<?php echo base_url(); ?>/productos" class="btn btn-primary">Regresar</a>
                     <button type="submit" class="btn btn-success">Guardar</button>    
                </form>      
                
       
 </main>
 
