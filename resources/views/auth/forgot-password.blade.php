<x-layouts.auth>
    <div class="h-100 p-3">
        <x-slot name="header">
            <h4 class="slate p-3">Resetting password</h4>
        </x-slot>
        <form action="{{route('password.request')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="eg. name@example.com">
                @error('email')
                    <small class="text-danger text-xs">Check your email again.</small>
                @enderror
            </div>
          <div class="mb-3">
            <button class="btn btn-light slate-light" type="submit">Request password reset</button>
            <p>
                <a href="{{route('login')}}" class="slate-light small">Go back to Login</a>
            </p>
          </div>
        </form>
      </div>
</x-layouts.auth>
