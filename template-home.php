<?php 
/*
Template Name: Inicio
*/
get_header();
?>

<body>

<!-- CONTENT -->
  <main>
    <!-- Seccion 1 -->
    <?php get_template_part('template-parts/section', '1'); ?>
    <!-- Fin Seccion 1 -->
    <!-- Seccion 2 -->
    <?php get_template_part('template-parts/section', '2'); ?>
    <!-- Fin Seccion 2 -->
    <!-- Seccion 3 -->
    <?php get_template_part('template-parts/section', '3'); ?>
    <!-- Fin Seccion 3 -->
    <!-- Seccion 4 -->
    <?php get_template_part('template-parts/section', '4'); ?>
    <!-- Fin Seccion 4 -->
    <!-- Seccion 5 -->
    <?php get_template_part('template-parts/section', '5'); ?>
    <!-- Fin Seccion 5 -->
    <!-- Seccion 6 -->
    <?php get_template_part('template-parts/section', '6'); ?>
    <!-- Fin Seccion 6 -->
    <!-- Seccion 7 -->
    <?php get_template_part('template-parts/section', '7'); ?>
    <!-- Fin Seccion 7 -->

  </main>
<!-- FIN CONTENT -->

<?php get_footer(); ?>

