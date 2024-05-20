<a href="{{ url('storages') }}">
    <i class="return__icon fa-solid fa-left-long"></i>
</a>    
<h1>{{ $modo }} Almacen</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

</div>
@endif
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Id almacen" inputmode="numeric" value="{{ isset($stores->store_id) ? $stores->store_id:old('store_id') }}" name="store_id" id="store_id">
    <label class="form__label" for="store_id">Id Almacen</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Nombre del almacen" name="name_store" value="{{ isset($stores->name_store) ? $stores->name_store:old('name_stores') }}" id="name_store">
    <label class="form__label" for="name_store">Nombre del almacen</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Dirección del almacen" name="address_store" value="{{ isset($stores->address_store) ? $stores->address_store:old('address_store') }}" id="address_store">
    <label class="form__label" for="address_store">Dirección del almacen</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Encargado del almacen" name="incharge_store" value="{{ isset($stores->incharge_store) ? $stores->incharge_store:old('incharge_store') }}" id="incharge_store">
    <label class="form__label" for="incharge_store">Encargado del almacen</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Telefono" name="phone" value="{{ isset($stores->phone) ? $stores->phone:old('phone') }}" id="phone">
    <label class="form__label" for="phone">Telefono</label>
</div>
<br>

<input class="form__buttom" type="submit" value="{{ $modo }} producto">

