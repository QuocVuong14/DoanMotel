<?php

namespace App\Mail;

use App\Models\Motel;
use App\Models\User;
use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $user;
    public function __construct(User $user)
    {
        $this->user =$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $post = Motel::all()->first();
        $user = Auth::user();

        $emailuser =$user->email;
        $nameuser = $user->name;
        $phone =$user->user_details->phone;
        $emailct= $post->user->email;
        $namect =$post->user->name;
        $content ="";


        $post->address->street ;


        $content .= 'Tên ' .$nameuser .' Số điện Thoại '.$phone .' chốt phòng tại '.$post->address->street . ' và hẹn gặp trao đổi';

        return
            $this->subject($nameuser)->view('guest.home.mail',compact(['content']));


    }
}
