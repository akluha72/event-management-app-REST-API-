<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttendeeResource;
use Illuminate\Http\Request;
use App\Http\Traits\CanLoadRelationships;

use App\Models\Event;
use App\Models\Attendee;

class AttendeeController extends Controller
{

    use CanLoadRelationships;

    private array $relations = ['user'];

    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index','show', 'update']);
        $this->authorizeResource(Event::class, 'event');
    }

    public function index(Event $event)
    {
        $attendees = $this->loadRelationships(
            $event->attendees()->latest()
        );

        return AttendeeResource::collection(
            $attendees->paginate()
        );
    }


    public function store(Request $request, Event $event)
    {
        $attendee = $this->loadRelationships(
            $event->attendees()->create([
                'user_id' => 1
            ])
        );
        return new AttendeeResource($attendee);
    }

    public function show(Event $event, Attendee $attendee)
    {
        return new AttendeeResource(
            $this->loadRelationships($attendee)
        );
    }


    public function update(Request $request, string $id)
    {
    
    }


    public function destroy(Event $event, Attendee $attendee)
    {
        // dd($attendee, $event);
        // $this->authorize('delete-attendee', [$event, $attendee]);
        $attendee->delete();

        return response()->json([
            'message' => 'Attendee deleted successfully'
        ]);
    }
}
