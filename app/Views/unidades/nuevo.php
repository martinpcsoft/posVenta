<div id="layoutSidenav_content">
 <main>
     <div class="container-fluid">
         <h4 class="mt-4"><?php echo $titulo;?></h4>
         <?php \Config\Services::validation()->listErrors();?>
        <form method="post" action="<?php echo base_url();?>/unidades/insertar" autocomplte="off">
                 <?php csrf_field();?>
                    <div class="form-group">
                        <div class="row"> 
                           <div class="col-12 col-sm-6">
                            <lablel>Nombre</lablel>
                            <input class="form-control" id="nombre" name="nombre" type="text" autofocus require/>
                       </div>
                       <div class="col-12 col-sm-6">
                            <lablel>Nombre corto</lablel>
                            <input class="form-control" id="nombre_corto" name="nombre_corto" type="text" require/>
                       </div>
                    </div>
                   </div>
                    <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary">Regresar</a>
                     <button type="submit" class="btn btn-success">Guardar</button>    
                </form>      
                
       
 </main>
 
