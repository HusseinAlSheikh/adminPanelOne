@if(isset($options))
    @php
        $options['type'] = 'week';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif