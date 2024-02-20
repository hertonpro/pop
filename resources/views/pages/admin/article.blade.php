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

            {{-- liste des articles --}}
            <div class="card">
                <div class="header">
                    <h2>Liste des articles</h2>
                    <ul class="header-dropdown dropdown dropdown-animated scale-left">
                        <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i
                                    class="icon-refresh"></i></a></li>
                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
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
                                    <th>Titre</th>
                                    <th>Date</th>
                                    <th>Auteur</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $articlesFiltres = $articles->filter(function ($article) {
                                        return $article->auteur->id == Auth::user()->id;
                                    });
                                @endphp
                                @foreach ($articlesFiltres as $article)
                                    <tr>

                                        <td>
                                            <address><i class="zmdi zmdi-pin"></i>{{ $article->titre }}</address>
                                        </td>
                                        <td>
                                            <span class="phone"><i
                                                    class="zmdi zmdi-phone m-r-10"></i>{{ $article->date_publication }}</span>
                                        </td>
                                        <td>
                                            <img src="{{ Storage::url($article->auteur->photo) }}"
                                                class="rounded-circle avatar" alt="">
                                            <p class="c_name">{{ $article->auteur->name }} </p>
                                        </td>
                                        <td class="row ">
                                            <a href="{{ route('article.edit', ['id' => $article->id]) }}"
                                                class="d-inline mr-3">
                                                <button type="submit" class="btn btn-info " title="Delete"><i
                                                        class="fa fa-edit "></i></button>
                                            </a>
                                            <form action="{{ route('article.delete', ['id' => $article->id]) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger js-sweetalert"
                                                    title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                @if ($articlesFiltres->isEmpty())
                                    <div class="alert alert-danger" role="alert">
                                        Désolé, vous n'avez aucun article à votre actif !!!
                                    </div>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- editer une articles --}}
            <div class="card">
                <div class="header">
                    <h2>Créer un nouvel article </h2>
                </div>
                <div class="body">
                    <form
                        @if ($selected_article) action="{{ route('article.update', ['id' => $selected_article->id]) }}"
                        @else
                         action="{{ route('articles.store') }}" @endif
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="titre">Titre de l'article:</label>
                            <input type="text" name="titre" id="titre" class="form-control"
                                @isset($selected_article) value="{{ $selected_article->titre }}" @endisset
                                placeholder="Enter Blog title" required>
                        </div>

                        <div class="form-group">
                            <label for="auteur_id">Auteur:</label>
                            <input type="text" name="auteur_id" id="auteur_id" class="form-control"
                                value="{{ Auth::user()->id }}" title="{{ Auth::user()->name }}">


                        </div>

                        <div class="form-group">
                            <label for="categorie_id">Catégorie:</label>
                            <select name="categorie_id" id="categorie_id" class="form-control show-tick" required>
                                @isset($selected_article)
                                    <option value="{{ $selected_article->categorie->id }}">
                                        {{ $selected_article->categorie->nom }}
                                    </option>
                                @endisset
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="resume">Résumé:</label>
                            <textarea name="resume" id="resume" placeholder="Écrivez la synthèse de votre article" class="form-control"
                                placeholder="Entre le résumé de votre article" required> @isset($selected_article)
                                {{ $selected_article->resume }}
                                @endisset 
                                </textarea>
                        </div>

                        <div class="form-group">
                            <label for="contenu">Contenu:</label>
                            <textarea name="contenu" id="ArticleEditor" placeholder="Écrivez un nouvel article" class="form-control" required>
                                @isset($selected_article)
                                {{ $selected_article->contenu }}
                                @endisset
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="video_link">video_link:</label>
                            <input type="text" name="video_link" id="video_link" class="form-control"
                                placeholder="Entre URL de votre vidéo"
                                @isset($selected_article) value="{{ $selected_article->video_link }}" @endisset>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags:</label>
                            <input type="text" name="tags" id="tags" class="form-control"
                                placeholder="Séparez les tags par des virgules"
                                @isset($selected_article) value="{{ $selected_article->tags }}" @endisset>
                        </div>

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image" class="form-control"
                                @isset($selected_article) value="{{ $selected_article->image }}" @endisset>
                        </div>

                        <div class="form-group">
                            <label for="statut">Statut:</label>
                            <select name="statut" id="statut" class="form-control show-tick">
                                <option value="1">Publié</option>
                                <option value="0">Brouillon</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-block btn-primary m-t-20">Post</button>
                    </form>


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
