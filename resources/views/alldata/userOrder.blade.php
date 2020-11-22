<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
 

<table class="table">
<h1>Sells Information</h1>
  <thead>
    <tr>
      <th scope="col">User</th>
      <th scope="col">Name</th>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th scope="col">Total</th>
   
      
    
    </tr>
  </thead>
  <tbody>
  @foreach($user as $users)

 
    <tr>
    
      <td>{{$users->user_id}}</td>
       <td>{{$order->name}}</td> 
      <td>{{$users->product}}</td>
      <td>{{$users->quantity}}</td>
      <td>{{$users->rate}}</td>
      <td>{{$users->total}}</td>
    </tr>

@endforeach


 

  </tbody>
</table>


</div>
   
</body>
</html>