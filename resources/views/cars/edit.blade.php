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
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight bg-gray-700 focus:outline-none focus:shadow-outline"
                                   name="reg_number" type="text" value="{{ $car->reg_number }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="brand">
                                {{__('Model')}}:
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight bg-gray-700 focus:outline-none focus:shadow-outline"
                                   name="brand" type="text" value="{{ $car->brand }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="owner_id">
                                {{__('Owner')}}:
                            </label>
                            <select class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 text-gray-300" name="owner_id">
                                <option value="">{{__('Select owner')}}</option>
                                @foreach($owners as $owner)
                                    <option value="{{ $owner->id }}" @if($car->owner_id == $owner->id) selected @endif>{{ $owner->name }}</option>
                                @endforeach
                            </select>
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
