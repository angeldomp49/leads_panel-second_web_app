<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>{{$title}}</title>

@foreach($stylesheets as $stylesheet)
    <link rel="stylesheet" href="{{$stylesheet}}" />
@endforeach
</head>