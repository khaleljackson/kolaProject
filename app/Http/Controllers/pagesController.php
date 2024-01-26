<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePageFirstSection;
use App\Homemainslide;
use App\Sociallink;
use App\Partner;
use App\Aboutbrief;
use App\Vision;
use App\Mission;
use App\Director;
use App\Service;
use App\Contact;
use App\Gallary;

class pagesController extends Controller
{
    public function index(){
        //Main Header of homepage
        $data= HomePageFirstSection::first();
        $title= $data->title;
        //Main slider
        $slide_data= Homemainslide::orderBy('id', 'DESC')->get();
        //Main Social part
        $social_links= Sociallink::orderBy('id', 'DESC')->get();
        //Main Partners
        $partners= Partner::orderBy('id','ASC')->get();
        //Business Gallery
        $gallary= Gallary::orderBy('id','DESC')->get();

        return view('pages.index',compact('title','slide_data','social_links','partners','gallary'));
    }

    public function about(){
        //Main Social part
        $social_links= Sociallink::orderBy('id', 'DESC')->get();
        //First Section Left side
        $brief= Aboutbrief::orderBy('id','DESC')->get();
        //Vision Section
        $vision= Vision::orderBy('id','DESC')->get();
        //Mission Section
        $mission= Mission::orderBy('id','DESC')->get();
        //Directors Section
        $directors= Director::orderBy('id','DESC')->get();

        return view('pages.about',compact('social_links','brief','vision','mission','directors'));
    }

    public function services(){
        //Main Social part
        $social_links= Sociallink::orderBy('id', 'DESC')->get();
        //Services Data
        $services= Service::orderBy('id','DESC')->get();
        return view('pages.services',compact('social_links','services'));

    }

    public function contact(){
        //Main Social part
        $social_links= Sociallink::orderBy('id', 'DESC')->get();

        return view('pages.contact',compact('social_links'));
    }

    public function submit_contact(Request $request){
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $message=$request->message;

        $contact= new Contact();
        $contact->name= $name;
        $contact->email= $email;
        $contact->phone= $phone;
        $contact->message= $message;
        $contact->save();

        return redirect('/contact')->with('success','Message sent!');
    }
}
