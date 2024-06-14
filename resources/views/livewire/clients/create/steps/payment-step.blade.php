<div class="row py-4 mb-3">
    <div class="col-sm-8">
        <p class="slate">Creating New client</p>
        <p class="slate-light">Payment information</p>
        <form wire:submit.prevent='submit'>
            <div class="mb-3 row g-3">
                <div class="col-md-4 ">
                <label for="exampleFormControlInput1" class="form-label slate-light">Initial deposit</label>
                <input type="number" wire:model="initial_deposit" class="form-control" name="initial_deposit" id="initial_deposit" value="{{old('initial_deposit')}}" placeholder="eg. 123">
                @error('initial_deposit')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label slate-light">Weekly deposit</label>
                <input type="number" wire:model="weekly_deposit" class="form-control" name="weekly_deposit" id="weekly_deposit" value="{{old('weekly_deposit')}}" placeholder="eg. 123">
                @error('weekly_deposit')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label slate-light">Agreed months</label>
                <input type="number" wire:model="agreed_months" class="form-control" name="agreed_months" id="agreed_months" value="{{old('agreed_months')}}" placeholder="eg. 123">
                @error('agreed_months')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label slate-light">Total weeks</label>
                <input type="number" wire:model="total_weeks" class="form-control" name="total_weeks" id="total_weeks" value="{{old('total_weeks')}}" placeholder="eg. 123">
                @error('total_weeks')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label slate-light">Selling price</label>
                <input type="number" wire:model="selling_price" class="form-control" name="selling_price" id="selling_price" value="{{old('selling_price')}}" placeholder="eg. 123...">
                @error('selling_price')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label slate-light">Date of starting week</label>
                <input type="date" wire:model="starting_week" class="form-control" name="starting_week" id="starting_week" value="{{old('starting_week')}}" placeholder="eg. 12/12/12">
                @error('starting_week')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label slate-light">Place of agreement</label>
                <input type="text" wire:model="agreement_place" class="form-control" name="agreement_place" id="agreement_place" value="{{old('agreement_place')}}" placeholder="eg. Kireka">
                @error('agreement_place')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <button wire:click="previousStep" class="btn btn-light slate-light" type="button">Previous</button>
                </div>
                <div class="mb-3">
                    <button class="btn btn-dark" type="submit">
                        <span wire:loading.delay.long>
                            Loading ...
                        </span>
                        <span wire:loading.remove.delay.long>
                            Next
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-4">
        ...
    </div>
</div>
