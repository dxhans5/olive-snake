<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
        Iframe stuff goes here
    </div>

    <script>
      let stateObj = {
        optin: "bar",
      };

      history.pushState(stateObj, "page 2", "bar.html");
    </script>
</body>
</html>
