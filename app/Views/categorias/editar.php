<div id="layoutSidenav_content">
 <main>
     <div class="container-fluid">
         <h4 class="mt-4"><?php echo $titulo;?></h4>
         
         
                 <form method="POST" action="<?php echo base_url();?>/categorias/actualizar" autocomplte="off">
                 <input type="hidden" value="<?php echo $datos['id']; ?>"name="id" />
                    <div class="form-group">
                        <div class="row"> 
                           <div class="col-12 col-sm-6">
                            <lablel>Nombre</lablel>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre'];?>"autofocus require/>
                       </div>
                       
                    </div>
                   </div>
                    <a href="<?php echo base_url(); ?>/categorias" class="btn btn-primary">Regresar</a>
                     <button type="submit" class="btn btn-success">Guardar</button>    
                </form>      
                
       
 </main>
 