<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p>Bonjour administrateur <br></p>
    <p><b>{{$contact->name}} </b> vous a laissé le message suivant sur la plateforme avec pour objet <b>{{$contact->sujet}}<br>   </b>
    	{{$contact->message}}<br> 
    	Email: {{$contact->email}}<br>
    	@if($contact->phone) Tel: {{$contact->phone}}<br> @endif<br><br>--<br>Cordialement, </p>
  </body>
</html>