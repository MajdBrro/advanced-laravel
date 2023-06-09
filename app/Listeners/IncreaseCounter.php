<?php

namespace App\Listeners;

use App\Events\VideoViewer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Video;

class IncreaseCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(VideoViewer $event)
    {
        $this -> updateViewer($event -> firstvidrec);
    }
    
    
    function updateViewer($firstvidrec)
    {
        $firstvidrec -> viewers = $firstvidrec -> viewers + 1;
        $firstvidrec -> save();
    }
}
