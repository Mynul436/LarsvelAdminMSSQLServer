<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $logs = Log::all();

         $logs = Log::with('user')->latest()->paginate(10);
        
        // Return the logs view with the logs data
        return view('logs.index', compact('logs'));
        
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
        $logs = Log::all();

    // Loop through each log and create a new instance in the database
    foreach ($logs as $log) {
        $newLog = new Log();
        $newLog->user_id = $log->user_id;
        $newLog->action = $log->action;
        $newLog->description = $log->description;
        $newLog->ip_address = $log->ip_address;
        $newLog->user_agent = $log->user_agent;
        $newLog->type = $log->type;
        $newLog->level = $log->level;
        $newLog->context = $log->context;
        $newLog->url = $log->url;
        $newLog->http_method = $log->http_method;
        $newLog->response_code = $log->response_code;
        $newLog->request_payload = $log->request_payload;
        $newLog->response_payload = $log->response_payload;
        $newLog->save();
    }

    // Return a response indicating success
    return response()->json(['message' => 'Logs have been imported successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
        //
    }
    public function login(Request $request)
    {
        // Perform login operation
        Log::channel('user_activity')->info('User Login', [
            'user_id' => $request->user()->id,
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url' => $request->url(),
            'http_method' => $request->method(),

        ]);
    }




}
