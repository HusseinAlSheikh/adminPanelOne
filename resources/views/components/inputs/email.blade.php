@if(isset($options))
    @php
        $options['type'] = 'email';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif