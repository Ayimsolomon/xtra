<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Saved and valid user data</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->updated_at }}</td>
                    <td> <form action="{{ route('contacts.delete', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?');"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger btn-sm">Delete</button> </form> </td>
                </tr>
            @endforeach
</table>
</body>
</html>
