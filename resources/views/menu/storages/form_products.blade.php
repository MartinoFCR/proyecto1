<h1>{{ $modo }} Producto</h1>
<br>
<label for="id">Id producto</label>
<input type="text" inputmode="numeric" value="{{ isset($products->id) ? $products->id : '' }}" name="id" id="id">
<br>
<label for="Name_product">Nombre del producto</label>
<input type="text" name="name_product" value="{{ isset($products->name_product) ? $products->name_product : '' }}" id="name_product">
<br>
<label for="Type">Tipo de Producto</label>
<input type="text" name="type_product" value="{{ isset($products->type_product) ? $products->type_product : '' }}" id="type_product">
<br>
<label for="Unit_price">Precio unitario</label>
<input type="text" name="unit_price" value="{{ isset($products->unit_price) ? $products->unit_price : '' }}" id="unit_price">
<br>
<label for="Sale_price">Precio de venta</label>
<input type="text" name="sale_price" value="{{ isset($products->sale_price) ? $products->sale_price : '' }}" id="sale_price">
<br>
<label for="Stock">Cantidad de producto</label>
<input type="text" name="stock_product" value="{{ isset($products->stock_product) ? $products->stock_product : '' }}" id="stock_product">
<br>
<input type="submit" value="{{ $modo }} producto">

<a href="{{ url('products') }}">regresar</a>