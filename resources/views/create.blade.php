@extends('welcome')
@section('title','Trang Tạo Khách Hàng')
@section('content')
    <div class="form-group">
        <div class="title m-b-md form-group">
            Laravel Cusstom Validation
        </div>
        <div class="form-custom-validation form-group">
            <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>
            <div class="error-message">
                @if ($errors->any())
                    @foreach($errors->all() as $nameError)
                        <p style="color:red">{{ $nameError }}</p>
                    @endforeach
                @endif
            </div>
            <form class="" action="{{route('form.checkValidation')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input id="name" name="name" type="text" placeholder="Enter the full name" class="form-control">
                </div>
                <div class="form-group ">
                    <label for="age">Age: </label>
                    <input id="age" name="age" type="text" placeholder="Enter the age" class="form-control">
                </div>
                <button type="submit" class="btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
