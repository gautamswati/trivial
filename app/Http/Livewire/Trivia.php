<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Goutte\Client;

class Trivia extends Component
{
    public function render()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.thefactsite.com/100-space-facts/');
        
        $trivia = $crawler->filter('.list')->each( function ($node) {
            return $node->text() ;
        });

        return view('livewire.trivia', [
            'trivia' => $trivia
        ]);
    }
}
