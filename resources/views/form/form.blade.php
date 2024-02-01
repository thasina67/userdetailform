<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('user.store')}}" method="post" >     
        @csrf
     <label>
            name
        </label>
        <input type="text" name="name">
        <label>
            address
        </label>
        <input type="text" name="address">
        <input type="submit" value="submit">
    </form>
     <!-- <?php
      
     
    //   if (isset($_POST['name']) && isset($_POST['address'])) {
    //     $name = $_POST['name'];
    //     $address = $_GET['address'];
    //     echo "Hi, I am {$name} from {$address}";
    // } else {
    //     echo "Please provide both name and address parameters.";
    // }
     ?>  -->
</body>
</html>