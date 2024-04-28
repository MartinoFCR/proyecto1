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
<label for="id">Id producto</label>
<input type="text" inputmode="numeric" value="{{ isset($products->id) ? $products->id:old('id') }}" name="id" id="id">
<br>
<label for="Name_product">Nombre del producto</label>
<input type="text" name="name_product" value="{{ isset($products->name_product) ? $products->name_product:old('name_products') }}" id="name_product">
<br>
<label for="Type">Tipo de Producto</label>
<input type="text" name="type_product" value="{{ isset($products->type_product) ? $products->type_product:old('type_product') }}" id="type_product">
<br>
<label for="Unit_price">Precio unitario</label>
<input type="text" name="unit_price" value="{{ isset($products->unit_price) ? $products->unit_price:old('unit_price') }}" id="unit_price">
<br>
<label for="Sale_price">Precio de venta</label>
<input type="text" name="sale_price" value="{{ isset($products->sale_price) ? $products->sale_price:old('sale_price') }}" id="sale_price">
<br>
<label for="Stock">Cantidad de producto</label>
<input type="text" name="stock_product" value="{{ isset($products->stock_product) ? $products->stock_product:old('stock_product') }}" id="stock_product">
<br>
<input type="submit" value="{{ $modo }} producto">

<a href="{{ url('products') }}">Regresar</a>