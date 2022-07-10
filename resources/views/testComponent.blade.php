<x-admin.main-layout >
    <section class="section main-section">
                    @include('components.inputs.text', [
                            'options' => [
                                'type' =>'number',
                                'name'        => 'username',
                                'label'       => __('inputs.username.label'),
                                'placeholder' => __('inputs.username.placeholder'),
                                'value'       => old('username')
                            ]
                        ])
    </section>
</x-admin.main-layout>