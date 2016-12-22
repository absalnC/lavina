
<div class="form-container col-md-4">
  <h1>Envienos un mensaje</h1>
  <form method="post" action="<?php echo base_url("contacto/procesar")?>"
    data-toggle="validator" id="myForm">
    <div class="form-group has-feedback">
      <label for="nombre">Nombre</label>
      <input id="nombre" type="text" placeholder="Nombre Ap.Materno Ap.Paterno"
        class="form-control" name="nombre" required />
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" type="email" placeholder="user@dominio.com"
      class="form-control" name="email" required/>
    </div>
    <div class="form-group">
      <label for="phone">Telefono</label>
      <input id="phone" type="tel"  placeholder="000-000-00-00"
      class="form-control" name="phone"required/>
    </div>
    <div class="form-group">
      <label for="mensaje">Su mensaje</label>
      <textarea id="mensame" rows="4" class="form-control" name="mensaje" required>
        </textarea>
    </div>
    <div class="form-group">
      <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
      </div>
  </form>
</div>
