<form action="{{url('/')}}"method="post" enctype="multipart/form-data">
{{csrf_field()}}
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre"value="">
<label for="Latin">{{'Latin'}}</label>
<input type="text" name="Latin" id="Latin"value="">
<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion"value="">


<label for="IMG">{{'IMG'}}</label>
<input type="file" name="IMG" id="IMG"value="">

<input type="submit" value="Agregar">

</form>