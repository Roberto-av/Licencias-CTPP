@extends('layouts.app')

@section('title')
    STATUS
@endsection
@section('meta-description')
    ESTADO DE LICENCIAS meta description
@endsection

@section('content')
    <H1>ESTADO DE LICENCIAS</H1>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Print Web Page</title>

        <style>
            table {
                margin: 5rem auto;
                border-collapse: collapse;
            }

            table td,
            th {
                border: 2px solid #adadad;
                text-align: center;
                color: #273b3d;
            }

            button {
                display: block;
                margin: 0 auto;
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                font-size: 1.3rem;
                cursor: pointer;
            }

            button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <td colspan="15" style="border: none; font-size: 1.2rem; padding-bottom: 1.2rem">
                    NSEIFSC Future Trades Summary From 14-04-2023 To 14-04-2023
                </td>
            </tr>
            <!-- <thead> -->
            <tr style="background-color: #cccccc">
                <th>Instrument</th>
                <th>Symbol</th>
                <th>Expiry</th>
                <th>Strike</th>
                <th>CallPut</th>
                <th>B/F Quantity</th>
                <th>Average rate</th>
                <th>Purchase Quantity</th>
                <th>Pure.Avg.Rate</th>
                <th>Sale Quantity</th>
                <th>Saloe Avg.</th>
                <th>Net Quantity</th>
                <th>Net Avg.</th>
                <th>Closing Price</th>
                <th>Lot Price</th>
            </tr>
            <!-- </thead> -->
            <tbody>
                <tr>
                    <th>FUTIDX</th>
                    <td>NIFTY</td>
                    <td>27-04-23</td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>1366</td>
                    <td>1366</td>
                    <td>125679.4</td>
                    <td>1366</td>
                    <td></td>
                    <td></td>
                    <td>17861</td>
                    <td>2</td>
                </tr>

                <tr>
                    <th>FUTIDX</th>
                    <td>NIFTY</td>
                    <td>27-04-23</td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>1366</td>
                    <td>1366</td>
                    <td>125679.4</td>
                    <td>1366</td>
                    <td></td>
                    <td></td>
                    <td>17861</td>
                    <td>2</td>
                </tr>

                <tr>
                    <th>OPTIDX</th>
                    <td>NIFTY</td>
                    <td>27-04-23</td>
                    <td>0</td>
                    <td>PE</td>
                    <td></td>
                    <td></td>
                    <td>1366</td>
                    <td>1366</td>
                    <td>125679.4</td>
                    <td>1366</td>
                    <td></td>
                    <td></td>
                    <td>17861</td>
                    <td>2</td>
                </tr>

                <tr>
                    <th>OPTIDX</th>
                    <td>NIFTY</td>
                    <td>27-04-23</td>
                    <td>0</td>
                    <td>PE</td>
                    <td></td>
                    <td></td>
                    <td>1366</td>
                    <td>1366</td>
                    <td>125679.4</td>
                    <td>1366</td>
                    <td></td>
                    <td></td>
                    <td>17861</td>
                    <td>2</td>
                </tr>

                <tr>
                    <th>OPTIDX</th>
                    <td>NIFTY</td>
                    <td>27-04-23</td>
                    <td>0</td>
                    <td>CE</td>
                    <td></td>
                    <td></td>
                    <td>1366</td>
                    <td>1366</td>
                    <td>125679.4</td>
                    <td>1366</td>
                    <td></td>
                    <td></td>
                    <td>17861</td>
                    <td>2</td>
                </tr>

                <tr>
                    <th>OPTIDX</th>
                    <td>NIFTY</td>
                    <td>27-04-23</td>
                    <td>0</td>
                    <td>CE</td>
                    <td></td>
                    <td></td>
                    <td>1366</td>
                    <td>1366</td>
                    <td>125679.4</td>
                    <td>1366</td>
                    <td></td>
                    <td></td>
                    <td>17861</td>
                    <td>2</td>
                </tr>

                <tr style="background-color: #cccccc">
                    <th colspan="5">Client Total</th>
                    <td>0</td>
                    <td></td>
                    <td>1366</td>
                    <td></td>
                    <td>125</td>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="4">
                        <span style="color: green"><b>Gross Profit</b></span>
                    </th>
                    <td>10</td>
                    <td><b>Brokerage</b></td>
                    <td>0</td>
                    <td><b>CGST:</b></td>
                    <td>0</td>
                    <td><b>SGST</b></td>
                    <td>0</td>
                    <td><b>SEBI</b></td>
                    <td>0</td>
                    <td>
                        <span style="color: green"><b>Net Profit</b></span>
                    </td>
                    <td>10</td>
                </tr>
            </tbody>
        </table>



        <button id="printbtn">Print</button>
        <script>
            const printbtn = document.getElementById("printbtn");
            printbtn.addEventListener("click", () => {
                printbtn.disabled = true;
                window.print();
                setTimeout(() => {
                    printbtn.disabled = false;
                }, 1000);
            });
        </script>
    </body>

    </html>
    <a href="/principal"> REGRESAR</a>
@endsection
