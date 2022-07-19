<x-admin.main-layout >
    <section class="section main-section">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    Add Users
                </h3>
            </div>
            <div class="card-body">

                        @include('components.inputs.week', [
                                'options' => [
                                    'id'        => 'username',
                                    'name'        => 'username',
                                    'view'        => 'INLINE',

                                    'label'       => __('inputs.username.label'),
                                    'placeholder' => __('inputs.username.placeholder'),
                                    'value'       => old('username')
                                ]
                            ])

            </div>
            </div>
                </div>
            </div>

        </div>
    </section>
</x-admin.main-layout>


