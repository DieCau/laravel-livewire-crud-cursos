<div class="px-3 py-4">

    <div
        class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

        <h1 class="text-2xl font-bold mb-4">Listado de Cursos</h1>
        {{-- Table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <button wire:navigate href="{{ route('curso.create') }}" type="button"
                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Agregar
                Curso</button>

            {{-- Alert --}}
            @if ($response = Session::get('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <span class="font-medium">Atención!</span> {{ $response }}
                </div>
            @endif


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

                    @forelse ($cursos as $index=>$curso)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $index+1 }}
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
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</button>

                            <button type="button" class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2 mb-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900"
                            wire:click="confirmDelete('{{ $curso->id_curso }}', '{{ $curso->name_curso }}')">Eliminar</button>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@script
<script>
    $wire.on('confirmDelete', function(message, name_curso) {
        Swal.fire({
            title: message,
            text: "No podras revertir los cambios!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $wire.dispatch('delete');
            }
        })
    })

    $wire.on('borrado', function(message) {
        Swal.fire(
            {
                icon: 'success',
                title: 'Mensaje del sistema',
                text: message,
                timer: 1500
            }
        )
    })
</script>
@endscript

