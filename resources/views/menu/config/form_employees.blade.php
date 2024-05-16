<a href="{{ url('employees') }}">
    <i class="return__icon fa-solid fa-left-long"></i>
</a> 
<h1>{{ $modo }} empleado</h1>
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
    <input class="form__input" placeholder="Cedula" type="text" name="employees_id" value="{{ isset($employees->employees_id) ? $employees->employees_id : old('employees_id') }}" id="employees_id">
    <label class="form__label" for="employees_id">Cedula</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Nombre" type="text" name="name_employees" value="{{ isset($employees->name_employees) ? $employees->name_employees : old('name_employees') }}" id="name_employees">
    <label class="form__label" for="name_employees">Nombre</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Apellidos" type="text" name="lastname_employees" value="{{ isset($employees->lastname_employees) ? $employees->lastname_employees : old('lastname_employees') }}" id="lastname_employees">
    <label class="form__label" for="lastname_employees">Apellidos</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Celular" type="date" name="date" value="{{ isset($employees->date) ? $employees->date : old('date') }}" id="date">
    <label class="form__label" for="date">Fecha de nacimiento</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Ciudad" type="text" name="email" value="{{ isset($employees->email) ? $employees->email : old('email') }}" id="email">
    <label class="form__label" for="email">Email</label>
</div>
<br>
    <input class="form__buttom" type="submit" value="{{ $modo }} empleado">