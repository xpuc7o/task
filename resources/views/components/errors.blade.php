@if($errors->has('url'))
    @foreach($errors->get('url') as $message)
        <small class="form-text text-danger">{{ $message }}</small>
    @endforeach
@endif
