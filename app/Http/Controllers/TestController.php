<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Models\Test;
use App\Repositories\TestInterface;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $test;
    protected $message;
    public function __construct(TestInterface $test)
    {
        $this->test = $test;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->test->all();
        return view('backend.pages.test.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {
        $data = $request->all();
        $success = $this->test->store($data);
        if (is_null($success) === false) {
            $notification = [
                'title'      => 'Test',
                'message'    => 'Test Inserted Successfully!',
                'alert-type' => 'success',
            ];
        } else {
            $notification = [
                'title'      => 'Test',
                'message'    => 'Test Field Required!',
                'alert-type' => 'error',
            ];
        }
        // if (is_null($success) === false) {
        //     $notification = $this->message->success('Test', 'Test Added Successfully');
        // } else {
        //     $notification = $this->message->error('Test', 'Test System Error');
        // }
        return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = $this->test->get($id);
        return view('backend.pages.test.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(TestRequest $request, $id)
    {
        $data = $request->all();
        $success = $this->test->update($data, $id);
        if (is_null($success) === false) {
            $notification = [
                'title'      => 'Test',
                'message'    => 'Test Updated Successfully!',
                'alert-type' => 'success',
            ];
        } else {
            $notification = [
                'title'      => 'Test',
                'message'    => 'Test Field Required!',
                'alert-type' => 'error',
            ];
        }
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = $this->test->delete($id);
        if (is_null($success) === false) {
            $notification = [
                'title'      => 'Test',
                'message'    => 'Test Deleted Successfully!',
                'alert-type' => 'success',
            ];
        } else {
            $notification = [
                'title'      => 'Test',
                'message'    => 'Test System Error!',
                'alert-type' => 'error',
            ];
        }
        return redirect()->back()->with($notification);
    }
}
