<?php

namespace App\Livewire\Chat\Pages;

use App\Models\Message;
use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class RoomShow extends Component
{
    public Room $room;
    public string $body;


    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.chat.pages.room-show');
    }

    #[Rule('required')]
    public function submit()
    {
        $this->validate();
        $message = Message::make($this->only('body'));
        // $message->
    }
}
