<a href="{{ url('clients') }}">
    <i class="return__icon fa-solid fa-left-long"></i>
</a>
<h1>{{ $modo }} cliente</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>
@endif
<br>
<div class="form__group">
    <input class="form__input" placeholder="Cedula" type="text" name="id" value="{{ isset($customers->id) ? $customers->id : old('id') }}" id="id">
    <label class="form__label" for="id">Cedula</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Nombre" type="text" name="name_customer" value="{{ isset($customers->name_customer) ? $customers->name_customer : old('name_customer') }}" id="name_customer">
    <label class="form__label" for="name_customer">Nombre</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Apellidos" type="text" name="lastname_customer" value="{{ isset($customers->lastname_customer) ? $customers->lastname_customer : old('lastname_customer') }}" id="lastname_customer">
    <label class="form__label" for="lastname_customer">Apellidos</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Celular" type="text" name="phone" value="{{ isset($customers->phone) ? $customers->phone : old('phone') }}" id="phone">
    <label class="form__label" for="phone">Celular</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Ciudad" type="text" name="city" value="{{ isset($customers->city) ? $customers->city : old('city') }}" id="city">
    <label class="form__label" for="city">Ciudad</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Fecha de Nacimiento" type="date" name="date" value="{{ isset($customers->date) ? $customers->date : old('date') }}" id="date">
    <label class="form__label" for="date">Fecha de Nacimiento</label>
</div>
<br>
<input class="form__buttom" type="submit" value="{{ $modo }} cliente">