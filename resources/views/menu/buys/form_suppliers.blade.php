<a href="{{url('suppliers')}}">
    <i class="return__icon fa-solid fa-left-long"></i>
</a> 
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
<br>
<div class="form__group">
    <input class="form__input" type="text" name="supplier_id" placeholder="Id Proveedor" value="{{ isset($suppliers->supplier_id) ? $suppliers->supplier_id : old('supplier_id') }}" id="supplier_id">
    <label class="form__label" for="supplier_id">Id Proveedor</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" name="name_supplier" placeholder="Nombre Proveedor" value="{{ isset($suppliers->name_supplier) ? $suppliers->name_supplier : old('name_supplier') }}" id="name_supplier">
    <label class="form__label" for="name_supplier">Nombre Proveedor</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" name="city_supplier" placeholder="Ciudad" value="{{ isset($suppliers->city_supplier) ? $suppliers->city_supplier : old('city_supplier') }}" id="city_supplier">
    <label class="form__label" for="city_supplier">Ciudad</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" name="phone" placeholder="Telefono" value="{{ isset($suppliers->phone) ? $suppliers->phone : old('phone') }}" id="phone">
    <label class="form__label" for="phone">Telefono</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" name="email" placeholder="Correo" value="{{ isset($suppliers->email) ? $suppliers->email : old('email') }}" id="email">
    <label class="form__label" for="email">Correo</label>
</div>
<br>
<input class="form__buttom" type="submit" value="{{$modo}} datos">