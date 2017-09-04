<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,600">
    <style>
        body {
            width: 8.27in;
            margin: auto;
            padding: 0.00in;
            font-size: 11pt;

            line-height: 1.1;
        }

        .page-title {
            width: 100%;
            text-align: center;
        }


    </style>
</head>
<body>
<table>
    <?php for($i = 0; $i <= $stock->stock_in; $i): ?>
        <tr>
            <?php for($j = 0; $j <= 2; $j++): ?>
                <?php 
                    $i++;
                 ?>
                <?php if($i<=$stock->stock_in): ?>
                    <td>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>
                                    <img src="data:image/png;base64,<?php echo e(DNS1D::getBarcodePNG($stock->barcode_id, "C39",1,20,array(1,1,1))); ?>"
                                         alt="barcode"/></td>
                            </tr>
                            <tr>
                                <td align="center"><?php echo e($stock->barcode_id); ?></td>
                            </tr>
                            <tr>
                                <td align="center">TK. <?php echo e($stock->sell_price); ?> + Vat</td>

                            </tr>
                        </table>
                    </td>

                <?php endif; ?>
            <?php endfor; ?>

        </tr>
    <?php endfor; ?>
</table>
</body>
</html>
