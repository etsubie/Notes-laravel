<x-app-layout>
    <div class="flex justify-center flex-col gap-3">
        <span class="p-2 px-3 text-xl">Note: {{ $note->created_at }}</span>
        <div class="flex gap-1 justify-end">
            <a href="{{ route('note.edit', $note) }}" class="bg-blue-800 text-white p-1 px-2 rounded">Edit</a>
            <form action="{{route('note.destroy' , $note)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-red-800 text-white p-1 px-2 rounded">Delete</button> 
            </form>
        </div>
        <div class="group italic bg-yellow-400 p-2  w-full flex flex-col justify-between rounded-lg">
            {{ $note->note }}
        </div>
    </div>
</x-app-layout>
