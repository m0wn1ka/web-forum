<html>
    <head><title>
        blog page</title>
        <style>
            th, td {
  padding: 15px;
}
            </style>
</head>
<body>
    <center>the thoughts</center>
    <!-- <ul>
@foreach ($data as $user)
    <li>username: {{ $user['user'] }}, topic: {{ $user['topic'] }},   content: {{ $user['content'] }} </li>
@endforeach
</ul> -->
<table style="border: 1px solid black; padding: 15px;">
    <tr>
    <th>username</th>
    <th>topic</th>
    <th>content</th>
</tr>

@foreach ($data as $user)
<tr>
    <td> {{ $user['user'] }}</td>
    <td>  {{ $user['topic'] }}</td>
    <td>  {{ $user['content'] }} </td>
</tr>
@endforeach

</table>
</body>
</html>