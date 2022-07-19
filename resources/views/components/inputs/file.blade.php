@if(isset($options))
    @php
        $options['type'] = 'file';
    @endphp
    {{-----------------------------------}}
    @include('components.inputs.text', ['options' => $options])
@endif