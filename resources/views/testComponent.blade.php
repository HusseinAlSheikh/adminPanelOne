<x-admin.main-layout >
    <section class="section main-section">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    Add Users
                </h3>
            </div>
            <div class="card-body">
                        @include('components.inputs.password', [
                                'options' => [
                                    'id'        => 'password',
                                    'name'        => 'password',
                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username')
                                ]
                            ])
                        @include('components.inputs.file-upload', [
                                'options' => [
                                    'type' =>'password',
                                    'id'        => 'username',
                                    'name'        => 'username',
                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username')
                                ]
                            ])
                        @include('components.inputs.textarea', [
                                'options' => [
                                    'rows' =>'4',
                                    'id'        => 'textusername',
                                    'name'        => 'textusername',
                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username')
                                ]
                            ])
                        @include('components.inputs.select', [
                                'options' => [
                                    'name'        => 'country',
                                    'id'        => 'country',
                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username'),
                                    'data' => [
                                        1 => 'SY'  ,
                                        2 => 'JR'  ,
                                        3 => 'LB'  ,
                                    ],
                                ]
                            ])
                        @include('components.inputs.select2', [
                                'options' => [
                                    'name'        => 'country',
                                    'id'        => 'country',
                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username'),
                                    'data' => [
                                        1 => 'SY'  ,
                                        2 => 'JR'  ,
                                        3 => 'LB'  ,
                                    ],
                                ]
                            ])
                        @include('components.inputs.checkbox', [
                                'options' => [
                                    'name'        => 'country',
                                    'id'        => 'country',
                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username'),

                                ]
                            ])
                        @include('components.inputs.radio-button', [
                                'options' => [
                                    'name'        => 'country',
                                    'id'        => 'country',
                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username'),

                                ]
                            ])
                        @include('components.inputs.toggle-button', [
                                'options' => [
                                    'name'        => 'country',
                                    'id'        => 'country',
                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username'),

                                ]
                            ])
            </div>
            </div>
                </div>
            </div>




        <div class="flex items-center justify-end mt-4">
        <x-button>
            {{ __('Email Password Reset Link') }}
        </x-button>
        </div>
        </div>
    </section>
</x-admin.main-layout>


