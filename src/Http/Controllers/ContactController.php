<?php
namespace Alidev\Contact\Http\Controllers;

use Alidev\Contact\Mail\ContactMailable;
use Alidev\Contact\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function index(){
        return view('contact::contact');
    }
    public function send(Request $request){
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message,$request->name));
         Contact::create($request->all());
         return redirect(route('contact'));
     }
}
