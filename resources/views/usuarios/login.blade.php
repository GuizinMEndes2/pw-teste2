<div style="border: 1px solid rgb(247, 0, 255); width:50%; margin:0 auto;">
    <h1>Login</h1>

    @if (session('erro'))
    <div>{{ session('erro') }}</div>
    @endif
<hr>
<form action="{{ url()->current() }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <br>
    <input type="passoword" name="password" placeholder="Senha">
    <br>
    <input type="submit" value="Login cara, não força blz? ">

</form>
</div>
