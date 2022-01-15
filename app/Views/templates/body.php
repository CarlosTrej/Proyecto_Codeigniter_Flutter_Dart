<body>

    <button type="button" class="btn btn-dark" onclick="javascript:hola()" >Ejemplo</button> <!-- funcion void -->

    <button type="button" class="btn btn-dark">Dark</button>

    <a href="http://www.google.com.mx/" class="btn btn-warning" role="button">touch me</a>

    

    <input type="text" class="form-control" id="texto" name="texto" onkeypress="return validaNumeritos(event)">


    <form action="<?=site_url('form-envio')?>" role="form" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="Nombre" class="control-label">Nombre :</label>
            <input type="text" onkeypress="return validaNumeritos(event)" class="form-control" name="nombre" id="nombre" placeholder="Nombre" >
        </div> <!-- div nombre -->
        <div class="form-group">
            <label for="Nocontrol" class="control-label">Nocontrol :</label>
            <input type="text" onkeypress="return validaNumeritos(event)" class="form-control" name="Nocontrol" id="Nocontrol" placeholder="Nocontrol" >
        </div><!-- div nocontrol -->

        <input type="submit" class="btn btn-danger" value="Enviar Datos">

    </form><!-- form -->