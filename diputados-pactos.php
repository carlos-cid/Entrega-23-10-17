<?php include('header.php')?>
<div class="container">
<div class="row">
<div class="col-sm-12 py-5">
<?php
$csv = array_map('str_getcsv', file('data/eleccion_diputados.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>


<ul>
<li><a href="#tabla">tabla</a></li>
<li><a href="#numeros">números</a></li>
<li><a href="#print">print_r</a></li>
</ul>

<hr id="tabla">

<?php $frenteamplio = 0; $coalicion = 0; $portodo = 0; $independiente = 0; $revolucionarios = 0; $convergencia = 0; $union = 0; $sumemos = 0; $lafuerza = 0; $vamos = 0;?>


<h3>Frente Amplio</h3>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Partido</th>
      <th>Comunas</th>
    </tr>
  </thead>
  <tbody>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>
          <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
      <td><?php echo($csv[$a]["Partido Politico"])?></td>
        <td><?php echo($csv[$a]["Comunas"])?></td>
    </tr>
          <?php $frenteamplio++;?>
          <?php };?>
    <?php };?>
  </tbody>
</table>

<h3>Coalición Regionalista Verde</h3>

<table class="table table-bordered table-striped table-responsive">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Partido</th>
                  <th>Comunas</th>
        </tr>
      </thead>
      <tbody>
        <?php for($a = 0; $a < $total = count($csv); $a++){?>
              <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
        <tr>
          <td>
                      <?php echo($csv[$a]["Candidato Nombre"])?>
                <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                <?php echo($csv[$a]["Candidato Apellido Materno"])?>
          </td>
          <td><?php echo($csv[$a]["Partido Politico"])?></td>
            <td><?php echo($csv[$a]["Comunas"])?></td>
        </tr>
              <?php $coalicion++;?>
              <?php };?>
        <?php };?>
      </tbody>
    </table>

    <h3>Por todo Chile</h3>

    <table class="table table-bordered table-striped table-responsive">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Partido</th>
                  <th>Comunas</th>
        </tr>
      </thead>
      <tbody>
        <?php for($a = 0; $a < $total = count($csv); $a++){?>
              <?php if(($csv[$a]["Lista/Pacto"])=="Por todo Chile"){?>
        <tr>
          <td>
                      <?php echo($csv[$a]["Candidato Nombre"])?>
                <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                <?php echo($csv[$a]["Candidato Apellido Materno"])?>
          </td>
          <td><?php echo($csv[$a]["Partido Politico"])?></td>
            <td><?php echo($csv[$a]["Comunas"])?></td>
        </tr>
              <?php $portodo++;?>
              <?php };?>
        <?php };?>
      </tbody>
    </table>


<h3>Independiente</h3>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Partido</th>
              <th>Comunas</th>
    </tr>
  </thead>
  <tbody>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>
          <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
      <td><?php echo($csv[$a]["Partido Politico"])?></td>
        <td><?php echo($csv[$a]["Comunas"])?></td>
    </tr>
          <?php $independiente++;?>
          <?php };?>
    <?php };?>
  </tbody>
</table>

<h3>Trabajadores revolucionarios</h3>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Partido</th>
              <th>Comunas</th>
    </tr>
  </thead>
  <tbody>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>
          <?php if(($csv[$a]["Lista/Pacto"])=="Trabajadores revolucionarios"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
      <td><?php echo($csv[$a]["Partido Politico"])?></td>
        <td><?php echo($csv[$a]["Comunas"])?></td>
    </tr>
          <?php $revolucionarios++;?>
          <?php };?>
    <?php };?>
  </tbody>
</table>

<h3>Convergencia Democrática</h3>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Partido</th>
              <th>Comunas</th>
    </tr>
  </thead>
  <tbody>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>
          <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
      <td><?php echo($csv[$a]["Partido Politico"])?></td>
        <td><?php echo($csv[$a]["Comunas"])?></td>
    </tr>
          <?php $convergencia++;?>
          <?php };?>
    <?php };?>
  </tbody>
</table>

<h3>Unión Patriótica</h3>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Partido</th>
              <th>Comunas</th>
    </tr>
  </thead>
  <tbody>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>
          <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
      <td><?php echo($csv[$a]["Partido Politico"])?></td>
        <td><?php echo($csv[$a]["Comunas"])?></td>
    </tr>
          <?php $union++;?>
          <?php };?>
    <?php };?>
  </tbody>
</table>

<h3>Sumemos</h3>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Partido</th>
              <th>Comunas</th>
    </tr>
  </thead>
  <tbody>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>
          <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
      <td><?php echo($csv[$a]["Partido Politico"])?></td>
        <td><?php echo($csv[$a]["Comunas"])?></td>
    </tr>
          <?php $sumemos++;?>
          <?php };?>
    <?php };?>
  </tbody>
</table>

<h3>La fuerza de la Mayoría</h3>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Partido</th>
              <th>Comunas</th>
    </tr>
  </thead>
  <tbody>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>
          <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoría"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
      <td><?php echo($csv[$a]["Partido Politico"])?></td>
        <td><?php echo($csv[$a]["Comunas"])?></td>
    </tr>
          <?php $lafuerza++;?>
          <?php };?>
    <?php };?>
  </tbody>
</table>

<h3>Chile Vamos</h3>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Partido</th>
              <th>Comunas</th>
    </tr>
  </thead>
  <tbody>
    <?php for($a = 0; $a < $total = count($csv); $a++){?>
          <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
    <tr>
      <td>
                  <?php echo($csv[$a]["Candidato Nombre"])?>
            <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
            <?php echo($csv[$a]["Candidato Apellido Materno"])?>
      </td>
      <td><?php echo($csv[$a]["Partido Politico"])?></td>
        <td><?php echo($csv[$a]["Comunas"])?></td>
    </tr>
          <?php $vamos++;?>
          <?php };?>
    <?php };?>
  </tbody>
</table>


<hr id="numeros">

<h3>Candidatos y candidatas por pacto</h3>

<div class="alert alert-danger">
<h4>Los candidatos del Frente Amplio son <?php print $frenteamplio;?></h4>
<h4>Los candidatos del Coalición Regionalista Verde son <?php print $coalicion;?></h4>
<h4>Los candidatos del Por todo Chile son <?php print $portodo;?></h4>
<h4>Los candidatos del Independiente son <?php print $independiente;?></h4>
<h4>Los candidatos del Trabahadores revolucionarios son <?php print $revolucionarios;?></h4>
<h4>Los candidatos del Convergencia Democrática son <?php print $convergencia;?></h4>
<h4>Los candidatos de la Unión Patriótica son <?php print $union;?></h4>
<h4>Los candidatos de Sumemos son <?php print $sumemos;?></h4>
<h4>Los candidatos de La fuerza de la Mayoría son <?php print $lafuerza;?></h4>
<h4>Los candidatos de Chile Vamos son <?php print $vamos;?></h4>

</div>



</div>
</div>
</div>
<?php include('footer.php')?>
