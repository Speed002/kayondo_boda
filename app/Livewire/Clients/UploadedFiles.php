<?php

namespace App\Livewire\Clients;
use App\Models\File;
use App\Models\Client;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Storage;

class UploadedFiles extends Component
{
    protected $listeners = ['refresh' => '$refresh'];

    public Client $client;

    public function getFilesProperty()
    {
        return File::latest()->where('client_id', $this->client->id)->get();
    }

    public function download($id)
    {
        return Storage::download(File::findOrFail($id)->file_path);
    }
    public function destroy($id){
        $file = File::findorfail($id);
        Storage::delete($file->file_path);
        $file->delete();
        return redirect()->route('client.show', $this->client);

    }
    public function render()
    {
        return view('livewire.clients.uploaded-files');
    }
}
