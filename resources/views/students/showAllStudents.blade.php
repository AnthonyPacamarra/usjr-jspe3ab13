<div class="container">
    <h1>All Students</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Full Name</th>
                <th>Prog ID</th>
                <th>Coll ID</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->studid }}</td>
                <td>{{ $student->studfirstname . ' ' . $student->studmidname . ' ' . $student->studlastname }}</td>
                <td>{{ $student->studprogid }}</td>
                <td>{{ $student->studcollid }}</td>
                <td>{{ $student->studyear }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>