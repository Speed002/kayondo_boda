<li onclick="window.location='{{route('client.show', $client)}}'" class="list-group-item d-flex justify-content-between align-items-center">
    <span>{{$client->name}}<br>
    <span class="small slate-light">{{$client->motor->registration}}</span></span>
    <div>
    <button class="btn btn-sm btn-light slate-light">Luganda</button>
    <button class="btn btn-sm btn-light slate-light">English</button>
    </div>
</li>
