<x-layout>
    <x-slot name='title'>
        Schools
    </x-slot>
    <div class='container'>
        <div class='row mt-2'>
            <h1>Schools</h1>
        </div>
        <div class='row mt-2'>
            <div class='col-7'>
                <table class='table table-dark'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mark</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schools as $school)
                        <tr>
                            <td>{{$school->id}}</td>
                            <td>{{$school->name}}</td>
                            <td>{{$school->mark}}</td>
                            <td>
                                <a href="/schools/{{$school->id}}">
                                    <button class='form-control btn btn-success mt-2'>Update</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class='col-5'>
                <form action="/schools" method="post">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name" class='form-control'>
                    <label>Mark</label>
                    <input type="number" name="mark" class='form-control'>
                    <label>City</label>
                    <input type="text" name="city" class='form-control'>
                    <button class='form-control btn btn-primary mt-2'>Create</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>