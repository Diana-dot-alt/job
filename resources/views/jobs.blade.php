<x-layout>
    <h1>Welcome to Job Page</h1>
    <p>This are the available job</p>


<ul>
   @foreach($jobs as $id => $job)
    <div>
        <h2>{{ $job['title'] }}</h2>
        <p>Salary: {{ $job['salary'] }}</p>
        <p>{{ $job['description'] }}</p>
         <a href="/jobs/{{ $id }}">View Details</a>
    </div>
@endforeach
</ul>

 
</x-layout>

   
