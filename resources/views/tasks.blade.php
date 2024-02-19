<x-app-layout>


    <div class="main-container">
        <header>
            <h1>Todo List</h1>
            <!-- component -->
            <div>
                <div class="block w-full">
                    {{-- <div
                        class="font-regular relative mb-4 block w-full rounded-lg bg-blue-500 p-4 text-base leading-5 text-white opacity-100">
                        An info alert for showing message.</div> --}}

                    @if (request('deleted'))
                        <div
                            class="font-regular relative mb-4 block w-full rounded-lg bg-red-500 p-4 text-base leading-5 text-white opacity-100">
                            {{ request('deleted') }}</div>
                    @endif
                    @if (request('added'))
                        <div
                            class="font-regular relative mb-4 block w-full rounded-lg bg-green-500 p-4 text-base leading-5 text-white opacity-100">
                            {{ request('added') }}</div>
                    @endif

                    @if (request('update'))
                        <div
                            class="font-regular relative mb-4 block w-full rounded-lg bg-yellow-500 p-4 text-base leading-5 text-white opacity-100">
                            {{ request('update') }}</div>
                    @endif
                </div>

            </div>
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

                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->tasks }}</td>
                        <td>

                            @if ($task->status)
                                Completed
                            @else
                                Pending
                            @endif

                        </td>
                        <td>

                            {{-- edit button --}}
                            <form style="display: inline-block" action="{{ route('tasks.edit', ['task' => $task->id]) }}">
                                @csrf
                                @method('patch')
                                <button class="btn btn-warning btn-sm">
                                    <i class="bx bx-edit-alt bx-bx-xs"></i>
                                </button>
                            </form>

                            {{-- done button --}}
                            <form style="display: inline-block" method="POST"
                                action="{{ route('tasks.update', ['task' => $task->id]) }}">
                                @csrf
                                @method('patch')
                                <button class="btn btn-success btn-sm">
                                    <i class="bx bx-check bx-xs"></i>
                                </button>
                            </form>

                            {{-- delete button --}}
                            <form style="display: inline-block" method="POST"
                                action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-error btn-sm">
                                    <i class="bx bx-trash bx-xs"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</x-app-layout>
