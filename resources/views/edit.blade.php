<x-app-layout>
    <div class="main-container">

        <header>
            <h1>Update Task</h1>

            {{-- adding task form --}}
            <form method="post" action="{{ route('tasks.update', ['task' => $tasks->id]) }}" class="input-section">
                @csrf
                @method('patch')
                <input name="tasks" type="text" value="{{ $tasks->tasks }}" class="input w-full max-w-xs" />
                <button class="btn btn-secondary add-task-button">
                    {{ 'Upadte' }}
                </button>
            </form>
        </header>

    </div>
</x-app-layout>
