<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to Poca Store!</h1>
    <!-- Tautan ke halaman lain -->
    <ul>
        <li><a href="{{ route('food-beverage') }}">Food & Beverage</a></li>
        <li><a href="{{ route('beauty-health') }}">Beauty & Health</a></li>
        <li><a href="{{ route('home-care') }}">Home Care</a></li>
        <li><a href="{{ route('baby-kid') }}">Baby & Kid</a></li>
        <li><a href="{{ route('user.show', ['id' => 2241720154, 'name' => 'Ellois Karina Handoyo']) }}">User Profile</a></li>
        <li><a href="{{ route('sales.index') }}">Sales Page</a></li>
    </ul>
</body>
</html>
