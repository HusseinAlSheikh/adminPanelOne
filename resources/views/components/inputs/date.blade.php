@if(isset($options))
    @php
        $options['type'] = 'date';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif