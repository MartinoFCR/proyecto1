<a href="{{ url('user_profile') }}">
    <i class="return__icon fa-solid fa-left-long"></i>
</a> 
<h1>{{ $modo }} Perfil de Usuario</h1>
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
    <input class="form__input" placeholder="Cedula" type="text" name="profile_id" value="{{ isset($users_profiles->profile_id) ? $users_profiles->profile_id : old('profile_id') }}" id="profile_id">
    <label class="form__label" for="profile_id">Id Perfil</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Nombre" type="text" name="name_profile" value="{{ isset($users_profiles->name_profile) ? $users_profiles->name_profile : old('name_profile') }}" id="name_profile">
    <label class="form__label" for="name_profile">Nombre</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Apellidos" type="text" name="premissions" value="{{ isset($users_profiles->premissions) ? $users_profiles->premissions : old('premissions') }}" id="premissions">
    <label class="form__label" for="premissions">Permiso</label>
</div>
<br>
    <input class="form__buttom" type="submit" value="{{ $modo }} Perfil de Usuario">