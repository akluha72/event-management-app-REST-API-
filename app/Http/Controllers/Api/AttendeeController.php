<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttendeeResource;
use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Attendee;

class AttendeeController extends Controller
{

    public function index(Event $event)
    {
        $attendees = $event->attendee()->latest();

        return AttendeeResource::collection(
            $attendees->paginate()
        );
    }


    public function store(Request $request, Event $event)
    {
        $attendee = $event->attendee()->create([
            'user_id' => 1
        ]);

        return new AttendeeResource($attendee);
    }

    public function show(Event $event, Attendee $attendee)
    {
        return new AttendeeResource($attendee);
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
