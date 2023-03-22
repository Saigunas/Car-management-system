<x-app-layout>
    <div class="container mt-6 mx-auto">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="font-bold text-white mb-6">Redaguoti savininką</div>
                    <form method="post" action="{{ route('owners.update', $owner->id) }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="name">
                                Vardas:
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight bg-gray-700 focus:outline-none focus:shadow-outline"
                                   name="name" type="text" value="{{ $owner->name }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-300 font-bold mb-2" for="surname">
                                Pavardė:
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-300 leading-tight bg-gray-700 focus:outline-none focus:shadow-outline"
                                   name="surname" type="text" value="{{ $owner->surname }}" required>
                        </div>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                            Išsaugoti
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
