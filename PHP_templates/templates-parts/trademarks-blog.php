<section class="section-trademark">
  <div class="container">
    <?php 
    if (!empty($block_title)) {
      echo '<div class="trademark-seporator"></div>';
      echo '<h2 class="trademark-section-title">'. $block_title .'</h2>';
      echo '<h2 class="trademark-title">собственные марки</h2>';
    }
    ?>
    <div class="trademark-cards">
      <div class="trademark-card">
        <svg class="trademark-card-logo">
          <use href="img/sprite.svg#AGTECH"></use>
         </svg>
        <h3 class="trademark-card-title ag-title">Автохимия AG-Tech</h3>
        <p class="trademark-card-text ag-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
      </div>
      <div class="trademark-card">
        <svg class="trademark-card-logo ap-logo">
          <use  href="img/sprite.svg#AP"></use>
         </svg>
        <h3 class="trademark-card-title ap-title">Автохимия AP</h3>
        <p class="trademark-card-text ap-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
      </div>
    </div>
    <!-- /.trademark-cards -->
  </div>
  <!-- /.container -->
</section>