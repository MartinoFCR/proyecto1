<a href="{{ url('products') }}">
    <i class="return__icon fa-solid fa-left-long"></i>
</a>    
<h1>{{ $modo }} Producto</h1>
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
    <input class="form__input" type="text" placeholder="Id producto" inputmode="numeric" value="{{ isset($products->id) ? $products->id:old('id') }}" name="id" id="id">
    <label class="form__label" for="id">Id producto</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Nombre del producto" name="name_product" value="{{ isset($products->name_product) ? $products->name_product:old('name_products') }}" id="name_product">
    <label class="form__label" for="Name_product">Nombre del producto</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Tipo de Producto" name="type_product" value="{{ isset($products->type_product) ? $products->type_product:old('type_product') }}" id="type_product">
    <label class="form__label" for="Type">Tipo de Producto</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Precio unitario" name="unit_price" value="{{ isset($products->unit_price) ? $products->unit_price:old('unit_price') }}" id="unit_price">
    <label class="form__label" for="Unit_price">Precio unitario</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Precio de venta" placeholder="Id producto" name="sale_price" value="{{ isset($products->sale_price) ? $products->sale_price:old('sale_price') }}" id="sale_price">
    <label class="form__label" for="Sale_price">Precio de venta</label>
</div>
<br>
<div class="form__group">
    <input class="form__input" type="text" placeholder="Cantidad de producto" name="stock_product" value="{{ isset($products->stock_product) ? $products->stock_product:old('stock_product') }}" id="stock_product">
    <label class="form__label" for="Stock">Cantidad de producto</label>
</div>
<br>

<input class="form__buttom" type="submit" value="{{ $modo }} producto">

