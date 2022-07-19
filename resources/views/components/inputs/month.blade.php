@if(isset($options))
    @php
        $options['type'] = 'month';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif