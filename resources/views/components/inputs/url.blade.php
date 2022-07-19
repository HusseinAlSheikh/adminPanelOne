@if(isset($options))
    @php
        $options['type'] = 'url';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif