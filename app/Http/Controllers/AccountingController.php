<?php

namespace App\Http\Controllers;

use App\Accounting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gate;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Gate::allows('accounting',Auth::user()) || Gate::allows('superadmin',Auth::user())){
            $data = Accounting::all();
            if ($request->ajax()) {
                
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('actions', function($row){
    
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editAccounting">Edit</a>';

                            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteAccounting">Delete</a>';
    
                            return $btn;
                        })  
                        ->rawColumns(['status','actions'])
                        ->make(true);    
                
                
            }
            return view('admin.accounting.index');
        }
        return abort(403, 'You are not authorized to visit this page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accounting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Accounting::create($input);
        Session::flash('created_accounting',$input['url'].' role has been created');
        return redirect('admin/accounting/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function show(Accounting $accounting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accounting = Accounting::find($id);
        return response()->json($accounting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $accounting = Accounting::findOrFail($id);
        $input = $request->all();
        $accounting->update($input);
        return response()->json(['success'=>'Product saved successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accounting = Accounting::find($id)->delete();
        return response()->json(['success'=>'deleted successfully.']); 
    }
}
