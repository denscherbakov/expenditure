<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenditureController extends Controller
{
    public function dashboard()
    {
        $expenditures = Expenditure::where(['user_id' => Auth::user()->id])->orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard', [
            'expenditures' => $expenditures
        ]);
    }

    public function graphic()
    {
        $expenditures = Expenditure::where(['user_id' => Auth::user()->id])->get();

        $data = [];

        foreach ($expenditures as $expenditure){
            if (isset($data[$expenditure->category->name])){
                $data[$expenditure->category->name] += $expenditure->sum;
            } else {
                $data[$expenditure->category->name] = $expenditure->sum;
            }
        }

        $newData = [];

        foreach ($data as $key => $item) {
            $newData[] = ['name' => $key, 'y' => $item];
        }

        return view('graphic', [
            'data' => $newData,
        ]);
    }
}
