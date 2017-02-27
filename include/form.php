<?php
/**
 * Created by PhpStorm.
 * User: Guillermo
 * Date: 26/02/2017
 * Time: 14:45
 */
?>
<div id="mensaje">

</div>
<br>
<div id="capaformulario">
    <form id="formulario">
        <input type="text" name="user" placeholder="Usuario">
        <a href="#"><p>Comprobar disponibilidad</p></a>
        <input type="password" name="password" placeholder="Contraseña">
        <input type="password" name="password2" placeholder="Repite contraseña">
        <input type="email" name="email" placeholder="Correo electrónico">
        <input type="button" value="Enviar" onclick="xajax_procesar_formulario(xajax.getFormValues('formulario'))">
    </form>
</div>

