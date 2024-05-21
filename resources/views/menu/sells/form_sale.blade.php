<a href="{{ url('sale') }}">
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
    <input class="form__input" placeholder="ID sale" type="number" name="id_sale" value="{{ isset($sale->id_sale) ? $sale->id_sale : old('id_sale') }}" id="id_sale">
    <label class="form__label" for="id_sale">ID</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="id user" type="text" name="user_id_sale" value="{{ isset($sale->user_id_sale) ? $sale->user_id_sale : old('user_id_sale') }}" id="user_id_sale">
    <label class="form__label" for="user_id_sale">id user</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="id customer" type="text" name="customer" value="{{ isset($sale->customer) ? $sale->customer : old('customer') }}" id="customer">
    <label class="form__label" for="customer">ID customer</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="id employee" type="text" name="employee" value="{{ isset($sale->employee) ? $sale->employee : old('employee') }}" id="employee">
    <label class="form__label" for="employee">id empleado</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="date" type="date" name="date" value="{{ isset($sale->date) ? $sale->date : old('date') }}" id="date">
    <label class="form__label" for="date">date</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" placeholder="total" type="number" name="total" value="{{ isset($sale->total) ? $sale->total : old('total') }}"id="total">
    <label class="form__label" for="total">total</label>
</div>

<br>
    <input class="form__buttom" type="submit" value="{{ $modo }} factura">
