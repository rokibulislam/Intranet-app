@extends('layouts.app-admin')
@section('body-class', 'bg-light')

@section('admin-content')
    <div class="users-view-wrap">
        <div class="container" id="create-group-form-wrap">
            <div class="row page-header my-4 pt-4">
                <div class="col">
                    <h3 class="page-title">{{ __('group name') }}</h3>
                    <div class="group-info mt-3">
                        <div class="info-line-item">
                            <span class="font-weight-bold">Start date: </span>
                            <span>2020/08/12</span>
                        </div>
                        <div class="info-line-item my-2">
                            <span class="font-weight-bold">End date: </span>
                            <span>2020/08/27</span>
                        </div>
                        <div class="info-line-item">
                            <span class="font-weight-bold">Current members: </span>
                            <span>15</span>
                        </div>
                    </div>
                </div>

                <div class="col text-right"></div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="row mb-4 align-items-center align-content-center">
                        <div class="col">
                            <form action="#" method="get">
                                <div class="form-row">
                                    <div class="col col-md-5">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white border-right-0" id="search-icon">
                                                    <svg height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M21.45,20A11,11,0,1,0,20,21.45l8.26,8.26a1,1,0,0,0,1.41-1.41ZM4,13a9,9,0,1,1,9,9A9,9,0,0,1,4,13Z" data-name="Layer 2" fill="#999"/></svg>
                                                </span>
                                            </div>
                                            <input type="search" class="form-control border-left-0" id="inputGroupFile01" aria-describedby="search-icon" placeholder="search">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col text-right">
                            <a href="#invite-users" type="submit" class="btn btn-primary">Invite Users to this group</a>
                        </div>
                    </div>

                    <div class="row mb-4" id="all-users">
                        <div class="col">
                            <table class="table table--all-groups shadow-sm rounded border-0 overflow-hidden">
                                <thead class="thead-light border-0">
                                <tr class="border-0">
                                    <th scope="col" class="border-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="select_all_groups">
                                            <label class="custom-control-label" for="select_all_groups"></label>
                                        </div>
                                    </th>
                                    <th scope="col" class="border-0">Name</th>
                                    <th scope="col" class="border-0">Email</th>
                                    <th scope="col" class="border-0">Phone</th>
                                    <th scope="col" class="border-0">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="group_1_id">
                                            <label class="custom-control-label" for="group_1_id"></label>
                                        </div>
                                    </th>
                                    <td>Mark</td>
                                    <td>Otto@email.com</td>
                                    <td>+819646546</td>
                                    <td class="cta-group-item">
                                        <button class="btn btn-outline-primary btn-sm" id="btn-view-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,19C5.526,19,.44,12.9.227,12.634a1,1,0,0,1,0-1.268C.44,11.105,5.526,5,12,5s11.56,6.105,11.773,6.366a1,1,0,0,1,0,1.268C23.56,12.9,18.474,19,12,19ZM2.349,12C3.764,13.472,7.611,17,12,17s8.239-3.525,9.651-5C20.236,10.528,16.389,7,12,7S3.761,10.525,2.349,12Z"/><path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Z"/></svg>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="btn-edit-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M10.3,17.744l-.472,3.3a1,1,0,0,0,.99,1.142.987.987,0,0,0,.142-.01l3.3-.472a1,1,0,0,0,.565-.283l9.6-9.6,1.886-1.885a1,1,0,0,0,0-1.414L23.479,5.693a1,1,0,0,0-1.414,0L20.179,7.579l-9.6,9.6A1,1,0,0,0,10.3,17.744Zm12.476-9.93,1.414,1.415-.472.471L22.3,8.286ZM12.229,18.357,20.886,9.7,22.3,11.114l-8.657,8.657-1.649.236Z" fill="#999"/><path d="M27,15a1,1,0,0,0-1,1v9a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6h9a1,1,0,0,0,0-2H7A3,3,0,0,0,4,7V25a3,3,0,0,0,3,3H25a3,3,0,0,0,3-3V16A1,1,0,0,0,27,15Z" fill="#999"/></svg>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="btn-delete-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64"><path d="M59.53,6.62h-7.14h-9.45v-4.3C42.94,1.04,41.9,0,40.62,0H23.38c-1.28,0-2.32,1.04-2.32,2.32v4.3h-9.45H4.47 c-1.28,0-2.32,1.04-2.32,2.32c0,1.28,1.04,2.32,2.32,2.32h4.82v41.61C9.29,59.01,14.28,64,20.42,64h23.16 c6.14,0,11.13-4.99,11.13-11.13V11.26h4.82c1.28,0,2.32-1.04,2.32-2.32C61.85,7.66,60.81,6.62,59.53,6.62z M25.7,4.64H38.3v1.98 H25.7V4.64z M50.07,52.87c0,3.58-2.91,6.49-6.49,6.49H20.42c-3.58,0-6.49-2.91-6.49-6.49V11.26h36.15V52.87z"/><path d="M23.38 51.47c1.28 0 2.32-1.04 2.32-2.32V29.21c0-1.28-1.04-2.32-2.32-2.32-1.28 0-2.32 1.04-2.32 2.32v19.93C21.06 50.43 22.1 51.47 23.38 51.47zM32 51.47c1.28 0 2.32-1.04 2.32-2.32V21.47c0-1.28-1.04-2.32-2.32-2.32s-2.32 1.04-2.32 2.32v27.67C29.68 50.43 30.72 51.47 32 51.47zM40.62 51.47c1.28 0 2.32-1.04 2.32-2.32V29.21c0-1.28-1.04-2.32-2.32-2.32-1.28 0-2.32 1.04-2.32 2.32v19.93C38.3 50.43 39.34 51.47 40.62 51.47z"/></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="group_2_id">
                                            <label class="custom-control-label" for="group_2_id"></label>
                                        </div>
                                    </th>
                                    <td>Jacob</td>
                                    <td>Thornton@email.com</td>
                                    <td>+4664484</td>
                                    <td class="cta-group-item">
                                        <button class="btn btn-outline-primary btn-sm" id="btn-view-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,19C5.526,19,.44,12.9.227,12.634a1,1,0,0,1,0-1.268C.44,11.105,5.526,5,12,5s11.56,6.105,11.773,6.366a1,1,0,0,1,0,1.268C23.56,12.9,18.474,19,12,19ZM2.349,12C3.764,13.472,7.611,17,12,17s8.239-3.525,9.651-5C20.236,10.528,16.389,7,12,7S3.761,10.525,2.349,12Z"/><path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Z"/></svg>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="btn-edit-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M10.3,17.744l-.472,3.3a1,1,0,0,0,.99,1.142.987.987,0,0,0,.142-.01l3.3-.472a1,1,0,0,0,.565-.283l9.6-9.6,1.886-1.885a1,1,0,0,0,0-1.414L23.479,5.693a1,1,0,0,0-1.414,0L20.179,7.579l-9.6,9.6A1,1,0,0,0,10.3,17.744Zm12.476-9.93,1.414,1.415-.472.471L22.3,8.286ZM12.229,18.357,20.886,9.7,22.3,11.114l-8.657,8.657-1.649.236Z" fill="#999"/><path d="M27,15a1,1,0,0,0-1,1v9a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6h9a1,1,0,0,0,0-2H7A3,3,0,0,0,4,7V25a3,3,0,0,0,3,3H25a3,3,0,0,0,3-3V16A1,1,0,0,0,27,15Z" fill="#999"/></svg>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="btn-delete-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64"><path d="M59.53,6.62h-7.14h-9.45v-4.3C42.94,1.04,41.9,0,40.62,0H23.38c-1.28,0-2.32,1.04-2.32,2.32v4.3h-9.45H4.47 c-1.28,0-2.32,1.04-2.32,2.32c0,1.28,1.04,2.32,2.32,2.32h4.82v41.61C9.29,59.01,14.28,64,20.42,64h23.16 c6.14,0,11.13-4.99,11.13-11.13V11.26h4.82c1.28,0,2.32-1.04,2.32-2.32C61.85,7.66,60.81,6.62,59.53,6.62z M25.7,4.64H38.3v1.98 H25.7V4.64z M50.07,52.87c0,3.58-2.91,6.49-6.49,6.49H20.42c-3.58,0-6.49-2.91-6.49-6.49V11.26h36.15V52.87z"/><path d="M23.38 51.47c1.28 0 2.32-1.04 2.32-2.32V29.21c0-1.28-1.04-2.32-2.32-2.32-1.28 0-2.32 1.04-2.32 2.32v19.93C21.06 50.43 22.1 51.47 23.38 51.47zM32 51.47c1.28 0 2.32-1.04 2.32-2.32V21.47c0-1.28-1.04-2.32-2.32-2.32s-2.32 1.04-2.32 2.32v27.67C29.68 50.43 30.72 51.47 32 51.47zM40.62 51.47c1.28 0 2.32-1.04 2.32-2.32V29.21c0-1.28-1.04-2.32-2.32-2.32-1.28 0-2.32 1.04-2.32 2.32v19.93C38.3 50.43 39.34 51.47 40.62 51.47z"/></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="group_4_id">
                                            <label class="custom-control-label" for="group_4_id"></label>
                                        </div>
                                    </th>
                                    <td>Larry</td>
                                    <td>theBird@email.com</td>
                                    <td>+9816489849</td>
                                    <td class="cta-group-item">
                                        <button class="btn btn-outline-primary btn-sm" id="btn-view-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,19C5.526,19,.44,12.9.227,12.634a1,1,0,0,1,0-1.268C.44,11.105,5.526,5,12,5s11.56,6.105,11.773,6.366a1,1,0,0,1,0,1.268C23.56,12.9,18.474,19,12,19ZM2.349,12C3.764,13.472,7.611,17,12,17s8.239-3.525,9.651-5C20.236,10.528,16.389,7,12,7S3.761,10.525,2.349,12Z"/><path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Z"/></svg>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="btn-edit-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M10.3,17.744l-.472,3.3a1,1,0,0,0,.99,1.142.987.987,0,0,0,.142-.01l3.3-.472a1,1,0,0,0,.565-.283l9.6-9.6,1.886-1.885a1,1,0,0,0,0-1.414L23.479,5.693a1,1,0,0,0-1.414,0L20.179,7.579l-9.6,9.6A1,1,0,0,0,10.3,17.744Zm12.476-9.93,1.414,1.415-.472.471L22.3,8.286ZM12.229,18.357,20.886,9.7,22.3,11.114l-8.657,8.657-1.649.236Z" fill="#999"/><path d="M27,15a1,1,0,0,0-1,1v9a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6h9a1,1,0,0,0,0-2H7A3,3,0,0,0,4,7V25a3,3,0,0,0,3,3H25a3,3,0,0,0,3-3V16A1,1,0,0,0,27,15Z" fill="#999"/></svg>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="btn-delete-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64"><path d="M59.53,6.62h-7.14h-9.45v-4.3C42.94,1.04,41.9,0,40.62,0H23.38c-1.28,0-2.32,1.04-2.32,2.32v4.3h-9.45H4.47 c-1.28,0-2.32,1.04-2.32,2.32c0,1.28,1.04,2.32,2.32,2.32h4.82v41.61C9.29,59.01,14.28,64,20.42,64h23.16 c6.14,0,11.13-4.99,11.13-11.13V11.26h4.82c1.28,0,2.32-1.04,2.32-2.32C61.85,7.66,60.81,6.62,59.53,6.62z M25.7,4.64H38.3v1.98 H25.7V4.64z M50.07,52.87c0,3.58-2.91,6.49-6.49,6.49H20.42c-3.58,0-6.49-2.91-6.49-6.49V11.26h36.15V52.87z"/><path d="M23.38 51.47c1.28 0 2.32-1.04 2.32-2.32V29.21c0-1.28-1.04-2.32-2.32-2.32-1.28 0-2.32 1.04-2.32 2.32v19.93C21.06 50.43 22.1 51.47 23.38 51.47zM32 51.47c1.28 0 2.32-1.04 2.32-2.32V21.47c0-1.28-1.04-2.32-2.32-2.32s-2.32 1.04-2.32 2.32v27.67C29.68 50.43 30.72 51.47 32 51.47zM40.62 51.47c1.28 0 2.32-1.04 2.32-2.32V29.21c0-1.28-1.04-2.32-2.32-2.32-1.28 0-2.32 1.04-2.32 2.32v19.93C38.3 50.43 39.34 51.47 40.62 51.47z"/></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="group_3_id">
                                            <label class="custom-control-label" for="group_3_id"></label>
                                        </div>
                                    </th>
                                    <td>Larry</td>
                                    <td>aBird@email.com</td>
                                    <td>+8948491948</td>
                                    <td class="cta-group-item">
                                        <button class="btn btn-outline-primary btn-sm" id="btn-view-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,19C5.526,19,.44,12.9.227,12.634a1,1,0,0,1,0-1.268C.44,11.105,5.526,5,12,5s11.56,6.105,11.773,6.366a1,1,0,0,1,0,1.268C23.56,12.9,18.474,19,12,19ZM2.349,12C3.764,13.472,7.611,17,12,17s8.239-3.525,9.651-5C20.236,10.528,16.389,7,12,7S3.761,10.525,2.349,12Z"/><path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Z"/></svg>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="btn-edit-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M10.3,17.744l-.472,3.3a1,1,0,0,0,.99,1.142.987.987,0,0,0,.142-.01l3.3-.472a1,1,0,0,0,.565-.283l9.6-9.6,1.886-1.885a1,1,0,0,0,0-1.414L23.479,5.693a1,1,0,0,0-1.414,0L20.179,7.579l-9.6,9.6A1,1,0,0,0,10.3,17.744Zm12.476-9.93,1.414,1.415-.472.471L22.3,8.286ZM12.229,18.357,20.886,9.7,22.3,11.114l-8.657,8.657-1.649.236Z" fill="#999"/><path d="M27,15a1,1,0,0,0-1,1v9a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6h9a1,1,0,0,0,0-2H7A3,3,0,0,0,4,7V25a3,3,0,0,0,3,3H25a3,3,0,0,0,3-3V16A1,1,0,0,0,27,15Z" fill="#999"/></svg>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="btn-delete-group">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64"><path d="M59.53,6.62h-7.14h-9.45v-4.3C42.94,1.04,41.9,0,40.62,0H23.38c-1.28,0-2.32,1.04-2.32,2.32v4.3h-9.45H4.47 c-1.28,0-2.32,1.04-2.32,2.32c0,1.28,1.04,2.32,2.32,2.32h4.82v41.61C9.29,59.01,14.28,64,20.42,64h23.16 c6.14,0,11.13-4.99,11.13-11.13V11.26h4.82c1.28,0,2.32-1.04,2.32-2.32C61.85,7.66,60.81,6.62,59.53,6.62z M25.7,4.64H38.3v1.98 H25.7V4.64z M50.07,52.87c0,3.58-2.91,6.49-6.49,6.49H20.42c-3.58,0-6.49-2.91-6.49-6.49V11.26h36.15V52.87z"/><path d="M23.38 51.47c1.28 0 2.32-1.04 2.32-2.32V29.21c0-1.28-1.04-2.32-2.32-2.32-1.28 0-2.32 1.04-2.32 2.32v19.93C21.06 50.43 22.1 51.47 23.38 51.47zM32 51.47c1.28 0 2.32-1.04 2.32-2.32V21.47c0-1.28-1.04-2.32-2.32-2.32s-2.32 1.04-2.32 2.32v27.67C29.68 50.43 30.72 51.47 32 51.47zM40.62 51.47c1.28 0 2.32-1.04 2.32-2.32V29.21c0-1.28-1.04-2.32-2.32-2.32-1.28 0-2.32 1.04-2.32 2.32v19.93C38.3 50.43 39.34 51.47 40.62 51.47z"/></svg>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="invite-users">
                <div class="col-12">
                    <div class="card p-0">
                        <div class="row justify-content-center align-items-stretch align-content-stretch">
                            <div class="col-md-5 bg-dark left-col d-flex flex-wrap justify-content-center align-content-center align-items-center">
                                <h1 class="text-center text-light w-100 font-weight-bolder">{{ __('Invite Users.') }}</h1>
                                <p class="w-100 text-center text-light">{{ __('Please enter an email & group to send invitation.') }}</p>
                            </div>

                            <div class="col-md-7 right-col d-flex flex-wrap justify-content-center align-content-center align-items-center">
                                <div class="login-form">
                                    <form method="POST" action="#">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('customer email') }}" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Group') }}</label>

                                            <div class="col-md-6">
                                                <select class=" form-control @error('password') is-invalid @enderror" id="inputGroupSelect01" required>
                                                    <option>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2" selected>Two</option>
                                                    <option value="3">Three</option>
                                                </select>

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary ls-1">
                                                    {{ __('Send Invite') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection