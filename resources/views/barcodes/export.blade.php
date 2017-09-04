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
    @for ($i = 0; $i <= $stock->stock_in; $i)
        <tr>
            @for ($j = 0; $j <= 2; $j++)
                @php
                    $i++;
                @endphp
                @if($i<=$stock->stock_in)
                    <td>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>
                                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($stock->barcode_id, "C39",1,20,array(1,1,1))}}"
                                         alt="barcode"/></td>
                            </tr>
                            <tr>
                                <td align="center">{{$stock->barcode_id}}</td>
                            </tr>
                            <tr>
                                <td align="center">TK. {{$stock->sell_price}} + Vat</td>

                            </tr>
                        </table>
                    </td>

                @endif
            @endfor

        </tr>
    @endfor
</table>
</body>
</html>
