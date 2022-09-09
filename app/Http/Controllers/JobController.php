<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Jobs\EmailJob as EmailJob ;
use App\Mail\EmailJob as MailEmailJob;
use App\Jobs\SendMailJob;
class JobController extends Controller
{
    //

    public function index()
    {
        return view('job');
    }
    public function store(Request $request)
    {
        $emails = explode(",", $request->email);
        // $emailData=[
        //     'subject'=> 'Welecom To komatsu',
        //      'body'=>'Welcom to komatsu we are train you as dot net deveveloper'

        // ];

        foreach($emails as $emails)
        {
         SendMailJob::dispatch($emails);
        }
          return back()->with('success', 'Email Procesing Started!');

    }
}