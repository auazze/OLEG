@extends('layouts.default')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <div class="container border border-dark py-1 my-1" style="width: 50%;">
        <div class="row g-3">
            <div class="col">
                <div class="">
                    <label for="exampleFormControlFirstName" class="form-label">First Name</label>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text">First Name</span>
                    <input type="text" aria-label="Name" class="form-control is-invalid" placeholder="Сюда пишем имя">
                    <div class="invalid-feedback">
                        И-МЯ.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <label for="exampleFormControlSecondName" class="form-label">Second Name</label>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text">Second Name</span>
                    <input type="text" aria-label="Name" class="form-control is-invalid" placeholder="Сюда пишем фамилию">
                    <div class="invalid-feedback">
                        ФА-МИ-ЛИ-Я.
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row g-3">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Сюда пишем мыло">
                </div>
            </div>
            <div class="col">
                <div class="form-outline mb-3">
                    <label class="form-label" for="phone">Phone number with country code</label>
                    <input type="text" id="phone" class="form-control" data-mdb-input-mask-init data-mdb-input-mask="+48 999-999-999" />
                </div>
            </div>
        </div>

        <hr>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>


    <div class="container border border-dark py-1 my-1" style="width: 25%;">
        <div class="">
            <label for="exampleFormControlName1" class="form-label">Name</label>
        </div>
        <div class="mb-3 input-group">
            <span class="input-group-text">Name</span>
            <input type="text" aria-label="Name" class="form-control" placeholder="Сюда пишем имя">
        </div>
        <hr>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Сюда пишем мыло">
        </div>
        <hr>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Сюда пишем своё дохуя важное мнение"></textarea>
        </div>
        <hr>
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>

    <div class="container border border-dark p-4 my-1" style="width: 25%;">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Hero section</h1>
            <hr class="my-4 mx-auto" style="width: 75%;">
            <p class="lead">Hero section text</p>
            <p>Another text</p>
            <div class="text-center">
                <a class="btn btn-dark btn-lg" href="https://t.me/auazze" role="button">
                    <i class="fab fa-telegram"></i> Telega
                </a>
            </div>
        </div>
    </div>

    <div class="card mx-auto my-1" style="width: 400px;">
        <img class="card-img-top" src="https://e.radikal.host/2025/05/06/AUABYSSLOGO.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">AUABYSS</h4>
            <p class="card-text">AUABYSS - Oldbutgold Zombie Plague CS 1.6 Server</p>
            <div class="text-center">
                <a href="steam://connect/193.33.27.234:27016" class="btn btn-dark">Connect to the AUABYSS</a>
            </div>
        </div>
    </div>

    <article class="text-center mx-auto border border-dark" style="width: 25%;">
        <header><h1>Заголовок статьи</h1></header>
        <p>Текст статьи...</p>
        <footer>Автор: Степан</footer>
    </article>

    <div class="container py-3">
        <div class="mx-auto text-center rounded text-danger bg-dark" style="max-width: 220px;">
            Контейнер и отступы
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 text-center rounded text-danger bg-dark">
            Grid-система (ряд и колонки)
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 text-center rounded text-danger bg-dark">
            Grid-система (ряд и колонки)
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 text-center rounded text-danger bg-dark">
            Grid-система (ряд и колонки)
        </div>
    </div>

    <div class="row py-3">
        <div class="col-3 mx-1 text-center bg-dark text-white">Колонка 1</div>
        <div class="col-5 mx-1 text-center bg-dark text-white">Колонка 2</div>
        <div class="col-3 mx-1 text-center bg-dark text-white">Колонка 3</div>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center g-0">
            <div class="col-1 mb-5 p-1 bg-dark text-white text-center">Колонка 1</div>
            <div class="col-1 mt-5 p-1 bg-dark text-white text-center">Колонка 2</div>
            <div class="col-1 mb-5 p-1 bg-dark text-white text-center">Колонка 3</div>
        </div>
    </div>
    <div class="container py-0">
        <div class="row justify-content-center align-items-start g-0">
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 0;">Колонка 1</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 50px;">Колонка 1</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 100px;">Колонка 2</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 150px;">Колонка 2</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 200px;">Колонка 3</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 150px;">Колонка 4</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 100px;">Колонка 5</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 50px;">Колонка 6</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 0;">Колонка 6</div>
        </div>
    </div>
    <div class="container py-0">
        <div class="row justify-content-center align-items-start g-0">
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 200px;">Колонка 1</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 150px;">Колонка 1</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 100px;">Колонка 2</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 50px;">Колонка 2</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 0;">Колонка 3</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 50px;">Колонка 4</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 100px;">Колонка 5</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 150px;">Колонка 6</div>
            <div class="col-1 mx-0 p-1 bg-dark text-white text-center" style="margin-top: 200px;">Колонка 6</div>
        </div>
    </div>
@endsection
