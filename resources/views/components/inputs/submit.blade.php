@if(isset($options))
    @php
        $options['type'] = 'submit';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif