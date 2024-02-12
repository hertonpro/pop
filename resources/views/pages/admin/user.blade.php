@php
    function role($role_id)
    {
        switch ($role_id) {
            case 0:
                echo 'User';
                break;
            case 1:
                echo 'Admin1';
                break;
            case 2:
                echo 'Admin2';
                break;
            case 3:
                echo 'Editer';
                break;
        }
    }
@endphp
@extends('layouts.admin')

@section('content')
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Article</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-note"></i></a></li>
                    <li class="breadcrumb-item active">Article</li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Créer</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            {{-- liste des utilisataires  --}}
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>listes des utilisataires</h2>
                        <ul class="header-dropdown dropdown dropdown-animated scale-left">
                            <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i
                                        class="icon-refresh"></i></a></li>
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive check-all-parent">
                            <table class="table table-hover m-b-0 c_list">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="fancy-checkbox">
                                                <input class="check-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                        </th>
                                        <th>Name</th>
                                        <th>Mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td style="width: 50px;">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"
                                                        @isset($user_selected)
                                                            @if ($user->id == $user_selected->id) checked @endif
                                                        @endisset
                                                        name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="{{Storage::url($user->photo)}}"
                                                    class="rounded-circle avatar" alt="">
                                                <p class="c_name">{{ $user->name }} <span
                                                        class="badge badge-default m-l-10 hidden-sm-down">{{ role($user->role) }}</span>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="c_name">{{ $user->email }} </p>
                                            </td>
                                            <td class="row ">
                                                <form action="{{ route('user.show', ['id' => $user->id]) }}" method="GET"
                                                    class="d-inline mr-3">
                                                    @csrf
                                                    <button type="submit" class="btn btn-info " title="Delete"><i
                                                            class="fa fa-edit "></i></button>
                                                </form>
                                                <form action="{{ route('user.delete', ['id' => $user->id]) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger js-sweetalert"
                                                        title="Delete"><i class="fa fa-trash-o"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- editer un utilisataire  --}}
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="header">
                            <h2>Editer ou Ajouter un utilisataire </h2>
                        </div>

                        <form
                            @isset($user_selected)  @if ($user_selected) action="{{ route('user.show', ['id' => $user_selected->id]) }}"
                        @else
                         action="{{ route('user.store') }}" @endif @endisset enctype="multipart/form-data"
                            method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nom:</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    @isset($user_selected) value="{{ $user_selected->name }}" @endisset
                                    placeholder="Le nom" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    @isset($user_selected) value="{{ $user_selected->email }}" @endisset
                                    placeholder="l'adresse mail" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    @isset($user_selected) hidden value="{{ $user_selected->password }}" @endisset
                                    placeholder="inserer votre password" required>
                            </div>

                            <div class="form-group">
                                <label for="categorie_id">role:</label>
                                <select name="role" id="role" class="form-control show-tick" required>
                                    @isset($user_selected)
                                        <option value="{{ $user_selected->role }}">

                                            {{ role($user_selected->role) }}"

                                        </option>
                                    @endisset
                                    <option value="0">user</option>
                                    <option value="1">supper-admin</option>
                                    <option value="2">admin</option>
                                    <option value="3">editor</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="image">Photos:</label>
                                <input type="file" name="photo" id="image"
                                    @isset($user_selected) hidden value="{{ $user_selected->photo }}" @endisset
                                    class="form-control">
                            </div>

                            <button type="submit" class="btn btn-block btn-primary m-t-20">Post</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/tinymce/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#ArticleEditor'
        });
    </script>
@endsection
