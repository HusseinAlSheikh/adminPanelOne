@if(isset($options))
    @php
        $options['type'] = 'password';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif