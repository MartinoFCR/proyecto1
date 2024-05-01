<h1>{{$modo}} Proveedores</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>   
</div>
@endif
<label for="supplier_id">Id Proveedor</label>
<input type="text" name="supplier_id" value="{{ isset($suppliers->supplier_id) ? $suppliers->supplier_id : old('supplier_id') }}" id="supplier_id">
<br>
<label for="name_supplier">Nombre Proveedor</label>
<input type="text" name="name_supplier" value="{{ isset($suppliers->name_supplier) ? $suppliers->name_supplier : old('name_supplier') }}" id="name_supplier">
<br>
<label for="city_supplier">Ciudad</label>
<input type="text" name="city_supplier" value="{{ isset($suppliers->city_supplier) ? $suppliers->city_supplier : old('city_supplier') }}" id="city_supplier">
<br>
<label for="phone">Telefono</label>
<input type="text" name="phone" value="{{ isset($suppliers->phone) ? $suppliers->phone : old('phone') }}" id="phone">
<br>
<label for="email">Correo</label>
<input type="text" name="email" value="{{ isset($suppliers->email) ? $suppliers->email : old('email') }}" id="email">
<br>
<input type="submit" value="{{$modo}} datos">
<a href="{{url('suppliers')}}">Regresar</a>