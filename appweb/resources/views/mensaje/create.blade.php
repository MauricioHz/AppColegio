@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-lg-6 offset-lg-3">
    <div class="card mb-0 card-body py-4">
      <p class="h2 d-block">Nuevo mensaje</p>
      <form>
        <div class="form-group">
          <label for="business-size">Tipo de mensaje:</label>
          <select id="business-size" class="custom-select form-control">
            <option selected="">Seleccione una opción</option>
            <option value="1">Just me</option>
            <option value="2">1 - 10</option>
            <option value="3">10 - 50</option>
            <option value="4">50+</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Asunto">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="4" placeholder="Escriba el mensaje a enviar"></textarea>
        </div>
        <div>
          <button class="btn btn-primary" type="submit">Enviar Mensaje</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection