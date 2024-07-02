<?php

namespace App\Livewire\Clients;

use App\Models\File;
use App\Models\Client;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Uploader extends Component
{
    use WithFileUploads;
    public Client $client;
    public $files = [];
    public function rules(){
        return [
            'files.*' => ['required', 'file', 'max:200000']
        ];
    }

    public function validationAttributes(){
        return [
            'files.*' => 'files'
        ];
    }

    public function updatedFiles($files){
        $this->validateOnly('files.*');
        collect($files)->each(function($file){
            File::create([
                'client_id' => $this->client->id,
                'file_name' => $name = $file->getClientOriginalName(), //file name
                'file_path' => $file->storeAs('files/'.$this->client->name, $name)
            ]);
        });
        // $this->dispatch('refresh');
        //this is great
        return redirect()->route('client.show', $this->client);
    }

    public function render()
    {
        return view('livewire.clients.uploader');
    }
}
