<x-app-layout>
    <div class="flex flex-col gap-4">
        <h1 class="text-xl">Create New Note</h1>
        <form action="{{ route('note.store') }}" class="bg-yellow-400 p-2" method="POST">
           @csrf
            <textarea name="note" id="" placeholder="Enter Your note here" rows="18" class="w-full outline-none text-black text-lg bg-yellow-400"></textarea>
            <div class="flex justify-end gap-3">
                <a href={{route('note.index')}} class="p-1 px-2 rounded bg-red-400">Cancel</a>
                <button class="p-1 px-2 rounded bg-green-400">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
