<h1 class="page-header">
    <?php echo $alm->idpersona != null ? $alm->nombres : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Persona">Personas</a></li>
  <li class="active"><?php echo $alm->idpersona != null ? $alm->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idpersona" value="<?php echo $alm->idpersona; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombres" value="<?php echo $alm->nombres; ?>" class="form-control" placeholder="Ingrese su nombre y Apellido" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>DNI</label>
        <input type="text" name="dni" value="<?php echo $alm->dni; ?>" class="form-control" placeholder="Ingrese su DNI" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Fecha de Ingreso</label>
        <input type="date" name="fecha_ingreso" value="<?php echo $alm->fecha_ingreso; ?>" class="form-control" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Prueba covid</label>
        <input type="text" name="prueba_covid" value="<?php echo $alm->prueba_covid; ?>" class="form-control" placeholder="¿Positivo o negativo?" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
