
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td style="padding-left: 0; padding-right:0; ">
                    <form method="POST" action="{{ url('/delete/'.$student->id) }}" id="form-id">
                        <input name="_method" value="DELETE" type="hidden">
                        @csrf
                        <a href="{{ url('/edit/'.$student->id) }}"  style=" width:40%; float:left" class="btn btn-sm btn-warning">Edit</a>
                        <a onclick="document.getElementById('form-id').submit();" style="width:55%; margin-left:3px; background-color: rgb(153, 48, 48); float:left; color:aliceblue " class="btn btn-sm">delete</a>
                    </form>
                    </td>
{{-- href="{{ url('/delete/'.$student->id) }}"  --}}

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
