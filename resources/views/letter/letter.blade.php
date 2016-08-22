<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Rezomedia</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style>
.p-contact{
    width: 100%;
    font-weight: bold;
        border-bottom: 2px solid black;
}
.p-contact .r-side{
        vertical-align: top;
    width: 33.33333333%;
        padding-left: 40px;

}

.p-contact .l-side{
        vertical-align: top;
        border-right: 2px solid black;
    width: 66.66666667%;
        padding-bottom: 20px;
} 

.f-container {
    width: 620px;
    margin: 0 auto;
    color: black;
}


header.letter {
    margin-bottom: 20px;
}

header.letter > img {
    width: 385px;
}

.p-customer{
    margin: 20px 0;
    width: 100%;
    font-weight: bold;
}

.p-customer .l-side{

}

.p-customer .r-side{
        border: 2px solid black;
    width: 82%;
    padding-left: 5px;
}


.p-pay {
    width: 100%;
    border: 2px solid black;
}

.p-pay td,
.p-pay th {
    border: 2px solid black;
    font-weight: bold;
}

.p-pay th {
    text-align: center;
    padding: 4px;
}

.p-pay td {
    padding: 2px 4px;
}

.p-pay .p-total {
    border-left: none;
}

.p-pay .p-total-f {
    border-right: none;
}

.p-pay .bolder {
    font-weight: 800 !important;
}

.p-pay .w-100 {
    width: 100px;
}

.footer{
    width: 100%;
}

.footer .l-side{
    width: 42%;
    padding-left: 5px;
}

.footer span {
    padding: 40px;
    display: block;
    float: left;
    font-weight: bold;
    width: 10%;
     
}
.text-center {
    text-align: center;
}
.text-right {
    text-align: right;
}

table{
        border-collapse: collapse;

    }
    body{
        font-family:   arial;
        font-size:12px  !important;
    }
    </style>

</head>

<body>
    <div class="f-container">
        <header class="letter">
            <img src="img/logo/logo.jpg" alt="">
        </header>
         <table class="p-contact">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="l-side">
                             SRL "REZOMEDIA"
                            <br> C.F.:1007600000934 / TVA :0606975
                            <br> mun.Chisinau, str. Moscova bd. nr.3 bl.3 of.48
                            <br> IBAN: MD27EX0000002251623913MD B
                            <br> B.C.'EXIMBANK-GRUPPO VENETO BANCA'
                            <br> S.A. FIL.NR.7 CHISINAU, bic: EXMMMD22420
                            <br> Телефоны 022 884-739
                        </td>
                        <td class="r-side">
                            СЧЕТ-ФАКТУРА
                            <br> № {{ $order_number }}
                            <br> от {{ date('d.m.Y') }}
                        </td>

                    </tr>
                </tbody>
        </table>

        
         <table class="p-customer">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="l-side">
                             Плательщик
                        </td>
                        <td class="r-side">
                           {{ $organization }}
                        </td>
                    </tr>
                </tbody>
        </table>


        <section class="c-count">
            <table class="p-pay">
                <thead>
                    <tr>
                        <th style="width:26px;">№</th>
                        <th >Наименование</th>
                        <th style="width:49px;">Ед.изм.</th>
                        <th style="width:45px;">Кол.</th>
                        <th style="width:100px;">Цена</th>
                        <th style="width:100px;" class="w-100">Сумма</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $counter => $p)
                    <tr>
                        <td class="text-center">{{ $counter }}</td>
                        <td>{{ $p['name'] }}</td>
                        <td class="text-center">buc.</td>
                        <td class="text-center">{{ $p['quantity'] }}</td>
                        <td class="text-right">{{ $p['price'] }}</td>
                        <td class="text-right">{{ $p['amount'] }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="text-center p-total-f" colspan="4"></td>
                        <td class="text-right text-uppercase p-total">Итого</td>
                        <td class="text-right bolder">{{ $amount }}</td>
                    </tr>
                    <tr>
                        <td class="text-center p-total-f" colspan="6" style="height:20px;"></td>
                    </tr>
                    <tr>
                        <td class="text-center p-total-f" colspan="4"></td>
                        <td class="text-right p-total">Включая НДС</td>
                        <td class="text-right bolder">{{ $amount * 0.20 }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <table class="footer">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="l-side">
                            <span>Подпись</span>
                        </td>
                        <td class="r-side">
                             <span>М.П</span>
                        </td>

                    </tr>
                </tbody>
        </table>
    </div>
</body>

</html>
