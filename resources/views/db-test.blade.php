<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Test</title>
</head>
<body>
    <h1>Database Connection Test</h1>
    @if (isset($status))
        <div>{{ $status }}</div>
    @endif
    <form method="POST" action="{{ route('db-test.check') }}">
        @csrf
        <div>
            <label for="driver">Driver:</label>
            <input type="text" id="driver" name="driver" value="mysql">
        </div>
        <div>
            <label for="host">Host:</label>
            <input type="text" id="host" name="host" value="127.0.0.1">
        </div>
        <div>
            <label for="port">Port:</label>
            <input type="text" id="port" name="port" value="3306">
        </div>
        <div>
            <label for="database">Database:</label>
            <input type="text" id="database" name="database" value="">
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="">
        </div>
        <div>
            <button type="submit">Test Connection</button>
        </div>
    </form>
</body>
</html>
