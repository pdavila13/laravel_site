<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Pages Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct() {
        //$this->middleware('auth');
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function profile() {
        return view('pages.profile');
    }

    public function portafolio() {
        return view('pages.portafolio');
    }

    public function services() {
        return view('pages.services');
    }

    public function resume() {
        return view('pages.resume');
    }

    public function referents() {
        return view('pages.referents');
    }

    public function skills() {
        return view('pages.skills');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function download(){
        $pathToFile = "../public/CV_PaoloDavila-es.pdf";
        return response()->download($pathToFile);
    }

}