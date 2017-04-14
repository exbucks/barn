<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LitterWasUnarchived extends Event
{
    use SerializesModels;
    /**
     * @var
     */
    public $litter;
    /**
     * @var
     */
    public $type;
    public $parents;

    /**
     * Create a new event instance.
     *
     * @param $litter
     * @param $type
     */
    public function __construct($litter,$type)
    {
        $this->litter = $litter;
        $this->type = $type;
        $this->parents = $this->litter->parents;//TODO add types in case of multiple animals
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
