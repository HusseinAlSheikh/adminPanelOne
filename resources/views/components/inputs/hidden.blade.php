@if(isset($options))
    @php
        $options['type'] = 'hidden';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif