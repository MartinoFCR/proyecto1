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
<label for="id">Cedula</label>
<input type="text" name="id" value="{{ isset($customers->id) ? $customers->id : old('id') }}" id="id">
<label for="name_customer">Nombre</label>
<input type="text" name="name_customer" value="{{ isset($customers->name_customer) ? $customers->name_customer : old('name_customer') }}" id="name_customer">
<label for="lastname_customer">Apellidos</label>
<input type="text" name="lastname_customer" value="{{ isset($customers->lastname_customer) ? $customers->lastname_customer : old('lastname_customer') }}" id="lastname_customer">
<label for="phone">Celular</label>
<input type="text" name="phone" value="{{ isset($customers->phone) ? $customers->phone : old('phone') }}" id="phone">
<label for="city">Ciudad</label>
<input type="text" name="city" value="{{ isset($customers->city) ? $customers->city : old('city') }}" id="city">
<label for="date">Fecha de Nacimiento</label>
<input type="date" name="date" value="{{ isset($customers->date) ? $customers->date : old('date') }}" id="date">
<input type="submit" value="{{ $modo }} cliente">
<a href="{{ url('clients') }}">Regresar</a>