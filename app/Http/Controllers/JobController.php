<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

use App\Http\Resources\Jobs as JobResouce;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //get articles
        $jobs = Job::paginate(15);

        //Return the collection article as a resource
        return JobResouce::Collection($jobs); //if you're returning a list of item, use collection
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

        // return new JobResouce($request);
        
        $job = $request->isMethod('put') ? Job::findOrFail($request->job_id) : new Job;
        // $job->id =  $request->input('job_id');
        $job->title = $request->input('title');
        $job->company = $request->input('company');
        $job->description = $request->input('description');

        if ($job->save()){
            return new JobResouce($job);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $job = Job::findOrFail($id);
        if($job->delete()){
            return new JobResouce($job);
        }
    }
}
