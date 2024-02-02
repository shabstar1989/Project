<form action="{{ route("Login") }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" value="login">
</form>
