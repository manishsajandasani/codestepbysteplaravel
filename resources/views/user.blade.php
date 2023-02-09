<h1>
   User File
</h1>

<form action="{{URL::to('user-form-submit')}}" method="POST">
   @csrf
   <input type="text" placeholder="Enter username" name="username"> <br> <br>
   <input type="password" placeholder="Enter password" name="password"> <br> <br>
   <input type="submit" value="Submit">
</form>