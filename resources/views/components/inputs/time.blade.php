@if(isset($options))
    @php
        $options['type'] = 'time';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif