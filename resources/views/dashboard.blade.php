<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("We sell the latest electronics and gadgets!") }}

                    @if ($user->type == 'admin')
                    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data" class="mt-3 space-y-4">
                        @csrf

                        <div class="flex flex-col space-y-2">
                            <label class="text-black dark:text-white" for="name">Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror text-black" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label class="text-black dark:text-white" for="description">Description:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror text-black" id="description" name="description" rows="5">{{ old('description') }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex flex-col space-y-2">
                          <label class="text-black dark:text-white" for="image">Image:</label>
                          <input type="file" class="form-control @error('image') is-invalid @enderror text-black" id="image" name="image">
                          @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label class="text-black dark:text-white" for="price">Price:</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror text-black" id="price" name="price" value="{{ old('price') }}">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label class="text-black dark:text-white" for="category">Category:</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror text-black" id="category" name="category" value="{{ old('category') }}">
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label class="text-black dark:text-white" for="brand">Brand:</label>
                            <input type="text" class="form-control @error('brand') is-invalid @enderror text-black" id="brand" name="brand" value="{{ old('brand') }}">
                            @error('brand')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label class="text-black dark:text-white" for="weight">Weight:</label>
                            <input type="text" class="form-control @error('weight') is-invalid @enderror text-black" id="weight" name="weight" value="{{ old('weight') }}">
                            @error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex justify-end mt-4">
                            <button type="submit" class="btn btn-primary text-white bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md">Create Item</button>
                        </div>
                    </form>
                    @endif

                    <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mt-6 p-6">
                        <h3 class="text-lg font-semibold mb-4">{{ __("Shopping Cart") }}</h3>
                        @foreach($carts as $cart)
                        @if($cart->user == $user->id)
                        <div class="p-3 bg-gray-200 dark:bg-gray-600 rounded-lg mb-4">
                            <div class="flex flex-row justify-between items-center">
                                <div>
                                    {{ App\Http\Controllers\CartController::formatCartItem($cart->items) }}
                                </div>
                                <form action="{{ route('cart.edit', $cart->id) }}" method="POST" class="flex items-center space-x-2">
                                    @csrf
                                    @method('POST')
                                    <input type="number" id="quantity" name="quantity" min="0" max="20" class="text-black h-8 rounded-md" value="{{ App\Http\Controllers\CartController::getQuantityOnly($cart->items) }}">
                                    <button type="submit" id="add-item" class="btn btn-primary text-white bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md">Change Quantity</button>
                                </form>  

                                <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-md" onclick="return confirm('Are you sure you want to delete this cart item?')">Delete Cart Item</button>
                                </form>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        <div class="flex justify-end mt-4">
                            <a href="{{ url('/payment') }}" class="btn btn-primary text-white bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md">Proceed to Payment</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($items as $item)
                    <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg mb-4">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <h4 class="text-lg font-semibold">{{ $item->name }}</h4>
                                <p class="text-gray-500">{{ $item->price }}</p>
                            </div>
                            @if ($item->image)
                             <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-20 h-20 object-cover">
                            @endif
                            @if($user->type == 'admin')
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="ml-4">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-md" onclick="return confirm('Are you sure you want to delete this item?')">Delete Item</button>
                            </form>
                            @endif
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-600">{{ $item->description }}</p>
                        </div>
                        <div class="flex flex-row justify-between mt-4 text-gray-500">
                            <div>
                                <p>Category: {{ $item->category }}</p>
                                <p>Brand: {{ $item->brand }}</p>
                                <p>Weight: {{ $item->weight }}</p>
                            </div>
                        </div>
                        <div class="flex mt-6">
                            <label for="quantity" class="mr-2">Quantity (max 20):</label>
                            <form action="{{ route('cart.store', [$item->id, $user->id]) }}" method="POST" class="flex items-center space-x-2">
                                @csrf
                                @method('POST')
                                <input type="number" id="quantity" name="quantity" min="0" max="20" class="text-black h-8 rounded-md" value="0">
                                <button type="submit" id="add-item" class="btn btn-primary text-white bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md">Add to Cart</button>
                            </form>  
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
