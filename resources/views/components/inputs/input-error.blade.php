@props(['inputName'])

@error($inputName)
    <p class="text-danger text-xs">{{$message}}</p>
@enderror