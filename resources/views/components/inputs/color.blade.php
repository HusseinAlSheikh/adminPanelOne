@if(isset($options))
    @php
        $options['type'] = 'color';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif