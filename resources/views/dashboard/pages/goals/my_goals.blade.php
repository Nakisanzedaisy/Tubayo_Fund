@extends('new-ui.users-profile')

@section('content')
    <div class="container">
        <a href="{{ url('/account-add-goal') }}" class="btn btn-info">Add Goal</a>
        <table class="table bg-light p-4">
            <thead>
                <tr>
                    <th>Target Amount (UGX) </th>
                    <th>Current Progress (UGX) </th>
                    <th>Completion Status</th>
                </tr>
            </thead>
            <tbody>

                <?php $goals = \DB::table('goals')
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('id', 'desc')
                    ->paginate(20);
                ?>

                @foreach ($goals as $goal)
                    <tr>
                        <td>
                            {{ $goal->target_amount }}
                        </td>
                        <td>
                            {{ $goal->current_progress }}
                        </td>
                        <td>
                            {{ $goal->completion_status }}
                        </td>
                        <td>
                            {{ $goal->created_at }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $goals->links() !!}
    </div>
@endsection

{{-- Goals view --}}
{{-- <!DOCTYPE html>
<html>
<head>
    <!-- Your head section -->
</head>
<body>
    <!-- Your HTML content -->
    <h1>Goals</h1>

    <a href="{{ route('goals.create') }}">Add New Goal</a>

    <ul>
        @foreach ($goals as $goal)
            <li>
                <strong>Goal Title:</strong> {{ $goal->title }}<br>
                <strong>Goal Description:</strong> {{ $goal->description }}<br>
                <strong>Target Amount:</strong> ${{ $goal->target_amount }}<br>
                <strong>Target Date:</strong> {{ $goal->target_date }}<br>

                <a href="{{ route('goals.edit', $goal->id) }}">Edit</a>

                <form action="{{ route('goals.destroy', $goal->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
            <br>
        @endforeach
    </ul>
</body>
</html> --}}
