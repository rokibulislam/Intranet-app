@extends('layouts.app-admin')

@section('body-class', 'bg-light')

@section('admin-content')
    <div class="group-create-wrap">
        {{-- START header cards --}}
        {{--<div class="header container-fluid my-4 px-4">
            <div class="row">
                <div class="col">
                    <div class="card">

                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur assumenda commodi dignissimos distinctio dolorum enim, eos excepturi id magni minus nobis placeat quas quisquam reiciendis! Assumenda eligendi officiis ullam?
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur assumenda commodi dignissimos distinctio dolorum enim, eos excepturi id magni minus nobis placeat quas quisquam reiciendis! Assumenda eligendi officiis ullam?
                    </div>
                </div>
            </div>
        </div>--}}
        {{-- END header cards --}}

        {{-- START create group --}}
        <div class="container" id="create-group-form-wrap">
            <div class="row page-header my-4 pt-4">
                <div class="col">
                    <h3 class="page-title">Create group</h3>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="group_name">Name</label>
                                <input type="text" class="form-control" id="group_name" name="group_name" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 d-flex flex-wrap">
                                <label for="" class="d-block w-100">Select a group color:</label>

                                <div class="custom-control custom-radio mr-4 my-1 body-green">
                                    <input type="radio" id="group_color_green" name="group_color" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="group_color_green">Green</label>
                                    <span class="bg-color rounded-circle show-group-color"></span>
                                </div>
                                <div class="custom-control custom-radio mr-4 my-1 body-blue">
                                    <input type="radio" id="group_color_blue" name="group_color" class="custom-control-input">
                                    <label class="custom-control-label" for="group_color_blue">Blue</label>
                                    <span class="bg-color rounded-circle show-group-color"></span>
                                </div>
                                <div class="custom-control custom-radio mr-4 my-1 body-yellow">
                                    <input type="radio" id="group_color_yellow" name="group_color" class="custom-control-input">
                                    <label class="custom-control-label" for="group_color_yellow">Yellow</label>
                                    <span class="bg-color rounded-circle show-group-color"></span>
                                </div>
                                <div class="custom-control custom-radio mr-4 my-1 body-red">
                                    <input type="radio" id="group_color_red" name="group_color" class="custom-control-input">
                                    <label class="custom-control-label" for="group_color_red">Red</label>
                                    <span class="bg-color rounded-circle show-group-color"></span>
                                </div>
                                <div class="custom-control custom-radio mr-4 my-1 body-pink">
                                    <input type="radio" id="group_color_pink" name="group_color" class="custom-control-input">
                                    <label class="custom-control-label" for="group_color_pink">Pink</label>
                                    <span class="bg-color rounded-circle show-group-color"></span>
                                </div>
                                <div class="custom-control custom-radio mr-4 my-1 body-orange">
                                    <input type="radio" id="group_color_orange" name="group_color" class="custom-control-input">
                                    <label class="custom-control-label" for="group_color_orange">Orange</label>
                                    <span class="bg-color rounded-circle show-group-color"></span>
                                </div>
                                <div class="custom-control custom-radio mr-4 my-1 body-teal">
                                    <input type="radio" id="group_color_teal" name="group_color" class="custom-control-input">
                                    <label class="custom-control-label" for="group_color_teal">Teal</label>
                                    <span class="bg-color rounded-circle show-group-color"></span>
                                </div>
                                <div class="custom-control custom-radio mr-4 my-1 body-violet">
                                    <input type="radio" id="group_color_violet" name="group_color" class="custom-control-input">
                                    <label class="custom-control-label" for="group_color_violet">Violet</label>
                                    <span class="bg-color rounded-circle show-group-color"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="group_start_date">Start date</label>
                                <input type="date" class="form-control" id="group_start_date" name="group_start_date" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="group_end_date">End date</label>
                                <input type="date" class="form-control" id="group_end_date" name="group_end_date" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="" class="d-block w-100">Select group admins:</label>

                            <div class="form-group col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="group_admins" id="group_admin_1" checked>
                                    <label class="custom-control-label" for="group_admin_1">Adam Rusega</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="group_admins" id="group_admin_2" checked>
                                    <label class="custom-control-label" for="group_admin_2">Levi Archman</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="group_admins" id="group_admin_3">
                                    <label class="custom-control-label" for="group_admin_3">Jhonny Ive</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="group_admins" id="group_admin_4">
                                    <label class="custom-control-label" for="group_admin_4">Douglas Costa</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="group_admins" id="group_admin_4">
                                    <label class="custom-control-label" for="group_admin_4">Eren Yeager</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="group_admins" id="group_admin_4">
                                    <label class="custom-control-label" for="group_admin_4">Bone ALi Mia</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="group_admins" id="group_admin_4">
                                    <label class="custom-control-label" for="group_admin_4">Alan Walker</label>
                                </div>
                            </div>

{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="group_admin">Primary Contact</label>--}}
{{--                                <select id="group_admin" name="group_admin" class="form-control">--}}
{{--                                    <option selected>Choose...</option>--}}
{{--                                    <option>Adam Rusega</option>--}}
{{--                                    <option>Levi Archman</option>--}}
{{--                                    <option>Jhonny Ive</option>--}}
{{--                                    <option>Douglas Costa</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                        </div>

                        <button type="submit" class="btn btn-primary">Add New Group</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- END create group --}}
    </div>
@endsection
