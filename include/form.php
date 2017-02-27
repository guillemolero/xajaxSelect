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
        <select name="provincia" onchange="xajax_procesar_select(xajax.getFormValues('formulario'))">
            <option value="0" selected>Selecciona tu provincia</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
        </select>
        <br>
        <select id='select' name='pueblos'>
            <option value="0">Selecciona la provincia</option>

        </select>
        <input type="button" value="Enviar" onclick="xajax_procesar_formulario(xajax.getFormValues('formulario'))">
    </form>
</div>

