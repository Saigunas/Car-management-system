<x-app-layout>
    <div class="container mt-6 mx-auto dark:text-gray-300">
        <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-8/12">
                <div class="bg-gray-800 shadow-md rounded-md">
                    <div class="bg-gray-700 p-4 border-b border-gray-600">
                        {{__("Add new auto")}}
                    </div>
                    <div class="p-4">
                        <form method="post" action="{{ route('cars.save') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="text-gray-300 font-bold mb-2" for="reg_number">
                                    {{__("Registration number")}}:
                                </label>
                                <input value="{{ old('reg_number') }}" class="@error('reg_number') is-invalid @enderror border rounded-md py-2 px-3 w-full bg-gray-700 text-gray-300" name="reg_number" type="text" value="" required>
                                <div class="invalid-feedback text-red-700">@error('reg_number') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="brand">
                                    {{__("Brand")}}:
                                </label>
                                <input value="{{ old('brand') }}" class="@error('brand') is-invalid @enderror border rounded-md py-2 px-3 w-full bg-gray-700 text-gray-300" name="brand" type="text" value="" required>
                                <div class="invalid-feedback text-red-700">@error('brand') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="owner_id">
                                    {{__("Owner")}}:
                                </label>
                                <select class="@error('brand') is-invalid @enderror form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 text-gray-300" name="owner_id">
                                    <option value="">{{__('Select owner')}}</option>
                                    @foreach($owners as $owner)
                                        <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback text-red-700">@error('owner_id') {{ $message }} @enderror</div>
                            </div>
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                {{__("Add")}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
