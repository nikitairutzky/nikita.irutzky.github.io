<?php /* Smarty version 3.1.27, created on 2017-05-24 12:00:07
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\element\tv\renders\input\number.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2544559254b979885b7_23140810%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9fad0d39dbae15f5e7643feb66397158d4cf4d7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\element\\tv\\renders\\input\\number.tpl',
      1 => 1491128142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2544559254b979885b7_23140810',
  'variables' => 
  array (
    'tv' => 0,
    'style' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59254b97a6aee4_62077168',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59254b97a6aee4_62077168')) {
function content_59254b97a6aee4_62077168 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2544559254b979885b7_23140810';
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
	<?php echo $_smarty_tpl->tpl_vars['style']->value;?>

	tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'numberfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: 400
        ,enableKeyEvents: true
        ,autoStripChars: true
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?> 
        ,allowDecimals: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowDecimals'] && $_smarty_tpl->tpl_vars['params']->value['allowDecimals'] != 'false' && $_smarty_tpl->tpl_vars['params']->value['allowDecimals'] != 'No') {?>true<?php } else { ?>false<?php }?> 
        ,allowNegative: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowNegative'] && $_smarty_tpl->tpl_vars['params']->value['allowNegative'] != 'false' && $_smarty_tpl->tpl_vars['params']->value['allowNegative'] != 'No') {?>true<?php } else { ?>false<?php }?> 
        ,decimalPrecision: <?php if ($_smarty_tpl->tpl_vars['params']->value['decimalPrecision'] >= 0) {
echo sprintf("%d",$_smarty_tpl->tpl_vars['params']->value['decimalPrecision']);
} else { ?>2<?php }?> 
        ,decimalSeparator: <?php if ($_smarty_tpl->tpl_vars['params']->value['decimalSeparator']) {?>'<?php echo $_smarty_tpl->tpl_vars['params']->value['decimalSeparator'];?>
'<?php } else { ?>'.'<?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['params']->value['maxValue'] != '' && is_numeric($_smarty_tpl->tpl_vars['params']->value['maxValue'])) {?>,maxValue: <?php echo $_smarty_tpl->tpl_vars['params']->value['maxValue'];
}?> 
        <?php if ($_smarty_tpl->tpl_vars['params']->value['minValue'] != '' && is_numeric($_smarty_tpl->tpl_vars['params']->value['minValue'])) {?>,minValue: <?php echo $_smarty_tpl->tpl_vars['params']->value['minValue'];
}?> 
        ,msgTarget: 'under'
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>