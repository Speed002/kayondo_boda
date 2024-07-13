<div class="row py-4 mb-3">
    <div class="col-sm-8">
        <p class="slate">Creating New client</p>
        <p class="slate-light">Referee information</p>
        <form wire:submit.prevent='submit'>
            <div class="mb-3 row g-3">
                <div class="col-md-4 ">
                <label for="exampleFormControlInput1" class="form-label">Referee 1 name</label>
                <input type="text" wire:model="referee1_name" class="form-control" name="referee1_name" id="referee1_name" value="{{old('referee1_name')}}" placeholder="eg. John Doe">
                @error('referee1_name')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Referee 1 relationship</label>
                    <input type="text" wire:model="referee1_relationship" class="form-control" name="referee1_relationship" id="referee1_relationship" value="{{old('referee1_relationship')}}" placeholder="eg. Brother">
                    @error('referee1_relationship')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Referee 1 contact</label>
                <input type="text" wire:model="referee1_contact" class="form-control" name="referee1_contact" id="referee1_contact" value="{{old('referee1_contact')}}" placeholder="eg. 123">
                @error('referee1_contact')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="mb-3 row g-3">
                    <div class="col-md-4 ">
                    <label for="exampleFormControlInput1" class="form-label">Referee 2 name</label>
                    <input type="text" wire:model="referee2_name" class="form-control" name="referee2_name" id="referee2_name" value="{{old('referee2_name')}}" placeholder="eg. John Doe">
                    @error('referee2_name')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Referee 2 relationship</label>
                        <input type="text" wire:model="referee2_relationship" class="form-control" name="referee2_relationship" id="referee2_relationship" value="{{old('referee2_relationship')}}" placeholder="eg. Brother">
                        @error('referee2_relationship')
                            <small class="text-danger text-xs">{{$message}}</small>
                        @enderror
                </div>

                <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Referee 2 contact</label>
                    <input type="text" wire:model="referee2_contact" class="form-control" name="referee2_contact" id="referee2_contact" value="{{old('referee2_contact')}}" placeholder="eg. 123">
                    @error('referee2_contact')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Stage chairperson name</label>
                    <input type="text" wire:model="st_chair_name" class="form-control" name="st_chair_name" id="st_chair_name" value="{{old('st_chair_name')}}" placeholder="eg. John Doe">
                    @error('st_chair_name')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Stage chairperson contact</label>
                    <input type="text" wire:model="st_chair_contact" class="form-control" name="st_chair_contact" id="st_chair_contact" value="{{old('st_chair_contact')}}" placeholder="eg. 123...">
                    @error('st_chair_contact')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Lc chairperson name</label>
                    <input type="text" wire:model="lc_chair_name" class="form-control" name="lc_chair_name" id="lc_chair_name" value="{{old('lc_chair_name')}}" placeholder="eg. John Doe">
                    @error('lc_chair_name')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Lc chairperson contact</label>
                <input type="text" wire:model="lc_chair_contact" class="form-control" name="lc_chair_contact" id="lc_chair_contact" value="{{old('lc_chair_contact')}}" placeholder="eg. 123">
                @error('lc_chair_contact')
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
