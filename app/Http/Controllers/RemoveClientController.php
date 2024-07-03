<?php
namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;

class RemoveClientController extends Controller
{
    /**
     * Remove the specified client and associated files from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Client $client)
    {
        $client = Client::findOrFail($client->id);
        // Delete each file associated with the client
        foreach ($client->files as $file) {
            // Delete file from storage
            if (Storage::delete($file->file_path)) {
                $file->delete();
            } else {
            }
        }
        if ($client->motor) {
            $client->motor->delete();
        }
        if ($client->referee) {
            $client->referee->delete();
        }
        if ($client->payment) {
            $client->payment->delete();
        }
        $client->delete();
        return redirect()->route('clients');
    }
}
