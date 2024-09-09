<x-app-layout>
    <div class="flex justify-center flex-col gap-3">
        <a href="{{ route('note.create') }}" class="p-2 px-3 text-xl border-2 text-center w-32 border-gray-200">New
            Note</a>
        <div class="flex gap-4 flex-wrap justify-center">
            @foreach ($notes as $note)
                <div class="group italic bg-yellow-400 p-2  w-48 flex flex-col justify-between rounded-lg">
                    <div>{{ Str::words($note->note, 30) }}</div>
                    <div class="flex gap-1 justify-end">
                        <a href="{{ route('note.show', $note) }}"
                            class="bg-blue-800 text-white p-1 px-2 rounded opacity-0 group-hover:opacity-100 transition duration-200">View</a>
                        <a href="{{ route('note.edit', $note) }}"
                            class="bg-blue-800 text-white p-1 px-2 rounded opacity-0 group-hover:opacity-100 transition duration-200">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-800 text-white p-1 px-2 rounded opacity-0 group-hover:opacity-100 transition duration-200">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="p-4">{{$notes->links()}}</div>
    </div>
</x-app-layout>
