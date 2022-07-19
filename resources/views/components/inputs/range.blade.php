@if(isset($options))
    @php
        $options['type'] = 'range';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif