@extends('layouts.admin')

@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        @error('title')
        <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description') }}</textarea>
        @error('description')
        <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" min="0" step="0.01" value="{{ old('price') }}" required>
            @error('price')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="sku">SKU:</label>
            <input type="text" name="sku" id="sku" value="{{ old('sku') }}">
            @error('sku')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="barcode">Barcode:</label>
            <input type="text" name="barcode" id="barcode" value="{{ old('barcode') }}">
            @error('barcode')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
            @error('image')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="inventory_quantity">Inventory Quantity:</label>
            <input type="number" name="inventory_quantity" id="inventory_quantity" min="0" value="{{ old('inventory_quantity') }}">
            @error('inventory_quantity')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="inventory_cost">Inventory Cost:</label>
            <input type="number" name="inventory_cost" id="inventory_cost" min="0" step="0.01" value="{{ old('inventory_cost') }}">
            @error('inventory_cost')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Create Product</button>
    </form>


<script>
    var variantCount = 1;

    document.querySelector('#add-variant').addEventListener('click', function() {
        variantCount++;

        var variant = document.createElement('div');
        variant.classList.add('variant');

        variant.innerHTML = `
            <label for="variant-title-${variantCount}">Title:</label>
            <input type="text" name="variants[${variantCount - 1}][title]" id="variant-title-${variantCount}" required>

            <label for="variant-price-${variantCount}">Price:</label>
            <input type="number" step="0.01" min="0" name="variants[${variantCount - 1}][price]" id="variant-price-${variantCount}" required>

            <label for="variant-sku-${variantCount}">SKU:</label>
            <input type="text" name="variants[${variantCount - 1}][sku]" id="variant-sku-${variantCount}">

            <label for="variant-barcode-${variantCount}">Barcode:</label>
            <input type="text" name="variants[${variantCount - 1}][barcode]" id="variant-barcode-${variantCount}">

            <label for="variant-inventory-${variantCount}">Inventory:</label>
            <input type="number" step="1" min="0" name="variants[${variantCount - 1}][inventory]" id="variant-inventory-${variantCount}" required>
        `;

        document.querySelector('#variants').insertBefore(variant, document.querySelector('#add-variant'));
    });
</script>
@endsection
