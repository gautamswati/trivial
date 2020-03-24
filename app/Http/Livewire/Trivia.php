<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Goutte\Client;

class Trivia extends Component
{
    public $count = 0;

    public $trivia;

    public function showNext() {
        $this->count++;
    }

    public function showPrevious() {
        $this->count--;
    }
    
    public function render()
    {
        return view('livewire.trivia', [
            'trivia' => $this->trivia
        ]);
    }

    public function mount() {

        $client = new Client();
        $crawler = $client->request('GET', 'https://www.thefactsite.com/100-space-facts/');
        
        $this->trivia = $crawler->filter('.list')->each( function ($node) {
            return $node->text() ;
        });
    }
}
