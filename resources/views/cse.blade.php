<html>
<head>
    <title>CSE Page</title>
</head>
<body>
    <h1>This is CSE page</h1>
    <form  action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="sample_input" placeholder="Enter something" required>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('register') }}">Go to Welcome Page</a>

</body>
</html>