{!! Form::open(["wire:submit.prevent='formSubmit'",'class'=>'contact1-form validate-form']) !!}
<span class="contact1-form-title">
    Get in touch
</span>
<div class="wrap-input1 validate-input">
    {!! Form::text('name', null, ['class'=>($errors->has('name')?' is-invalid input1':'input1')
    ,"wire:model='name'",'placeholder'=>'Name']) !!}
    @error('name')
    <span class="invalid-feedback d-block"> {{$message}} </span>
    @enderror
</div>
<div class="wrap-input1 validate-input">
    {!! Form::text('email', null, ['class'=>($errors->has('email')?' is-invalid input1':'input1')
    ,"wire:model='email'",'placeholder'=>'Email']) !!}
    @error('email')
    <span class="invalid-feedback d-block"> {{$message}} </span>
    @enderror
</div>
<div class="wrap-input1 validate-input">
    {!! Form::textarea('message', null, ['class'=>($errors->has('message')?' is-invalid input1':'input1')
    ,"wire:model='message'",'placeholder'=>'Message']) !!}
    @error('message')
    <span class="invalid-feedback d-block"> {{$message}} </span>
    @enderror
</div>

<div class="container-contact1-form-btn">
    <div wire:target='formSubmit' wire:loading>
        <span>sending..</span>
    </div>
    {!! Form::submit(_('send'),['class'=>'contact1-form-btn']) !!}
</div>

{!! Form::close() !!}
