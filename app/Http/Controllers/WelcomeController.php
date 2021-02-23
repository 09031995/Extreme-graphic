<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ContactRepository;
use App\Http\Controllers\Controller;


class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * @var compagnyRepository
     */
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function connexion()
    {
        return view('frontend.pages.sign.sign');
    }

    public function infographics()
    {
        return view('frontend.pages.services.infographics');
    }

    public function Serigraphy()
    {
        return view('frontend.pages.services.Serigraphy');
    }

    public function flyers()
    {
        return view('frontend.pages.produits.flyers');
    }

    public function contact()
    {
        return view('frontend.pages.use.contact');
    }

    public function send(Request $request)
    {
        $contact = $this->contactRepository->store($request->input());
        //dd($contact);
        \Mail::send('frontend.mails.contact', compact('contact'), function($message)
        {
            $message->to(['jbiemewou@gmail.com'])->subject('Nouveau contact')->from('contact@beconbank.com', 'Becon\'Bank');
        });
        return redirect()->back()->with('status', 'Merci de nous avoir contacté. Nous vous reviendrons dès que possible');
    }
}
