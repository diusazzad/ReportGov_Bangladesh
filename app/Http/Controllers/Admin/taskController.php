<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.admin.task.index',[
            'tasks' => Task::latest()->filter(['search', 'searchbody'])->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.admin.task.create', [
            'users' => User::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $this->validateTask($request);
        $attributes['taskcreator_id'] =  Auth::user()->id;
        $attributes['completed'] = 0;
        $attributes['slug'] = Str::slug($request->title);
        $task = Task::create($attributes);

        $this->notifyUser($task->assigneduser_id);

        return redirect('/')->with('success', 'Task updated and assigned user notified by email');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('auth.admin.task.show',[
            'task' => Task::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('task.edit', [
            'task' => Task::find($id),
            'users' => User::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attributes = $this->validateTask($request);
        $task =  Task::find($id);
        $attributes['taskcreator_id'] = Auth::user()->id;
        $attributes['completed'] = 0;
        $attributes['slug'] = Str::slug($request->title);
        $task->update($attributes);

        $this->notifyUser($task->assigneduser_id);

        return redirect('/task')->with('success', 'Task updated and assigned user notified by email');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete;
        return redirect('/task')->with('success', 'Task Deleted');

    }


    // public function validateTask(Request $request)
    // {
    //     $attributes = $request->validate([
    //         'title' => 'required',
    //         'due' => 'required',
    //         'description' => 'required',
    //         'assigneduser_id' => ['required', Rule::exists('users', 'id')]
    //     ]);

    //     return $attributes;
    // }

    // public function completed($id)
    // {
    //     $task = Task::find($id);
    //     $task->completed = 1;
    //     $task->update();
    //     $users = User::where('id', $task->assigneduser_id )
    //                     ->orWhere('id',$task->taskcreator_id)
    //                     ->get();
    //     Notification::send($users, new TaskCompleted($task));
    //     return redirect('/task')->with('success', 'Task marked completed');
    // }

    // public function notifyUser($assignedUserId)
    // {
    //     $task = Task::where('assigneduser_id',$assignedUserId)->first();
    //     $user = User::where('id', $assignedUserId)->first();
    //     Notification::send($user, new TaskAssigned($task));

    //     return back()->with('success', 'Task notification email has been sent to the assigned user');
    // }
}
