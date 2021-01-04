<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //  return Employee::all();
         $data['emp']= Employee::all();
        
        return view('Employee.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('Employee.addpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

        //
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'gender'=>'required',
            'profession'=>'required',
        
        ]);
      
       
        //
          $emp = new Employee();
       
            
          $emp->name = $request->input('name');
          $emp->address	= $request->input('address');
          $emp->country	= $request->input('country');
          $emp->state = $request->input('state');
          $emp->city = $request->input('city');
          $emp->gender = $request->input('gender');
          $emp->profession	= $request->input('profession');
         
     $emp->save();
     
     throw new Exception("An error occurred");
          } catch(\Exception $e) {
           // dd($ex->getMessage()); 
           return redirect('/employee')->with('error',"oopps sorry");
          }
         
          return redirect('/employee')->with('Insert_Message','data has been insert');
        }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $emp = Employee::find($id);

        return view('Employee.edit')->with('emp',$emp) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $emp = Employee::find($id);
        $emp->name = $request->input('name');
        $emp->address = $request->input('address');
        $emp->country = $request->input('country');
        $emp->state = $request->input('state');
        $emp->city = $request->input('city');
        $emp->gender = $request->input('gender');
        $emp->profession = $request->input('profession');
      
        $emp->save();

        return redirect('/employee')->with('update_message','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $emp =Employee::find($id);
        $emp->delete();
        return redirect('/employee')->with('delete_message','Delete has been successfully');
    }
}
