<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class TriviaController extends Controller
{
    public function index() {

        $client = new Client();
        $crawler = $client->request('GET', 'https://www.thefactsite.com/100-space-facts/');
        
        $vals = $crawler->filter('.list')->each( function ($node) {
            return $node->text() ;
        });

        return view('trivia.index', [
            'vals' => $vals
        ]);
    }
}
