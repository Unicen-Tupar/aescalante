<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-23 05:15:36
  from 'C:\xampp\htdocs\PW-2020\aescalante\PDO\templateEngine\templates\player_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef173d87e5121_15172461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de73c0aee5f8ab0c5020387f92f98f054ef4e4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PW-2020\\aescalante\\PDO\\templateEngine\\templates\\player_index.tpl',
      1 => 1592882084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templateEngine/templates/header.tpl' => 1,
    'file:templateEngine/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ef173d87e5121_15172461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templateEngine/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Control de Jugadores</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
            <button type="button" class="btn btn-success">Vista Usuario</button>
        </div>
    </div>
    <h2>Sumar jugador al plantel</h2>

    <form action="addPlayer" mothod="GET">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group col-md-5">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="surname" id="surname">
            </div>
        </div>

        <div class="form-row">
            <div class="dropdown">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ej: Arquero">
                    <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Posicion</button>
                  </span>                    
                        <select name="id_position" id="id_position">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['positions']->value, 'position');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['position']->value['id_position'];?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['position']->value['name'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </select> 
                                                                        
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                </div>
            </div>

            <div class="form-group col-md-3">
                
                <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Ej: La Pulga">
                <label for="apodo">Apodo</label>
            </div>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Agregar Jugador">
        </div>
    </form>

    <br>
    <br>
    <h2>Jugadores</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Posicion</th>
                    <th>Apodo</th>
                    <th>Condicion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- $players= getPlayers(); -->

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>

                    <td>
                        <p> <?php echo $_smarty_tpl->tpl_vars['player']->value['name'];?>
 </p>
                    </td>
                    <td>
                        <p><?php echo $_smarty_tpl->tpl_vars['player']->value['surname'];?>
</p>
                    </td>
                    <td>
                        <p><?php echo $_smarty_tpl->tpl_vars['player']->value['id_position'];?>
 </p>
                    </td>
                    <td>
                        <p><?php echo $_smarty_tpl->tpl_vars['player']->value['nickname'];?>
 </p>

                    </td>
                    <td>
                    </td>
                    <td>
                        <a href="#"><span data-feather="edit"></span>Editar</a>
                        <a href="deletePlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value['id_player'];?>
"><span data-feather="trash"></span>Elimitar</a>
                        <a href="#"><span data-feather="check"></span>Terminar</a>
                    </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender("file:templateEngine/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
