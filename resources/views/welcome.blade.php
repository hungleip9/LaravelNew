<!DOCTYPE html>
<html>
<head>
    <title>Bai 1</title>
</head>
<body>
<form action="{{route('save')}}" method="POST">

    @csrf()
    <button> SubMit </button>
</form>
</body>
</html>
