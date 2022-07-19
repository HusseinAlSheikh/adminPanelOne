@if(isset($options))
    @php
        $options['type'] = 'datetime-local';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif