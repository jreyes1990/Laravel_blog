<div class="container">
  <form method="POST" novalidate>
    @csrf
    <h2>Rol: </h2>
    <input type="text" name="nombre">
    @error('nombre')
    <p>Debe colocar un nombre mayor a 5</p>
    @enderror
    <button type="submit">Agregar</button>
  </form>
</div>