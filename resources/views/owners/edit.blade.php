<x-app-layout>
    <div class="container mt-6 mx-auto">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 p-4">
                    <div class="font-bold text-white mb-6">Redaguoti savininką</div>
                    <form method="post" action="{{ route('owners.update', $owner->id) }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="name">
                                {{__('Name')}}:
                            </label>
                            <input value="{{ old('name')?: $owner->name}}" class="@error('name') is-invalid @enderror border rounded-md py-2 px-3 w-full bg-gray-700 text-gray-300" name="name" type="text" required>
                            <div class="invalid-feedback text-red-700">@error('name') {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="surname">
                                {{__('Surname')}}:
                            </label>
                            <input value="{{ old('surname')?:$owner->name }}" class="@error('surname') is-invalid @enderror border rounded-md py-2 px-3 w-full bg-gray-700 text-gray-300" name="surname" type="text" value="" required>
                            <div class="invalid-feedback text-red-700">@error('surname') {{ $message }} @enderror</div>
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
