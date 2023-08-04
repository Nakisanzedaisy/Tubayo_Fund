@section('content')
    <div class="container">
        <table class="table bg-light p-4">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Date created</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                <?php $nots = \DB::table('notifications')
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('id', 'desc')
                    ->paginate(20);
                ?>

                @foreach ($nots as $not)
                    <tr>
                        <td>
                            {{ $not->title }}
                        </td>
                        <td>
                            {{ $not->content }}
                        </td>
                        <td>
                            {{ $not->created_at }}
                        </td>
                        <td>
                            @if ($not->status_flag)
                                <a href="#">Seen</a>
                            @else
                                <a href="{{ url("/mark_as_read/$not->id") }}">Mark as read</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $nots->links() !!}
    </div>
@endsection

{{-- notification view --}}
{{-- <!DOCTYPE html>
<html>
<head>
    <!-- Your head section -->
</head>
<body>
    <!-- Your HTML content -->
    <h1>Notifications</h1>
    <ul>
        @foreach ($notifications as $notification)
            <li>
                @if ($notification->unread())
                    <strong>[Unread]</strong>
                @endif
                {{ $notification->data['message'] }}
                <small>{{ $notification->created_at->diffForHumans() }}</small>
                @if ($notification->unread())
                    <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Mark as Read</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html> --}}
