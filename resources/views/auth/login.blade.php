<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="d-lg-flex half">
            <div class="bg order-1 order-md-2" style="background-image: url('img/{{ config('app.login_image', 'login-main') }}.jpg');"></div>
            <div class="contents order-2 order-md-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7  ">
                            <h3>Login to <strong>{{ config('app.name', 'Laravel') }}</strong></h3>
                            <form  method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email Address -->
                                <div>
                                    @include('components.inputs.email', ['options' => [
                                               'id'    => 'email' ,
                                               'name'  => 'email' ,
                                               'input_size' => 'col-lg-12'  ,
                                               'class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full',
                                               'attr'  => 'required autofocus' ,
                                               'label' =>__('Email') ,
                                               'value' => old('email')
                                           ]])
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    @include('components.inputs.password', ['options' => [
                                            'id'    => 'password' ,
                                            'name'  => 'password' ,
                                            'input_size' => 'col-lg-12'  ,
                                            'class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full',
                                            'attr'  => 'required autocomplete="current-password"' ,
                                            'label' =>__('Password') ,
                                        ]])
                                </div>


                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input id="remember_me" type="checkbox" checked="checked"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    {{--<span class="ml-auto"><a  href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a></span>--}}
                                </div>

                                    @include('components.inputs.submit', ['options' => [
                                                'name' => '' ,
                                                'input_size' => 'col-lg-12'  ,
                                                'class' => 'btn btn-block btn-primary',
                                                'label' => '' ,
                                                'value' => __('Log in') ,
                                            ]])

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-guest-layout>
