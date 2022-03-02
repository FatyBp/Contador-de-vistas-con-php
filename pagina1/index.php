<?php
include "./header.php"; // ./ sobre el folder, ../salida de foolder
include "./menu.php";
include "./conexion.php";
?>
<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="fw-light">Full Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images
      in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>

    </div>
</section>

<?php
include "./footer.php";
include "./metodos.php";
$vista = $_SERVER["REMOTE_ADDR"];
$obj = new metodos();
if ($obj ->insertarDatos($vista)==1){
}
?>

<table class="table">
                    <thead>
                        <tr class="table-success">
                            <td class="text-center"><b>visitas</b></td>
                            <td class="text-center"><b>IP</b></td>
                            
                        </tr>
                    </thead>
                    <?php 
                        $objeto = new metodos();
                        $sql="SELECT visitas,ip from vistas";
                        $datos=$objeto->mostrarDatos($sql);
                        foreach ($datos as  $key) :
                            
                     ?>
                    <tr class="table-info">
                        <td><?= $key['visitas']  ?></td>
                        <td><?= $key['ip']  ?></td>
                        
                    </tr>
                    <?php endforeach; ?>
                </table>
              
  </tbody>
</table>


    