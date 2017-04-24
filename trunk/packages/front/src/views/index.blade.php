<html>
    <head>
        <title>kimco</title>
    </head>
    <body>
        @foreach($student as $stu)
    <td>
        {{$stu->student_name}}
    </td>
    @endforeach
</body>
</html>
