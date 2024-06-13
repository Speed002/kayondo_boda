<x-layouts.auth>
    <div class="h-100 p-3">
        <x-slot name="header">
            <h4 class="slate p-3">Resetting password</h4>
        </x-slot>
        <form action="{{route('password.update')}}" method="post">
            @csrf
            <input type="hidden" name="email" value="{{request()->email}}">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">New password</label>
                <input type="password" class="form-control" name="password" id="password" >
                @error('password')
                    <small class="text-danger text-xs">Password is required.</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Confirmation new password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                @error('password_confirmation')
                    <small class="text-danger text-xs">Check your password again.</small>
                @enderror
            </div>
            {{-- This extracts the token from url --}}
            <input type="hidden" name="token" value="{{request()->route('token')}}">
            <div class="mb-3">
                <button class="btn btn-light slate-light" type="submit">Reset password</button>
            </div>
            </div>
        </form>
</x-layouts.auth>
