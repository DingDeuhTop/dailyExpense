<?php

namespace App\Http\Controllers;

use App\Models\DailyExpense;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DailyExpenseController extends Controller
{
    public function index()
    {
        // return DailyExpense::all();
        // return;
        $posts = User::all();

        return view('index', [
            'posts' => $posts,
        ]);
    }

    public function enteranything(Request $request)
    {
        $asdf = DB::table('daily_expenses')->insert(
            [
                'item', $request->item,
                'price' => $request->price,
                'user_id' => $request->user_id
            ]
        );
    }

    public function show(User $user)
    {
        // dd($dailyExpense::all());
        $total = DB::table('daily_expenses')->where('user_id', '=', $user->id,)->sum('price');

        return view('show', [
            'dailyExpenses' => $user->dailyExpenses,
            'user' => $user,
            'total' => $total
            // dd($total)
        ]);
    }

    public function store(Request $request, User $user)
    {
        $data = DailyExpense::create([
            'item' => $request->item,
            'price' => $request->price,
            'user_id' => $user->id
        ]);

        return redirect('/index/' . $data->user_id);
    }

    public function edit(DailyExpense $dailyExpense)
    {
        return view('edit', [
            'post' => $dailyExpense
        ]);
    }

    public function update(Request $request, DailyExpense $dailyExpense)
    {
        $dailyExpense->update([
            'item' => $request->item,
            'price' => $request->price
        ]);

        return redirect('index/');
    }

    public function destroy(DailyExpense $dailyExpense)
    {
        $dailyExpense->delete();

        return redirect('/index');
    }
}
