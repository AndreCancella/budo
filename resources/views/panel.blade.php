@include('main')
    <h2 class="panel">Lista de Alunos</h2>
    <div class="panel">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Faixa</th>
                        <th>Data de nascimento</th>
                        <th>CPF</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->belt}}</td>
                    <td>{{date('d/m/Y', strtotime($student->birth_date))}}</td>
                    <td>{{substr($student->cpf, 0, 3) . '.' . substr($student->cpf, 3, 3) . '.' . substr($student->cpf, 6, 3) . '-' . substr($student->cpf, 9, 2)}}</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{route('students.delete', ['id' => $student->id])}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>