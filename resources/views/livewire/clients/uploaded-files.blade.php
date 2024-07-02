<div class="mt-2">
    <ul class="list-group">
        <li class="list-group-item active text-xs">Uploaded Files (click to download)</li>
        @if ($this->files->count() > 0)
            @foreach ($this->files as $file)
                <li class="list-group-item d-flex justify-content-between">
                    <a href="#" wire:click.prevent="download({{ $file->id }})">{{$file->file_name}}</a>
                </li>
            @endforeach
        @else
        <li class="list-group-item">No files uploaded</li>
        @endif
    </ul>
</div>
