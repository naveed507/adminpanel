<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Meter\AllocateMeterRequest;
use App\Models\CustomerMeter;
use App\Models\MeterType;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class MeterReadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.content.meterreading.index');
    }

    public function meterTypes()
    {
        $meterTypes = MeterType::all();
        return view('admin.content.meterreading.metertypes', compact('meterTypes'));
    }

    public function allocateMeterview()
    {
        $meterTypes = MeterType::all();
        $users = User::where('user_type', 'USER')->where('status', 'ACTIVE')->get();
        return view('admin.content.meterreading.allocatemeter', compact('meterTypes', 'users'));
    }

    public function allocatedMeters()
    {
        $customerMeters = CustomerMeter::with('customerdetail', 'metertype')->get();
        return view('admin.content.meterreading.allocatdemeters', compact('customerMeters'));
    }

    public function allocatedMetersEditView($id)
    {
        $customerMeter = CustomerMeter::with('customerdetail', 'metertype')->find($id);
        $meterTypes = MeterType::all();
        $users = User::where('user_type', 'USER')->where('status', 'ACTIVE')->get();
        return view('admin.content.meterreading.editallocatdemeters', compact('customerMeter', 'meterTypes', 'users'));
    }

    public function updateAllocatedMeter(Request $request)
    {
        $record = CustomerMeter::find($request->record_id);
        try {
            $record->update([
                'meter_type_id' => $request->meter_type,
                'user_id' => $request->user_id,
                'meter_point_number' => $request->meter_point_number,
                'meter_serial_number' => $request->meter_serial_number,
                'meter_reference' => $request->meter_reference,
                'status' => ($request->status == 'ACTIVE') ? 'ACTIVE' : 'INACTIVE',
            ]);
            $this->success("Meter Allocated To User Updated Sucessfuly");
            return redirect()->back();
        } catch (Exception $e) {
            $this->error("Something Went Wrong Please Try Again");
            return redirect()->back();
        }
    }


    public function allocateMeter(AllocateMeterRequest $request)
    {
        try {
            CustomerMeter::create([
                'meter_type_id' => $request->meter_type,
                'user_id' => $request->user_id,
                'meter_point_number' => $request->meter_point_number,
                'meter_serial_number' => $request->meter_serial_number,
                'meter_reference' => $request->meter_reference,
                'status' => ($request->status == 'ACTIVE') ? 'ACTIVE' : 'INACTIVE',
            ]);
            $this->success("Meter Allocated To User Sucessfuly");
            return redirect()->back();
        } catch (Exception $e) {
            dd($e->getMessage());
            $this->error("Something Went Wrong Please Try Again");
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
}
