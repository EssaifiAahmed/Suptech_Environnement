<!DOCTYPE html>
<html>
<head>
	<title>Demande de bourses</title>
	
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
			height: 100px;
		}
		.logo-right {
				width: 290px;
			height: 100px;
            margin-top:10px;
		}
        #header{
            background-color:#E0E0E0;
            text-align: center;
            
		
									  font-size: 14px;

            
        }
	</style>
</head>
<body>
<div class="header">
	
<img style="float:right;" class="logo-right" src="{{ public_path('assets/img/logo.jpeg')}}"  alt="Logo Right">

<h4 style="display: flex;
  align-items: center;"><img class="logo-left"  src="{{ public_path('logo.png')}}" alt="Logo Right"></h4>
  
	</div>
            
      

    <h1 style="text-align:center">Fiche demande de bourse (FDB)</h1>

	
	<table>
		<tr>
			<td id="header">Nom et prénom:</td>
			<td>{{ $request->input('Nom') }} {{ $request->input('Prenom') }}</td>
		</tr>
		
		<tr>
	    	<td id="header">Email:</td>
			<td>{{ $request->input('email') }}</td>
		</tr>
		
		<tr>
			<td id="header" >Numéro d'identité nationale ( CIN):</td>
			<td>{{ $request->input('cin') }}</td>
		</tr>
		
		<tr>
			<td id="header" >Code Massar:</td>
			<td>{{ $request->input('cin_massar') }}</td>
		</tr>
		
		<tr>
			<td id="header" >Date de naissance:</td>
			@if($request->input('date_naissance'))
    			<td>{{ $request->input('date_naissance') }}</td>
			@else
			    <td>{{ $request->yyyy.'-'.$request->mm.'-'.$request->dd }}</td>
			@endif
		</tr>
		
		<tr>
		    <td id="header" >Adresse :</td>
			<td>{{ $request->input('adresse') }}</td>
		</tr>
		
		<tr>
			<td id="header">Téléphone:</td>
			<td>{{ $request->input('telephone') }}</td>
		</tr>
		
		<tr>
		    <td id="header" >Filière :</td>
			<td>{{ $request->input('Sectors') }}</td>
		</tr>
		
		<tr>
		    <td id="header" >Nom du père:</td>
			<td>{{ $request->input('nom_pere_complet') }}</td>
		</tr>
		
		<tr>
		    <td id="header" >Profession du père :</td>
			<td>{{ $request->input('profession') }}</td>
		</tr>
		

		<tr>
		    <td id="header" >En possession de compte bancaire :</td>
			<td>{{ $request->input('compte_bancaire') }}</td>
		</tr>
		
		<tr>
			<td id="header">Type de bourse:</td>
			<td>{{ $request->input('type_bourse') }}</td>
		</tr>
	</table>


            <p style= " text-align: left;font-size:14px" >  Fait à Casablanca, le ………………………………………………………… </p>
      <p style= " text-align: left; font-size:14px" >  Je certifie sur l'honneur avoir rempli de manière complète et exacte le formulaire de demande de bourses, en indiquant les professions de mes parents ainsi que le type de bourse souhaité. J'atteste que toutes les informations fournies sont véridiques et que je n'ai pas volontairement omis des éléments importants. Je suis conscient(e) que toute inexactitude ou omission pourrait entraîner le rejet de ma candidature ou la suspension de toute bourse qui me serait accordée par la Commission. Je m'engage donc à fournir des informations précises et à fournir tout document justificatif nécessaire pour étayer ma demande.</p>
        <p style= " text-align: left; font-size:14px" >  Signature précédée de la mention manuscrite « lu et approuvé »</p>


</body>
</html>