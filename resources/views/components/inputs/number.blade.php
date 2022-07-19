@if(isset($options))
    @php
        $options['type'] = 'number';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif