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
     * @var null|int
     */
    public $count;

    /**
     * @var null|string
     */
    public $model;

    /**
     * Create a new event instance.
     *
     * @param string      $query
     * @param string|null $model
     * @param int|null    $count
     */
    public function __construct(string $query, string $model = null, int $count = null)
    {
        $this->query = $query;
        $this->count = $count;
        $this->model = $model;
    }
}
