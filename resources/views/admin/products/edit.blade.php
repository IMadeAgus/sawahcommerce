@extends('admin.products.layout')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white rounded-xl shadow-md p-6">
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.products.index') }}"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                <i class="fa fa-arrow-left mr-2"></i> Back
            </a>
        </div>

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="inputName" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="inputName" value="{{ $product->name }}"
                    class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm @error('name') border-red-500 @enderror"
                    placeholder="Product name">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="inputPrice" class="block text-sm font-medium text-gray-700">Price</label>
                <input name="price" id="inputPrice" value="{{ $product->price }}"  type="number" min="0"
                    class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm @error('price') border-red-500 @enderror"
                    placeholder="Price">
                @error('price')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="inputDescription" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="inputDescription"
                    class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm @error('description') border-red-500 @enderror"
                    placeholder="Description">{{ $product->description }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="inputCategory" class="block text-sm font-medium text-gray-700">Price</label>
                <select name="category_id" id="inputCategory" value="{{ $product->category->name }}"
                    class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm @error('category') border-red-500 @enderror"
                    placeholder="Category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="inputImage" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="inputImage"
                    class="mt-1 block w-full text-sm text-gray-900 border-gray-300 border rounded-md file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200 @error('image') border-red-500 @enderror">
                <div class="mt-3">
                    <img src="/images/{{ $product->image }}" class="w-full rounded-md shadow" alt="Product image">
                </div>
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="inline-flex items-center px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-md shadow-sm text-sm font-medium">
                <i class="fa-solid fa-floppy-disk mr-2"></i> Update
            </button>
        </form>
    </div>
@endsection
