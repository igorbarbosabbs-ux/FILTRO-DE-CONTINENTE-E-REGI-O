<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTINENTE E REGIÃO</title>
</head>
<body>
    <table border ="1">
        <h1>CONTINENTE E REGIÃO</h1>
        <tr>
            <td>CODIGO</td>
            <td>NOME</td>
            <td>CONTINENTE</td>
            <td>REGIÃO</td>
            <td>AREA TOTAL</td>
            <td>ANO DE INDEPEDENCIA</td>
            <td>POPULAÇÃO</td>
            <td>EXPECTATIVA DE VIDA</td>
            <td>PIB</td>
            <td>NOME LOCAL</td>
            <td>FORMA DE GOVERNO</td>
</tr>
@foreach($paises as $item)
<tr>
    <th>{{$item->Code}}</th>
    <th>{{$item->Name}}</th>
    <th>{{$item->Continent}}</th>
    <th>{{$item->Region}}</th>
    <th>{{$item->SurfaceArea}}</th>
    <th>{{$item->IndepYear}}</th>
    <th>{{$item->Population}}</th>
    <th>{{$item->LifeExpectancy}}</th>
    <th>{{$item->GNP}}</th>
    <th>{{$item->LocalName}}</th>
    <th>{{$item->GovernmentForm}}</th>
</tr>
@endforeach
</table>
</body>
</html>