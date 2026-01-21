<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
     public function Home()
    {
         date_default_timezone_set('Asia/Colombo');
         $hour = date('H');

      return view('pages.Home',[
        'name' => 'Welcome to Appslanka',
        'tagline' => 'Your trusted tech partner'
        ,'hour' => $hour]);

    }
       public function About()
    {
       return view('pages.About');  }

       public function Contact()
    {
        return view('pages.Contact');
    }
}
