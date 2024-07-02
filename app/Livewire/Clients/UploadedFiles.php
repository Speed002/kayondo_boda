<?php

namespace App\Livewire\Clients;

use App\Models\File;
use App\Models\Client;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Storage;

class UploadedFiles extends Component
{
    public Client $client;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function getFilesProperty()
    {
        return File::latest()->where('client_id', $this->client->id)->get();
    }

    public function download($id)
    {
        $file = File::findOrFail($id);
        return Storage::download($file->file_path);
    }

    public function render()
    {
        return view('livewire.clients.uploaded-files');
    }
}
