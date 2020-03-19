<?php
/**
 * This is free and unencumbered software released into the public domain.
 *
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any
 * means.
 *
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 *
 * For more information, please refer to <http://unlicense.org>
 */

require '../template/header.php';
?>

<!-- Inhalt -->
<h1>Konto 1000: Kasse</h1>
<table style="padding: 0">
    <tr>
        <th>Datum</th>
        <th>Gegenkonto</th>
        <th>Text</th>
        <th>Soll</th>
        <th>Haben</th>
    </tr>
    <tr>
        <td>01.01.2004</td>
        <td>2100</td>
        <td>Bareinlage</td>
        <td style="text-align: right">1000.00</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>01.01.2004</td>
        <td>4000</td>
        <td>Otto, u/Kauf, 80 Uhren</td>
        <td>&nbsp;</td>
        <td style="text-align: right">800.00</td>
    </tr>
    <tr>
        <td>08.01.2004</td>
        <td>3000</td>
        <td>Strasse, u/Verkauf, 20 Uhren</td>
        <td style="text-align: right">400.00</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>15.01.2004</td>
        <td>3000</td>
        <td>Strasse, u/Verkauf, 15 Uhren</td>
        <td style="text-align: right">300.00</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>22.01.2004</td>
        <td>3000</td>
        <td>Strasse, u/Verkauf, 22 Uhren</td>
        <td style="text-align: right">440.00</td>
        <td>&nbsp;</td>
    </tr>
</table>

<?php
require '../template/footer.php';
?>