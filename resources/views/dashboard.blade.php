<x-app-layout>
    <!-- Copyright -->
    <div class="author-text">
        <p>Made with ❤️ by <a href="https://github.com/abdellatif-laghjaj" target="_blank"><b>Abdellatif Laghjaj</b></a>
        </p>
    </div>

    <div class="main-container">
        <header>
            <h1>Todo List</h1>
            <!-- Error message -->
            {{-- <div class="alert-message"></div> --}}
            <div class="input-section">
                <input type="text" placeholder="Add a todo . . ." class="input w-full max-w-xs" />
                <button class="btn btn-secondary add-task-button">
                    <i class="bx bx-plus bx-sm"></i>
                </button>
            </div>
        </header>

        <table class="table w-full">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="todos-list-body">
            </tbody>
        </table>

    </div>
</x-app-layout>
