<div>
    <style>
        .spinner-border-sm {
            width: 13px;
            height: 13px;
            border-width: 1px;
        }
    </style>
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{ asset('img/favicon.png') }}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Admin Login</h4> 
                                    </div>
                                </div>
                                <div class="card-body pt-0 pb-4">  
                                    @if (session()->has('errorMessage'))
                                        <div class="alert alert-danger text-center mb-2 mt-2">{{ session('errorMessage') }}</div>
                                    @endif                                  
                                    <form class="my-4" wire:submit.prevent='login'>            
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Email/Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" wire:model='email'>
                                            @error('email')
                                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                            @enderror                             
                                        </div>
            
                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>                                            
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" wire:model='password'>
                                            @error('password')
                                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                            @enderror 
                                        </div>
            
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-12">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">{!! loadingStateWithText('login', 'Log In') !!}</button>
                                                </div>
                                            </div>
                                        </div>                          
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>