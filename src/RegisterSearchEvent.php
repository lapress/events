<?php

namespace LaPress\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class RegisterSearchEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $count;

    /**
     * @var null
     */
    public $model;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $query, int $count = 0, string $model = null)
    {
        $this->query = $query;
        $this->count = $count;
        $this->model = $model;
    }
}
