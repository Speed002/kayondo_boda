<div class="row py-4 mb-3">
    <div class="col-sm-8">
        <p class="slate">Clients</p>
        <div class="mb-3">
            <input type="text" wire:model.live.debounce.300ms="query" class="form-control" id="query" placeholder="Search with name or contact...">
        </div>
        <div>
            @if ($clients->count())
                <ul class="list-group mb-2">
                    @foreach ($clients as $client)
                        <li onclick="window.location='{{ route('client.show', $client) }}'" class="list-group-item d-flex justify-content-between align-items-center">
                            <span>
                                {{ $client->name }}<br>
                                <span class="small slate-light">{{ $client->motor->registration }}</span>
                            </span>
                            <div>
                                <button onclick="alert(123)" class="btn btn-sm btn-light slate-light">Luganda</button>
                                <button onclick="alert(456)" class="btn btn-sm btn-light slate-light">English</button>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <span class="slate-light small">
                    {{ $clients->links() }}
                </span>
            @else
                <p>No clients found.</p>
            @endif
        </div>
    </div>
    <div class="col-sm-4">
        ...
    </div>
</div>
