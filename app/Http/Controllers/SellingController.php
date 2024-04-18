<?php

namespace App\Http\Controllers;
use App\Models\Selling;
use App\Models\Role;
use App\Models\Transaction_Status;
use Illuminate\Http\Request;
use Hash;

class SellingController extends Controller
{
    public function index(){
        $transaction_status = Transaction_Status::All();
        $sellings = Selling::All();

    return view('selling.index', compact('sellings',));
    }

    public function create(){
        $transaction_status = Transaction_Status::All();
        return view('selling/create', compact('status'));
    }

    public function store(Request $request)
    {  
        // dd($request);
        $request->validate([
            'Customer_Id' => 'required',
            'Cashier_Id' => 'required',
            'Date_Sell' => 'required',
            'Selling_Status' => 'required',
            'Grand_Total' => 'required',
        ]);
           
        $data = $request->all();
        // dd($data);
        $check = Selling::create([
            'Customer_Id' => $data['Customer_Id'],
            'Cashier_Id' => $data['Cashier_Id'],
            'Date_Sell' =>$data['Date_Sell'],
            'Selling_Status' =>$data['Selling_Status'],
            'Grand_Total' => ($data['Grand_Total'])
        ]);
         
        return redirect()->route('selling.index')->withSuccess('Great! You have Successfully loggedin');
    }

    public function edit(Selling $selling)
    {   
        $transaction_status = Transaction_Status::All();
    return view('selling.edit', compact('selling', 'status'));
    }

    public function update(Request $request, Selling $selling, Transaction_Status $transaction_status)
    {
        $request->validate([
            'Customer_Id' => 'required',
            'Cashier_Id' => 'required',
            'Date_Sell' => 'required',
            'Selling_Status' => 'required',
            'Grand_Total' => 'required',
        ]);
        $selling->Customer_Id = $request->Customer_Id;
        $selling->Cashier_Id = $request->Cashier_Id;
        $selling->Date_Sell = $request->Date_Sell;
        $selling->Selling_Status = $request->Selling_Status;
        $selling->Grand_Total = $request->Grand_Total;
        $selling->save();

        return redirect()->route('selling.index')->withSuccess('Great! You have Successfully updated '. $user->name);
    }

    public function destroy(Selling $selling)
    {
        $selling->delete();
        return redirect()->route('selling.index')->withSuccess($selling->Customer_Id. ' has been deleted successfully');
    }

}