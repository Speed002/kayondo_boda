<x-layouts.app>
    <div class="row py-4 mb-3">
        <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <p class="slate">Dashboard</p>
            <ul class="list-group rounded-1">
            <ul class="list-group rounded-1">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="slate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                          </svg>
                          &nbsp;&nbsp;
                        Messages <br>
                    <span class="slate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                          </svg>
                          &nbsp;&nbsp;
                        Messages <br>
                    <span class="small slate-light">Messages from the website</span></span>
                  <div>
                    <span class="badge badge-sm text-bg-secondary">...</button>
                  </div>
                </li>
                <li onclick="window.location='{{route('clients')}}'" class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="slate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                          </svg>
                          &nbsp;&nbsp;
                        Clients <br>
                    <span class="slate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                          </svg>
                          &nbsp;&nbsp;
                        Clients <br>
                    <span class="small slate-light">Total number of clients served</span></span>
                  <div>
                    <span class="badge badge-sm text-bg-secondary">{{$client_count}}</button>
                    <span class="badge badge-sm text-bg-secondary">{{$client_count}}</button>
                  </div>
                </li>
              </ul>
        </div>
        {{-- Empty space --}}
        <div class="col-sm-4">

        </div>
    </div>
</x-layouts.app>
