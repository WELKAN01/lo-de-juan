<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PREVIO BOLETA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<count($mi_carrito);$i ++){
							if($mi_carrito[$i]!=NULL){
						
            				?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $mi_carrito[$i]['cantidad'] ?> : <?php echo $mi_carrito[$i]['titulo']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span   style="text-align: right; color: #000000;"><?php echo $mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad'];    ?> S/.</span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad']);
							}
							}
							}
							?>
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: #000000;">Total (s/.)</span>
							<strong  style="text-align: left; color: #000000;"><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($mi_carrito)-1;$i ++){
							if($mi_carrito[$i]!=NULL){ 
							$total=$total + ($mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad']);
							}}}
							echo $total; ?> S/.</strong>
							</li>
						</ul>
					</div>
				</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" href="borrarcarrro.php">Vaciar carrito</a>
		<a type="button" class="btn btn-success" href="pagar.php">hacer el pago</a>
      </div>
    </div>
  </div>
</div>
