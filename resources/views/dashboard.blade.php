<x-app-layout>


    <div class="main-container">
        <header>
            <h1>Todo List</h1>
            {{--  Error message  --}}
            {{-- <div class="alert-message"></div> --}}

            {{-- adding task form --}}
            <form method="post" action="{{ route('tasks.store') }}" class="input-section">
                @csrf
                <input name="tasks" type="text" placeholder="Add a todo . . ." class="input w-full max-w-xs" />
                <button class="btn btn-secondary add-task-button">
                    <i class="bx bx-plus bx-sm"></i>
                </button>
            </form>


        </header>

        <table class="table w-full">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="todos-list-body">
                {{-- <tr>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr> --}}
            </tbody>
        </table>

    </div>
</x-app-layout>
