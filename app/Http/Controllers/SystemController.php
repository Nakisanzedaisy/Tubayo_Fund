<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Notification;
use App\Models\SavingsAccount;
use App\Models\Goal;
use App\Models\SavingsCalculator;
use App\Models\Achievement;
use App\Models\Feedback;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
//use App\Models\FinancialTip;
//use App\Models\Article;
// use Auth;

class SystemController extends Controller
{

    public function mark_notification_as_read($id)
    {
        $notification = Notification::find($id);

        $notification->status_flag = true;
        $notification->save();

        return back();
    }

    //SavingsAccountController
    public function show_my_savings_account()
    {
         $my_savings = \DB::table('savings_accounts')
            ->where('user_id', Auth::user()->id)
            ->first();

        if (is_null($my_savings)) {
            $my_savings = new SavingsAccount();
            $my_savings->user_id = Auth::user()->id;
            $my_savings->account_balance = 0;
            $my_savings->account_type = 'SAVINGS';
            $my_savings->save();
        }

        return view('dashboard.pages.savings.my_savings', ['my_savings' => $my_savings]);
    }

    public function show_transactions(){
        return view('dashboard.pages.transactions.my_transactions');
    }
    public function show_goals(){
        return view('dashboard.pages.goals.my_goals');
    }
    public function show_archievements(){
        return view('dashboard.pages.achievements.my_achievements');
    }
    public function show_savings_calculators()
    {
        return view('dashboard.pages.goals.my_savings_calculator');
    }
    public function show_add_goal()
    {
        return view('dashboard.pages.goals.add_goal');
    }

    public function add_goal(Request $request){
        $request->validate([
            'target_amount' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'target_date' => 'required|date',
        ]);
        auth()->user()->goals()->create($request->all());
        $goal = new Goal();
        $goal->user_id = Auth::user()->id;
        $goal->target_amount = $request['target_amount'];
        $goal->current_progress = 0;
        $goal->save();

        $calc = new SavingsCalculator();
        $calc->goal_id = $goal->id;
        $calc->user_id = $calc->user_id;
        $calc->principal_amount = $goal->target_amount;
        $calc->save();

        return redirect('/account-goals')->with(['message' => 'Goal created successfully!']);
    }


    public function add_transaction(Request $request)
    {
        $request->validate([
            'goal_id' => 'required',
            'calc_id' => 'required',
            'transaction_amount' => 'required',
            'transaction_type' => 'required'
        ]);


        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_type = $request['transaction_type'];
        $transaction->amount = $request['transaction_amount'];
        $transaction->has_succeeded = false;
        $transaction->save();

        $goal = Goal::find($request['goal_id']);
        $calc =  SavingsCalculator::find($request['calc_id']);

        $savings_account = SavingsAccount::where('user_id', $goal->user_id)->first();

        if(is_null($savings_account))
        {
            $savings_account = new SavingsAccount();
            $savings_account->user_id = Auth::user()->id;
            $savings_account->save();
        }
        if($request['transaction_type'] == "DEPOSIT")
        {
            $goal->current_progress += (int)$transaction->amount;
            $calc->principal_amount -= (int)$transaction->amount;
            $savings_account->account_balance += (int)$transaction->amount;

            $goal->save();
            $calc->save();
            $savings_account->save();

             $notification = new Notification();
             $notification->user_id = Auth::user()->id;
             $notification->title = "DEPOSIT SUCCESS";
             $notification->content = "A deposit of UGX $transaction->amount was made to your savings account! Trans ID: $transaction->id";
             $notification->save();
        }
        if($goal->current_progress  >= $goal->target_amount )
        {
                $goal->completion_status = "COMPLETE";
                $goal->save();

                $achievement = new Achievement();
                $achievement->user_id = Auth::user()->id;
                $achievement->name = "SAVINGS GOAL ACHIEVED OF UGX $goal->target_amount REACHED";
                $achievement->description = "You have managed to save the full amount Ugx $goal->target_amount described in your goal! Trans ID: $transaction->id";
                $achievement->date_earned = date('Y-m-d h:m:s');
                $achievement->save();

                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->title = "SAVINGS GOAL ACHIEVED";
                $notification->content = $achievement->description;
                $notification->save();
        }
        if($request['transaction_type'] == "WITHDRAW")
        {
            $goal->current_progress -= (int)$transaction->amount;
            $calc->principal_amount += (int)$transaction->amount;
            $savings_account->account_balance -= (int)$transaction->amount;
            $goal->save();
            $calc->save();
            $savings_account->save();

            $notification = new Notification();
            $notification->user_id = Auth::user()->id;
            $notification->title = "WITHDRAW SUCCESSFUL";
            $notification->content = "Your account has been debited with UGX $transaction->amount . Trans ID: $transaction->id ";
            $notification->save();
        }
        return redirect('/account-goal-savings-calculator');

    }
    //DepositController
    public function show_deposit()
    {
        return view('process_deposit');
    }

    public function process(Request $request)
    {
       

        $user = Auth::id(); 
        // Validate the form data
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'mode_of_payment' => 'required|string|max:255',
            'proof_of_payment' => 'required|file|mimes:jpeg,png,pdf,doc,docx|max:2048',
        ]);
    
        // Create a new instance of the Deposit model and assign the form data
        $depositsdetails = new Deposit();
        $depositsdetails->amount = $request->input('amount');
        $depositsdetails->mode_of_payment = $request->input('mode_of_payment');
    
        // Handle the file upload and store the file path in the database
        if ($request->hasFile('proof_of_payment')) {
            $file = $request->file('proof_of_payment');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('proof_of_payments', $filename); // Store the file in the "proof_of_payments" directory
            $depositsdetails->proof_of_payment = 'proof_of_payments/' . $filename; // Save the file path in the model attribute
        }
    
        // Save the model to the database
        $depositsdetails->user_id=$user;
        $depositsdetails->save();

        // Redirect to a success page or return a success response
        return redirect()->route('userdashboard')->with('success', 'Deposit successful! Thank you for your payment.');
    }



    //WithdrawController
    public function create()
    {
        // Add logic to display the withdrawal form
        return view('withdraw_money');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        // Save the withdrawal information to the database
        $withdraw = new Withdraw([
            'amount' => $request->input('amount'),
            'status' => 'pending', // Assuming the status is set to "pending" by default
            'transaction_date' => null, // Assuming the transaction_date is initially set to null
        ]);

        // Associate the withdrawal with the authenticated user (assuming you have user authentication set up)
        $withdraw->user_id = auth()->user()->id;

        $withdraw->save();

        // Redirect to a success page or return a success response
        return redirect()->route('userdashboard')->with('success', 'Withdrawal request submitted successfully! We will process it soon.');
    }




//FeedbackController
    public function add_feedback()
    {
        return view('dashboard.pages.feedbacks.feedbacks');
    }

    public function show_feedback(Request $request)
    {
        // Validate the form data
        $request->validate([
            //'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Save the feedback to the database or perform any other actions
        // For example, you can create a Feedback model and save the data there

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }

    //AchievementsController
    public function show_achievements()
    {
        // Retrieve all achievements for the currently authenticated user
        $achievements = auth()->user()->achievements;

        return view('dashboard.pages.achievements.my_achievements', compact('achievements'));
    }

    // Add more methods as needed (e.g., create, store, edit, update, destroy)
//}


//TransactionsController
public function index()
    {
        // Retrieve all transactions for the currently authenticated user
        $transactions = auth()->user()->transactions;

        return view('dashboard.pages.transactions.my_transactions', compact('transactions'));
    }

    // Add more methods as needed (e.g., create, store, edit, update, destroy)
//}


//SavingsAccountController
//public function show_transactions()
    //{
        // Retrieve all savings accounts for the currently authenticated user
        //$savingsAccounts = auth()->user()->savingsAccounts;

        //return view('dashboard.pages.savings.my_savings', compact('savingsAccounts'));
    //}

   // public function show(SavingsAccount $savingsAccount)
    //{
        // Show details of a specific savings account
        //return view('dashboard.pages.savings.my_savings', ['my_savings' => $my_savings]);
        //return view('dashboard.pages.savings.my_savings', compact('savingsAccount'));

    // Add more methods as needed (e.g., create, store, edit, update, destroy)
//}
    //}
}