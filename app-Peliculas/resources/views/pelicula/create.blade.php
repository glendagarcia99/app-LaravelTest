Form para agregar peliculas

<!-- enctype="multipart/form-data-> propieda o atributo para envio de fotos o archivos-->
<form action="{{ url('/pelicula') }}" method="post" enctype="multipart/form-data">
@csrf
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre">
<br>
<label for="Nombre">Duracion</label>
<input type="text" name="Duracion" id="Duracion">
<br>
<label for="Descripcion">Descripcion</label>
<input type="text" name="Descripcion" id="Descripcion">
<br>
<label for="Anio">Año</label>
<input type="text" name="Anio" id="Anio">
<br>
<label for="Categoria">Categoria</label>
<input type="text" name="Categoria" id="Categoria">
<br>
<label for="Foto">Foto</label>
<input type="file" name="Foto" id="Foto">
<br>
<input type="submit" value="Guardar">


</form>