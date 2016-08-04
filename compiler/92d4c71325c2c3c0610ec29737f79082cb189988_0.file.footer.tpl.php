<?php
/* Smarty version 3.1.29, created on 2016-07-21 01:56:39
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\main\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57900fb7667d13_70332362',
  'file_dependency' => 
  array (
    '92d4c71325c2c3c0610ec29737f79082cb189988' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\main\\footer.tpl',
      1 => 1469058997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57900fb7667d13_70332362 ($_smarty_tpl) {
?>
<footer class="page-footer blue">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Raiz Imaginaria</h5>
        <p class="grey-text text-lighten-4">Desarrollo de software y soluciones informáticas</p>
      </div>
      <div class="col l4 offset l2 s12">
        <h5 class="white-text">Páginas asociadas</h5>
        <ul>
          <li class="grey-text text-lighten-3">Camaleón</li>
          <li class="grey-text text-lighten-3">Oma Nacional</li>
          <li class="grey-text text-lighten-3">Ñandú Necochea</li>
          <li class="grey-text text-lighten-3">Oma Necochea</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2016 Raiz Imaginaria
      <a href="" class="grey-text text-lighten-4 right">Más asociados</a>
    </div>
  </div>
</footer>



<?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){
  $('.button-collapse').sideNav();
  $('.dropdown-button').dropdown();
  $('select').material_select();
});
<?php echo '</script'; ?>
>
<?php }
}
