<div>
    <div class="row py-4 mb-3">
        <p class="slate">{{$client->name}}</p>
        <div class="col-sm-8">
            <livewire:clients.update.personal :client="$client"/>
            <livewire:clients.update.motor/>
            <livewire:clients.update.payment/>
            <livewire:clients.update.referee/>
        </div>
        <div class="col-sm-4">
            ...
        </div>
    </div>

</div>
