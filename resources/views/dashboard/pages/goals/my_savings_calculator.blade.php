@extends('new-ui.users-profile')

@section('content')
    <div class="container">
        <table class="table bg-light p-4">
            <thead>
                <tr>
                    <th>Goal Target Amount (UGX) </th>
                    <th>Current Progress (UGX) </th>
                    <th>Completion Status</th>
                    <th>Principle Amount</th>
                    <th>Date created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php $goals = \DB::table('goals')
                    ->join('savings_calculators', 'savings_calculators.goal_id', '=', 'goals.id')
                    ->where('goals.user_id', Auth::user()->id)
                    ->orderBy('id', 'desc')
                    ->select('savings_calculators.*', 'goals.target_amount', 'goals.current_progress', 'goals.completion_status')
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
                            {{ $goal->principal_amount }}
                        </td>
                        <td>
                            {{ $goal->created_at }}
                        </td>
                        <td>
                            <a href="{{ url("/account-add-transaction/$goal->goal_id") }}"
                                class="btn btn-sm btn-info">Transact</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $goals->links() !!}
    </div>
@endsection 

{{-- Calculator view --}}
{{-- <!DOCTYPE html>
<html>
<head>
    <!-- Your head section -->
</head>
<body>
    <!-- Your HTML content -->
    <h1>Savings Calculator</h1>

    <form action="{{ route('savings_calculator.store') }}" method="POST">
        @csrf

        <label for="initial_amount">Initial Amount:</label>
        <input type="number" name="initial_amount" id="initial_amount" required min="0"><br>

        <label for="monthly_deposit">Monthly Deposit:</label>
        <input type="number" name="monthly_deposit" id="monthly_deposit" required min="0"><br>

        <label for="annual_interest_rate">Annual Interest Rate (%):</label>
        <input type="number" name="annual_interest_rate" id="annual_interest_rate" required min="0" step="0.01"><br>

        <label for="investment_duration_months">Principle Amount (Shs):</label>
        <input type="number" name="investment_duration_months" id="investment_duration_months" required min="1"><br>

        <button type="submit">Calculate</button>
    </form>
</body>
</html> --}}
