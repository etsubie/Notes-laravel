<x-app-layout>
    <div class="flex flex-col gap-4">
        <h1 class="text-xl">Edit a Note</h1>
        <form action="{{ route('note.update', $note) }}" class="bg-yellow-400 p-2" method="POST">
            @csrf
            @method('PUT')
            <textarea name="note" id="" rows="18" class="w-full outline-none text-black text-lg bg-yellow-400">
                {{$note->note}}
            </textarea>
            <div class="flex justify-end gap-3">
                <a href={{route('note.index')}} class="p-1 px-2 rounded bg-red-400">Cancel</a>
                <button class="p-1 px-2 rounded bg-green-400">Edit</button>
            </div>
        </form>
    </div>
</x-app-layout>
