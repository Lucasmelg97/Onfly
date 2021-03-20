{{-- <hr>
<form method="get">
     @csrf
    <b>Usuario:</b>
    <input type="text" name="usuario"><br><br>

    <b>Senha:</b>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Salvar">
</form>
<hr>
<label>Usuario:{{$usuario}}</label><br>
<label>Senha:{{$senha}}</label><br> --}}

<hr>
<form method="post">
     @csrf
    <b>Usuario:</b>
    <input type="text" name="usuario"><br><br>

    <b>Senha:</b>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Salvar">
</form>
<hr>
<label>Usuario:{{$usuario}}</label><br>
<label>Senha:{{$senha}}</label><br>
