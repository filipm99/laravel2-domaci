<x-layout>
    <x-slot name='name'>
        School
    </x-slot>
    <div class='container'>
        <div class='row mt-2'>
            <h1>Update {{$school->name}}</h1>

        </div>
        <div class="row mt-2">
            <div class="col-12">
                <form action="/schools/{{$school->id}}" method="post">
                    @csrf
                    <label>ID</label>
                    <input type="number" disabled class="form-control" value="{{$school->id}}">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$school->name}}">
                    <label>Mark</label>
                    <input type="number" name="mark" class="form-control" value="{{$school->mark}}">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="{{$school->city}}">

                    <button class="form-control btn btn-success mt-2">Update</button>
                    <button name='delete' class="form-control btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>
        <div class="row mt-2">
            <h2>Jobs</h2>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Job</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($school->people as $person)
                        <tr>
                            <td>{{$person->person->first_name}}</td>
                            <td>{{$person->person->last_name}}</td>
                            <td>{{$person->job}}</td>
                            <td>
                                <form action="/jobs/delete" method="post">
                                    @csrf
                                    <input type="text" name='school_id' hidden value="{{$school->id}}">
                                    <input type="text" name='person_id' hidden value="{{$person->person->id}}">
                                    <button class="form-control btn btn-danger mt-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <form action="/jobs" method="post">
                    @csrf
                    <input type="text" name='school_id' hidden value="{{$school->id}}">
                    <label>Person</label>
                    <select name="people_id" class='form-control'>
                        @foreach($people as $person)
                        <option value="{{$person->id}}">
                            {{
                            $person->first_name.' '.$person->last_name
                            }}
                        </option>
                        @endforeach
                    </select>
                    <label>Job</label>
                    <input type="text" name="job" class="form-control">
                    <button class="form-control btn btn-primary mt-2">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>