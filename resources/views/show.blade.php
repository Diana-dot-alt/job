<!DOCTYPE html>
<html>
<body>
    <h1>{{ $job['title'] }}</h1>
    <p>Salary: {{ $job['salary'] }}</p>
    <p>{{ $job['description'] }}</p>
    <a href="{{ route('jobs.show') }}">Back to Jobs</a>
</body>
</html>