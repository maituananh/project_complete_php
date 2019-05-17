@extends('layout.layout')
@section('content')

<section class="section" ng-controller="userController">
    <div>
        <input ng-click="listusers()" type="submit" name="listusers" value="List All Users My Store" style="background: steelblue">
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <section class="example">
                        <div class="table-flip-scroll">
                            <table class="table table-striped table-bordered table-hover flip-content">
                                <thead class="flip-header">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody ng-repeat="users in User">
                                    <tr class="gradeA">
                                        <td><% users.id %></td>
                                        <td><% users.name %></td>
                                        <td><% users.password %></td>
                                        <td class="center"><% users.email %></td>
                                        <td class="center"><% users.role %> </td>
                                        <td class="center">
                                            <button ng-click="deleteUser(users.id)"> DELETE </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
