
    <tbody>
        @foreach($proyectos as $proyecto)
        <tr>

            <th scope="row">{{$proyecto->id}}</th>
            <th>{{$proyecto->titulo}}</th>
            <th>{{$proyecto->descripcion}}</th>
            <th>{{$proyecto->created_at}}</th>
            <td>

            </td>
            <td>

            </td>
        </tr>

        @endforeach
</tbody>