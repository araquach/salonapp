<?php

namespace App\Http\Controllers;

use App\Holiday;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\HolidayFormRequest;
use Carbon\Carbon;
use Auth;

class HolidayController extends Controller
{
    
    public function __construct(Holiday $holiday)
	{	
		$this->holiday = $holiday;
	}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('holiday/index');
    }

    public function holidays()
    {
        $holidays = Holiday::get();
        
        return $holidays->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holiday.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\HolidayFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HolidayFormRequest $request)
    {
        $input = $request->all();
		
	    Holiday::create($input);
	    
	    return redirect('holiday/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function show(Holiday $holiday)
    {
        return view('holiday.view', compact('holiday'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function edit(Holiday $holiday )
    {
        return view('holiday.update', compact('holiday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\HolidayFormRequest  $request
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(HolidayFormRequest $request, Holiday $holiday)
    {
        $holiday->update($request->all());
        
        return redirect('holiday/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holiday $holiday)
    {
        // if Holiday not approved - can be deleted functionality
    }
    
}