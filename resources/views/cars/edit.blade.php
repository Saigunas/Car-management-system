<x-app-layout>
    <div class="container mt-6 mx-auto">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="font-bold text-white mb-6">{{__('Edit')}}</div>
                    <form method="post" action="{{ route('cars.update', $car->id) }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="reg_number">
                                {{__('Registration number')}}:
                            </label>
                            <input value="{{ old('reg_number')?: $car->reg_number }}" class="@error('reg_number') is-invalid @enderror border rounded-md py-2 px-3 w-full bg-gray-700 text-gray-300" name="reg_number" type="text" required>
                            <div class="invalid-feedback text-red-700">@error('reg_number') {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="brand">
                                {{__('Brand')}}:
                            </label>
                            <input value="{{ old('brand')?: $car->brand }}" class="@error('brand') is-invalid @enderror border rounded-md py-2 px-3 w-full bg-gray-700 text-gray-300" name="brand" type="text" value="" required>
                            <div class="invalid-feedback text-red-700">@error('brand') {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="owner_id">
                                {{__('Owner')}}:
                            </label>
                            <select value="{{ old('owner_id') }}" class="@error('brand') is-invalid @enderror form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 text-gray-300" name="owner_id">
                                <option value="">{{__('Select owner')}}</option>
                                @foreach($owners as $owner)
                                    <option value="{{ $owner->id }}" @if($car->owner_id == $owner->id) selected @endif>{{ $owner->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback text-red-700">@error('owner_id') {{ $message }} @enderror</div>
                        </div>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                            {{__('Save')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
