<?php

namespace App\Http\Controllers;

use App\DataTables\VotersDataTable;
use App\Municipality;
use App\Voter;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VotersDataTable $dataTable)
    {

           $municipalities = Municipality::all();

        return $dataTable->render('dashboard', ['municipalities' => $municipalities]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
   {
       $request->validate(
           [
               'fname' => 'required',
               'lname' => 'required',
               'cin' => 'required',
               'municipality' => 'required',
               'circle' => 'required',
               'bureau' => 'required'
           ],
           [
               'fname.required' => 'المرجو إدخال إسم الناخب!',
               'lname.required' => 'المرجو إدخال نسب الناخب!',
               'cin.required' => 'المرجو إدخال رقم البطاقة الوطنية للناخب!',
               'municipality_id.required' => 'المرجو إدخال الجماعة الترابية!',
               'circle.required' => 'المرجو إدخال رقم الدائرة!',
               'bureau.required' => 'المرجو إدخال رقم المكتب!',
           ]);

       Voter::create([
           'cin' => $request->cin,
           'fname' => $request->fname,
           'lname' => $request->lname,
           'by_user' => auth()->user()->hasPermessionTo('cadre') ? auth()->user()->name : null,
           'municipality_id' => $request->municipality,
           'circle' => $request->circle,
           'bureau' => $request->bureau,
           'status' => 'غير محجوز',
           'status_value' => 0
       ]);
       return redirect()->route('voters.index')->with('success', 'تمت الإضافة بنجاح');
   }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->unreserved === 'unreserved' && auth()->user()->hasPermissionTo('admin')) {

            if(auth()->user()->hasPermissionTo('cadre')) {

                Voter::find($id)->update(['status' => 'غير محجوز', 'status_value' => 0, 'by_user' => auth()->user()->name ]);

            } else {

                Voter::find($id)->update(['status' => 'غير محجوز', 'status_value' => 0]);

            }

            return redirect()->route('voters.index')->with('unreserved', 'تم إلغاء الحجز بنجاح');

        } elseif ($request->reserved === 'reserved') {

            if(auth()->user()->hasPermissionTo('cadre')) {

                Voter::find($id)->update(['status' => 'محجوز', 'status_value' => 1, 'by_user' => auth()->user()->name ]);

            } else {

                Voter::find($id)->update(['status' => 'محجوز', 'status_value' => 1]);

            }

            return redirect()->route('voters.index')->with('reserved', 'تم الحجز بنجاح');

        } elseif ($request->voted === 'voted') {

            if(auth()->user()->hasPermissionTo('cadre')){

                Voter::find($id)->update(['status' => 'تم التصويت', 'status_value' => 2, 'by_user' => auth()->user()->name]);

            } else {

                Voter::find($id)->update(['status' => 'تم التصويت', 'status_value' => 2]);

            }

            return redirect()->route('voters.index')->with('voted', 'تم التصويت بنجاح');

        }
    }

}
