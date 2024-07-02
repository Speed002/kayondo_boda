<div>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
            <div id="personal-info">
                <livewire:clients.update.personal :client="$client"/>
            </div>
            <div id="motor-info" style="display: none;">
                <livewire:clients.update.motor :client="$client"/>
            </div>
            <div id="payment-info" style="display: none;">
                <livewire:clients.update.payment :client="$client"/>
            </div>
            <div id="referee-info" style="display: none;">
                <livewire:clients.update.referee :client="$client"/>
            </div>
        </div>
        <div class="col-sm-4">
            <p>{{$client->name}}'s profile</p>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-light" onclick="showComponent('personal-info')">Personal Info</a>
                <a href="#" class="list-group-item list-group-item-action bg-light" onclick="showComponent('motor-info')">Motor Info</a>
                <a href="#" class="list-group-item list-group-item-action bg-light" onclick="showComponent('payment-info')">Payment Info</a>
                <a href="#" class="list-group-item list-group-item-action bg-light" onclick="showComponent('referee-info')">Referee Info</a>
                <a href="{{route('take-over.document', $client)}}" class="list-group-item list-group-item-action">Take-Over Form</a>
                <a href="{{route('online-hirer-form.document', $client)}}" class="list-group-item list-group-item-action">Online Hirer Form</a>
                <a href="{{route('luganda.document', $client)}}" class="list-group-item list-group-item-action">Luganda Agreement</a>
                <a href="{{route('english.document', $client)}}" class="list-group-item list-group-item-action">English Agreement</a>
            </div>
            {{-- File uploader --}}
            <livewire:clients.uploader :client="$client"/>
            <livewire:clients.uploaded-files :client="$client"/>
        </div>
    </div>
</div>
<script>
    function showComponent(componentId) {
        const components = ['personal-info', 'motor-info', 'payment-info', 'referee-info'];
        components.forEach(id => {
            document.getElementById(id).style.display = (id === componentId) ? 'block' : 'none';
        });
    }
</script>
