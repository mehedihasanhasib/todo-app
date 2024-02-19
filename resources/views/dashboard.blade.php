<x-app-layout>
    <div class="main-container">

        <header>
            <h1>Todo List</h1>

            {{-- adding task form --}}
            <form method="post" action="{{ route('tasks.store') }}" class="input-section">
                @csrf
                <input name="tasks" type="text" placeholder="Add a todo . . ." class="input w-full max-w-xs" />
                <button class="btn btn-secondary add-task-button">
                    <i class="bx bx-plus bx-sm"></i>
                </button>
            </form>
        </header>

    </div>
</x-app-layout>
