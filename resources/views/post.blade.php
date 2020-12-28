<!DOCTYPE html>
<html>
<head>
<title>{{ config('app.name', 'Laravel') }}</title>
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"></head>
<body>

<h2>HTML Forms</h2>

<form action="/action_page.php">
  <label for="fname">Title:</label><br>
  <input type="text" id="fname" name="title" value="John"><br>
  <label for="lname">Description:</label><br>
  <input type="text" id="lname" name="description" value="Doe"><br><br>
  <input type="submit" name="submit" value="Submit">
</form> 



</body>
</html>
