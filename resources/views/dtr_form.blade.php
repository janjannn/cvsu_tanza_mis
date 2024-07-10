<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KioskState</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        table, tr, td {
            border: solid 1px black;
        }

        .border {
            border: solid 1px black !important;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="p-2 mx-auto" style="max-width: 600px">
        <table class="table table-bordered">
            <tbody>

            <tr>
                <td colspan="7">
                    <div class="row">
                        <p class="col-12">Civil Service FORM NO. 48</p>
                        <h4 class="col-12 text-center">
                            DAILY TIME RECORD
                        </h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center" colspan="7">NAME <span class="text-uppercase fw-bold">{{$user->name}}</span>
                </td>
            </tr>
            <tr>
                <td class="text-center" colspan="7">MONTH <span class="text-uppercase fw-bold">{{$month}}</span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td class="text-center" colspan="2">A.M.</td>
                <td class="text-center" colspan="2">P.M.</td>
                <td colspan="2">UNDERTIME</td>
            </tr>
            <tr>
                <td>DAY</td>
                <td>Arrival</td>
                <td>Departure</td>
                <td>Arrival</td>
                <td>Departure</td>
                <td>Hours</td>
                <td>Minute</td>
            </tr>
            @for ($day = 01; $day <= 31; $day++)
                <tr>
                    <td>{{$day}}</td>

                    @if(isset($dtr[$day]))

                        @php($morningSession = $dtr[$day]->getSession('AM'))
                        @php($afternoonSession = $dtr[$day]->getSession('PM'))

                        @if(isset($morningSession))
                            <td>{{\Carbon\Carbon::parse($morningSession->start_time)->format('h:i:s')}}</td>
                            <td>{{\Carbon\Carbon::parse($morningSession->end_time)->format('h:i:s')}}</td>
                        @else
                            <td class="text-center" >-</td>
                            <td class="text-center" >-</td>
                        @endif

                        @if(isset($afternoonSession))
                            <td>{{\Carbon\Carbon::parse($afternoonSession->start_time)->format('h:i:s')}}</td>
                            <td>{{\Carbon\Carbon::parse($afternoonSession->end_time)->format('h:i:s')}}</td>
                        @else
                            <td class="text-center" >-</td>
                            <td class="text-center" >-</td>
                        @endif

                        @php($underTimeHour = (int) ($dtr[$day]->getUndertimeMinutes() / 60))
                        @php($underTimeMinutes = ($dtr[$day]->getUndertimeMinutes() % 60))

                        <td> {{ max($underTimeHour,0)  }}</td>
                        <td> {{ max($underTimeMinutes,0)  }}</td>
                    @else
                        <td class="text-center" >-</td>
                        <td class="text-center" >-</td>
                        <td class="text-center" >-</td>
                        <td class="text-center" >-</td>
                        <td class="text-center" >-</td>
                        <td class="text-center" >-</td>
                    @endif
                </tr>
            @endfor
            <tr>
                <td colspan="5">Total</td>
                <td>{{ max((int)($totalWorkedMinutes / 60 ),0)  }}</td>
                <td>{{ max(($totalWorkedMinutes % 60 ),0)  }}</td>
            </tr>
            <tr>
                <td colspan="7">
                    <div class="border p-2">
                        I <strong>CERTIFY</strong> on my honor that the above is a true and correct report of the
                        hours
                        of
                        work performed,
                        record of which was made daily at the time of arrival and departure from office.
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <div class="text-center">
                        VERIFIED as to the prescribed office hours:
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <div class="text-center border-bottom">
                        <strong class="h4">{{$inCharge}}</strong>
                    </div>
                    <div class="text-center">In Charge</div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>
