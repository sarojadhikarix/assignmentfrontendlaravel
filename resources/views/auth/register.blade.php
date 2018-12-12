@extends('layouts.default.default')

@section('content')

    <form action="{{ route('user.save') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
        </div>
        <div class="form-group">
            <label for="name">Birth Date</label>
            <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="dob" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="status">Role</label>
            <select name="role_id" class="form-control">
                @foreach($roles as $role)
                    <option value="{{$role['id']}}">{{$role['title']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Deactive</option>
            </select>
        </div>
        <input type="hidden" name="age_restrict" value="1">

        <button type="submit" id="register" class="btn btn-default">Submit</button>
    </form>
    <script type="text/javascript">
        // $(document).ready(function() {
        //     $('#date_of_birth').datepicker({ format: "yyyy/mm/dd" });
        // });
    </script>
@stop

