<?php for ($j = 1; $j < 11; $j++): ?>
    <table border="2">
        <?php for ($i = 1; $i < 11; $i++): ?>
            <tr>
                <td><?php echo $j; ?></td>
                <td>x</td>
                <td><?php echo $i; ?></td>
                <td>=</td>
                <td><?php echo $i*$j; ?></td>  
            </tr>
        <?php endfor; ?>
    </table>
    <br>
<?php endfor; ?>