<x-layouts.auth>
    <div class="h-100 p-3">
        <x-slot name="header">
            <h4 class="slate p-3">Login</h4>
        </x-slot>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="eg. name@example.com">
                @error('email')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3 good">
                <label for="exampleFormControlInput1" class="form-label slate-light">Password</label>
                <input type="password" class="form-control" name="password" id="password" >
                @error('password')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            {{-- <div>
                <input type="checkbox" name="remember" id="remember" value="">
                <label for="exampleFormControlInput1" class="form-label slate-light">Keep me signed in</label>
            </div> --}}
          <div class="mb-3">
            <button class="btn btn-light small" type="submit">Sign in</button>
            <p>
                <a href="{{route('password.request')}}" class="small slate-light">Forgot password?</a>
            </p>
          </div>
        </form>
      </div>
</x-layouts.auth>
