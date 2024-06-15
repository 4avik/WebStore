<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Payment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('We sell electronics (*n o t*   matchsticks)!') }}
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($carts as $cart)
                        @if($cart->user == $user->id)
                            <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg mb-4">
                                <div class="flex flex-row justify-between items-center">
                                    <div>
                                        {{ App\Http\Controllers\CartController::formatCartItem($cart->items) }}
                                    </div>
                                    <form action="{{ route('cart.edit', $cart->id) }}" method="POST" class="flex items-center space-x-2">
                                        @csrf
                                        @method('POST')
                                        <input type="number" id="quantity" name="quantity" min="0" max="20" class="text-black h-8 rounded-md" value="{{ App\Http\Controllers\CartController::getQuantityOnly($cart->items) }}">
                                        <button type="submit" class="btn btn-primary text-white bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md">Change Quantity</button>
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

                    <div class="mt-6 text-2xl">
                        {{ __('Total price: ') }}
                        {{ App\Http\Controllers\CartController::getTotalPrice() }}.00€
                    </div>

                    <form class="mt-8 space-y-6" action="{{ route('payment.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        
                        <div class="space-y-4">
                            <div class="flex flex-col space-y-2">
                                <label class="text-black dark:text-white" for="firstName">First Name:</label>
                                <input type="text" class="form-control @error('firstName') is-invalid @enderror text-black" id="firstName" name="firstName" value="{{ old('firstName') }}">
                                @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="flex flex-col space-y-2">
                                <label class="text-black dark:text-white" for="lastName">Last Name:</label>
                                <input type="text" class="form-control @error('lastName') is-invalid @enderror text-black" id="lastName" name="lastName" value="{{ old('lastName') }}">
                                @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="flex flex-col space-y-2">
                                <label class="text-black dark:text-white" for="email">Email:</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror text-black" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="flex flex-col space-y-2">
                                <label class="text-black dark:text-white" for="phone">Phone Number:</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror text-black" id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-6 text-xl">
                            {{ __('Thank you! :D') }}
                        </div>

                        <button type="submit" class="btn btn-primary text-white bg-green-500 hover:bg-green-600 h-12 w-48 rounded-md" onclick="return confirm('Your cart will be emptied and items will be shipped after it has been confirmed that money has been sent.')">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
