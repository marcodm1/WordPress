<!-- Aside -->
<div class="col-lg-3">
    <!-- <card class="card-body">
        <h4>Publicidad</h4>
        <hr>
        <img src="imgVertical.jpg" alt="" class="img-fluid">
    </card> -->
    <!-- </div> -->
    <!-- fin Aside -->

    <!-- este loop viene de functions tema1_widgets para el menu de la derecha-->
    <?php if ( is_active_sidebar('widgets_derecha' )) : ?> 
        <?php dynamic_sidebar('widgets_derecha'); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>

</div>