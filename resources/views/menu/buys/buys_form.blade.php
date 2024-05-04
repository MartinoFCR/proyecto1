<div class="form-group">
    <label for="supplier_id">Proveedor</label>
    <select name="supplier_id" id="supplier_id" class="form-control">
        @foreach ($suppliers as $supplier)
        <option value="{{ $supplier->supplier_id }}">{{$supplier->name_supplier}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
  <label for="tax">Impuesto</label>
  <input type="number"
    class="form-control" name="tax" id="tax" aria-describedby="helpId" placeholder="%18">
</div>
<div class="form-group">
    <label for="id">Producto</label>
    <select name="id" id="id" class="form-control">
        @foreach ($products as $product)
        <option value="{{ $product->id }}">{{$product->name_product}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
  <label for="quantity">Cantidad</label>
  <input type="number"
    class="form-control" name="quantity" id="quantity" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="price">Precio de Comprar</label>
  <input type="number"
    class="form-control" name="price" id="price" aria-describedby="helpId">
</div>
<div class="form-group">
  <button type="button" class="btn btn-primary float-rigth">{{$modo}} Producto</button>
</div>
