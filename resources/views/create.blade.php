<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>create</title>
  </head>
  <body>

    <form  action="store" method="post">
      <label for="name">name</label>
      <input type="text" name="name" value=""> <br/>

      <label for="email">email</label>
      <input type="text" name="email" value=""><br/>

      <label for="gender"></label>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female<br/>

      States&nbsp;&nbsp;&nbsp;&nbsp;
      <select  name="state" id="">
        <option value="usa">usa</option>
        <option value="eng">eng</option>
        <option value="ger">ger</option>
      </select><br/>

     I Agree <input type="checkbox" name="agree" value=""><br/>

      <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>

      <label for=""></label>
        <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
