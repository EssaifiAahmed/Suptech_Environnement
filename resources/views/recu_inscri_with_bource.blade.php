<!DOCTYPE html>
<html>

<head>
    <title>Fiche de préinscription</title>

    <style>
        body {


            font-size: 14px;

        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table td {

            padding: 10px;
            border: 1px solid #111111;
            text-align: left;
            vertical-align: top;
        }

        table td:first-child {
            font-weight: bold;
            background-color: #f2f2f2;
            min-width: 200px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1cm;
        }

        .logo-left {


            width: 300px;
            height: 90px;
        }

        .logo-right {
            width: 290px;
            height: 100px;
            margin-top: 10px;
        }

        #header {
            background-color: #E0E0E0;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img style="float:right;" class="logo-right" src="{{ public_path('assets/img/logo.jpeg') }}" alt="Logo Right">

        <h4 style="display: flex;
  align-items: center;"><img class="logo-left" src="{{ public_path('logo.png') }}"
                alt="Logo Right"></h4>

    </div>
    <h2 style= " text-align: center; color:green;font-size: 17px;   margin-bottom: 70px;">Votre Pré inscription est
        effectuée avec succès!</h2>
    <h4 style= " text-align: right;"> Faite le {{ date('d/m/Y') }} </h4>

    <h2>Fiche de pr&eacute; inscription</h2>


    <table>
        <tr>
            <td id="header">Code inscription:</td>
            <td>{{ $code_inscription_recu_inscri }}</td>
        </tr>
        <tr>
            <td id="header">Nom et prénom:</td>
            <td>{{ $request->input('Nom') }} {{ $request->input('Prenom') }}</td>
        </tr>

        <tr>
            <td id="header">Sexe:</td>
            <td>{{ $request->input('Sexe') }}</td>
        </tr>

        <tr>
            <td id="header">CIN /Code Massar / N° Passeport:</td>
            <td>{{ $request->input('cin_massar') }}</td>
        </tr>

        <tr>
            <td id="header">Date de naissance:</td>
            @if ($request->input('date_naissance'))
                <td>{{ $request->input('date_naissance') }}</td>
            @else
                <td>{{ $request->yyyy . '-' . $request->mm . '-' . $request->dd }}</td>
            @endif
        </tr>

        <tr>
            <td id="header">Adresse:</td>
            <td>{{ $request->input('adresse') }}</td>
        </tr>

        <tr>
            <td id="header">Nationalité:</td>
            <td>{{ $request->input('nat') }}</td>
        </tr>

        <tr>
            <td id="header">Email:</td>
            <td>{{ $request->input('email') }}</td>
        </tr>

        <tr>
            <td id="header">Téléphone:</td>
            <td>{{ $request->input('telephone') }}</td>
        </tr>

        <tr>
            <td id="header">Dernier Diplôme obtenu / En cours:</td>
            <td>{{ $request->input('dip') }}</td>
        </tr>

        <tr>
            <td id="header">Filière:</td>
            <td>{{ $request->input('Sectors') }}</td>
        </tr>

        <tr>
            <td id="header">Inscription avec bourse:</td>
            <td>{{ $request->input('select_bourse') }}</td>
        </tr>

        <tr>
            <td id="header">Ville:</td>
            <td>{{ $request->input('Ville') }}</td>
        </tr>

    </table>

    <h4 style="margin-top:50px;font-size:17px;text-align:center;">Merci pour votre inscription ! </h4>

</body>

</html>
