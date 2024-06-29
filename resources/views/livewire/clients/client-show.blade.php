<div>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
            <livewire:clients.update.personal :client="$client"/>
            <livewire:clients.update.motor/>
            <livewire:clients.update.payment/>
            <livewire:clients.update.referee/>
        </div>
        <div class="col-sm-4">
            <p>{{$client->name}}'s profile</p>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action" onclick="showComponent('personal-info')">Personal Info</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showComponent('motor-info')">Motor Info</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showComponent('payment-info')">Payment Info</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showComponent('referee-info')">Referee Info</a>
            </div>
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
