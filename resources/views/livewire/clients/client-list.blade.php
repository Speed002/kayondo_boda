<div class="pb-5">
    <div class="my-3">
        <input type="text" wire:model.live.debounce.300ms="query" class="form-control rounded-1" id="query" placeholder="Search clients with name or contact...">
    </div>
    <div class="row g-2">
        @if ($clients->count())
            @foreach ($clients as $client)
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 shadow-sm">
                    <div class="card text-center position-relative" onclick="window.location='{{ route('client.show', $client) }}'">
                        <div class="card-body">
                            <svg class="bd-placeholder-img rounded-circle slate-light" width="30" height="30" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                            <h6 class="small mt-2 slate">{{ $client->name }}</h6>
                            @if ($client->motor->registration)
                                <small class="mt-0 slate-light">{{ $client->motor->registration}}</small>
                            @else
                                <small class="mt-0 badge badge-primary">No plate</small>
                                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            @endif

                            <div class="mt-2">
                                <a href="{{route('luganda.document', $client)}}" class="btn btn-sm btn-secondary rounded-1 slate-light small">Luganda</a>
                                <a href="{{route('english.document', $client)}}" class="btn btn-sm btn-secondary rounded-1 slate-light small">English</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No clients found.</p>
        @endif
    </div>
</div>
