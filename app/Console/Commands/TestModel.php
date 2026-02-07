<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Event;
use App\Models\Booking;

class TestModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jm';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'X7 test command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $event = Event::find(1);
        $bookings = $event->bookings()->create([
            'user_id' => 1,
            'quantity' => 2,
            'total_amount' => 100.00,
            'booking_reference' => 'REF123456',
            'status' => 'confirmed',        
        ]);
        dd($bookings->toArray());     
    }
}
