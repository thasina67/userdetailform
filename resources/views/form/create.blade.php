<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create page</title>
    <style>
        form{
            width: 500px;
            height: 50vh;
            display: flex;
            flex-direction: column;
           margin-left: 50px;

        }
        form>input{
            width:200px;

        }
        .date{
            height: 40px;
            width: 200px;
            padding: 10px;
            margin-bottom: 20px;
        }
        .select{
            width:200px;
            height:40px;
            display:flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    
    <form action="{{route('form.store')}}" method="post">  
        @csrf
        <label>
            First Name
        </label>
        <input type="text" name="firstname">
        <label for="">
            Last Name
        </label>
        <input type="text" name="lastname">
        <label for="">
            Address
        </label>
        <input type="text" name="address">
        <label for="">
            email
        </label>
        <input type="email" name="email">
        
        <label>
            Gender
        </label>

        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">
        Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">
        Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">
        Other
       
        <!-- <label for="choise">Choose a Subject</label>
        <select id="choise"  name="choise" class="select">
            <option value="maths">Drama</option>
            <option value="science">Literature</option>
            <option value="english">Commerce</option>
            <option value="it" selected>IT</option>
        </select> -->
        <div>
        <label for="subject">  Subjects</label>
        <div>
        <input type="checkbox" id="sub1" name="subject[]" value="Maths">
        <label for="sub1"> Maths</label><br>
        </div>
        <div>
        <input type="checkbox" id="sub2" name="subject[]" value="tamil">
        <label for="sub2"> Tamil</label><br>
        </div>
        <div>
        <input type="checkbox" id="sub3" name="subject[]" value="english">
        <label for="sub3"> English</label><br>
        </div>
        <div>
        <label>
            Date of birth
        </label>
        
        <input type="date" name="dateofbirth"  value="date" class="date">
        </div>
        <div>
        <input type="submit" value="submit">
        </div>
    </form>
</body>

</html>