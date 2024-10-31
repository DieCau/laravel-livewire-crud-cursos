<div class="px-3 py-4">

    <div
        class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4">
            <h1 class="text-2xl font-bold mr-3">Cursos en Papelera</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTl39sh7x7PRv9MBvcuwdy230ry-le9L8HMg&s" class="h-10" alt="trash">
        </div>

        {{-- Table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-white uppercase bg-red-600 hover:bg-red-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre Curso
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Precio
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($cursos_bin as $key => $curso)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $curso->name_curso }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->description_curso }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->price_curso }}
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" wire:navigate href="{{ route('curso.edit', $curso) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Activar</button>

                                <button type="button"
                                    class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2 mb-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900"
                                    wire:click="confirmDelete('{{ $curso->id_curso }}', '{{ $curso->name_curso }}')">Borrar</button>
                            </td>
                        </tr>

                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
