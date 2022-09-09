<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendMail;
class SendMailJob implements ShouldQueue
{
    public $to_email;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to_email)
    {
        //
        $this->to_email= $to_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
         $emailData=[
            'subject'=> 'Welecom To komatsu',
             'body'=>'Welcom to komatsu we are train you as dot net deveveloper'

        ];
        Mail::to($this->to_email)->send(new SendMail($emailData));
     
    }
}