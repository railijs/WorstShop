<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
      form {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      form button {
        width: 100px;
      }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form method="POST" action="/login">
      @csrf
      <label>
          <span>Username:</span>
          <input name="username">
      </label>
      <label>
          <span>Password:</span>
          <input type="password" name="password">
      </label>
      @error("password")
        <p>Mēģini vēlreiz. {{$message}}</p>
      @enderror
      <button>Submit</button>
    </form>
    @if (session()->has("success"))
      <div x-data="{ open: true }">
        <div x-show="open">
          <p>{{ session("success") }}</p>
          <button @click="open = false">Close</button>
        </div>
      </div>
    @endif
</body>

</html>
