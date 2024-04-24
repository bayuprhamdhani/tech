<?php

namespace App\Http\Controllers;
use App\Models\Purchasing;
use App\Models\Role;
use App\Models\Transaction_Status;
use Illuminate\Http\Request;
use Hash;

class PurchasingController extends Controller
{
    public function index(){
        $transaction_status = Transaction_Status::All();
        $purchasings = Purchasing::All();

    return view('purchasing.index', compact('purchasings',));
    }

    public function create(){
        $transaction_status = Transaction_Status::All();
        return view('purchasing/create', compact('transaction_status'));
    }

    public function store(Request $request)
    {  
        dd($request);
        $request->validate([
            'Vendor_Id' => 'required',
            'Admin_Id' => 'required',
            'Date_Purchase' => 'required',
            'Purchase_Status' => 'required',
            'Grand_Total' => 'required',
        ]);
           
        $data = $request->all();
        // dd($data);
        $check = Purchasing::create([
            'Vendor_Id' => $data['Vendor_Id'],
            'Admin_Id' => $data['Admin_Id'],
            'Date_Purchase' =>$data['Date_Purchase'],
            'Purchase_Status' =>$data['Purchase_Status'],
            'Grand_Total' => ($data['Grand_Total'])
        ]);
         
        return redirect()->route('purchase.index')->withSuccess('Great! You have Successfully loggedin');
    }

    public function edit(Purchasing $purchasing)
    {   
        $transaction_status = Transaction_Status::All();
    return view('purchasing.edit', compact('purchasing', 'transaction_status'));
    }

    public function update(Request $request, Purchasing $purchasing, Transaction_Status $transaction_status)
    {
        $request->validate([
            'Vendor_Id' => 'required',
            'Admin_Id' => 'required',
            'Date_Purchase' => 'required',
            'Purchase_Status' => 'required',
            'Grand_Total' => 'required',
        ]);
        $purchasing->Vendor_Id = $request->Vendor_Id;
        $purchasing->Admin_Id = $request->Admin_Id;
        $purchasing->Date_Purchase = $request->Date_Purchase;
        $purchasing->Purchase_Status = $request->Selling_Status;
        $purchasing->Grand_Total = $request->Grand_Total;
        $purchasing->save();

        return redirect()->route('purchase.index')->withSuccess('Great! You have Successfully updated '. $user->name);
    }

    public function destroy(Purchasing $purchasing)
    {
        $purchasing->delete();
        return redirect()->route('purchase.index')->withSuccess($purchasing->Vendor_Id. ' has been deleted successfully');
    }

}