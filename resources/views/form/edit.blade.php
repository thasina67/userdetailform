@extends('form.layout')
@section('content')

<form action="{{route('form.edit' , $userdetails->id)}}" method="post">  
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$userdetails->id}}" id="id" />
        <label>
            First Name
        </label>
        <input type="text" name="firstname" id="firstname" value="{{$userdetails->firstname}}">
        <label for="">
            Last Name
        </label>
        <input type="text" name="lastname" id="lastname" value="{{$userdetails->lastname}}">
        <label for="">
            Address
        </label>
        <input type="text" name="address" id="address" value="{{$userdetails->address}}">
        <label for="">
            email
        </label>
        <input type="email" name="email" value="{{$userdetails->email}}">
        
        <label>
            Gender
        </label>
        <div>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>  value="{{$userdetails->female}}">
        Female
        </div>
        <div>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="{{$userdetails->male}}">
        Male
        </div>
        <div>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="{{$userdetails->other}}">
        Other
       </div>
        <div>
        <label for="subject">  Subjects</label>
        <div>
        <input type="checkbox" id="sub1" name="subject[]"  value="{{$userdetails->maths}}">
        <label for="sub1"> Maths</label><br>
        </div>
        <div>
        <input type="checkbox" id="sub2" name="subject[]"  value="{{$userdetails->tamil}}">
        <label for="sub2"> Tamil</label><br>
        </div>
        <div>
        <input type="checkbox" id="sub3" name="subject[]"  value="{{$userdetails->english}}">
        <label for="sub3"> English</label><br>
        </div>
        <div>
        <label>
            Date of birth
        </label>
        
        <input type="date" name="dateofbirth"   value="{{$userdetails->date}}" class="date">
        </div>
        <div>
        <input type="submit" value="submit">
        </div>
    </form>
    @stop
