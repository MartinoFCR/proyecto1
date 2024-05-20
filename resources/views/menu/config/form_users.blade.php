<a href="{{ url('users') }}">
    <i class="return__icon fa-solid fa-left-long"></i>
</a>
<h1>{{ $modo }} Usuario</h1>
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
    <input class="form__input" placeholder="ID" type="number" name="user_id" value="{{ isset($users->user_id) ? $users->user_id : old('user_id') }}" id="user_id">
    <label class="form__label" for="employees_id">ID</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Password" type="text" name="password_user" value="{{ isset($users->password_user) ? $users->password_user : old('password_user') }}" id="password_user">
    <label class="form__label" for="name_employees">Contraseña</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="Email" type="text" name="email" value="{{ isset($users->email) ? $users->email : old('email') }}" id="email">
    <label class="form__label" for="email">email</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="perfil id" type="number" name="profile_id" value="{{ isset($users->profile_id) ? $users->profile_id : old('profile_id') }}"id="profile_id">
    <label class="form__label" for="profile_id ">perfil id</label>
</div>

<br>
    <input class="form__buttom" type="submit" value="{{ $modo }} usuario">

