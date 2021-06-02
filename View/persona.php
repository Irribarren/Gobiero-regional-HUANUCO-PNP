<h1 align="center" class="page-header">GOBIERNO REGIONAL DE HUÁNUCO</h1>
<h5 align="center">POLICIA NACIONAL DEL PERÚ</h5>


<div align="center"  class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Persona&a=Crud">Agregar Persona</a>
</div>

<table align="center" border="2px" class="table table-striped">
    <thead>
        <tr>
            <th >Nombres</th>
            <th>DNI</th>
            <th>FECHA INGRESO AL PAIS</th>
            <th >PRUEBA COVID (POSITIVO O NEGATIVO)</th>
            <th >Correo</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombres; ?></td>
            <td><?php echo $r->dni; ?></td>
            <td><?php echo $r->fecha_ingreso; ?></td>
            <td><?php echo $r->prueba_covid; ?></td>
            <td><?php echo $r->email; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Persona&a=Crud&idpersona=<?php echo $r->idpersona; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Persona&a=Eliminar&idpersona=<?php echo $r->idpersona; ?>"> Eliminar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Persona&a=Eliminar&idpersona=<?php echo $r->idpersona; ?>">Mandar a <br> cuarentena</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
