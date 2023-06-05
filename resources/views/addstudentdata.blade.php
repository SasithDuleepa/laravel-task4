@extends('layout.app')

@section('content')
    <div class="container">
        <div class="raw">
            <div class="col-lg-8 text-center">
                <h1>Add students Info</h1>

                <form action="/" method="post">
                    @csrf
                    <div class="col-lg-8 my-4">
                        <input class="form-control" name="name" type="text" placeholder="name"
                            aria-label="default input example" pattern="[A-Za-z\s]+" required>
                    </div>
                    <div class="col-lg-8 my-4">
                        <input class="form-control" name="registration_number" type="text"
                            placeholder="registration_number" aria-label="default input example" pattern="[A-Za-z0-9]+"
                            required>
                    </div>
                    <div class="col-lg-8 my-4">
                        <input class="form-control" name="contact_number" type="text" placeholder="contact_number"
                            aria-label="default input example" pattern="[0-9]{10}" required>
                    </div>
                    <div class="col-lg-8 my-4">
                        <input class="form-control" name="year" type="text" placeholder="year"
                            aria-label="default input example" pattern="[1-9][0-9]{3}" required>
                    </div>
                    <div>
                        <div class="dropdown">
                            <input id="selectedStream" name="stream" type="hidden">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                Select stream
                            </button>

                            <div name="stream" class="dropdown-menu">
                                <a class="dropdown-item" onclick="updatesubject('Stream 1')">Stream 1</a>
                                <a class="dropdown-item" onclick="updatesubject('Stream 2')">Stream 2</a>
                                <a class="dropdown-item" onclick="updatesubject('Stream 3')">Stream 3</a>
                            </div>
                        </div>
                    </div>
                    <div>


                    </div>
                    {{-- <div id="myDiv">
                        <ul>
                            <li>
                                <label class="">
                                    <input id="checkbox1" type="checkbox" name="stream_subjects[]" value="item1">
                                    <a id="checkbox1">Item 1</a>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input id="checkbox2" type="checkbox" name="stream_subjects[]" value="item2">
                                    <a id="checkbox2">Item 2</a>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input id="checkbox3" type="checkbox" name="stream_subjects[]" value="item3">
                                    <a id="checkbox3">Item 3</a>
                                </label>
                            </li>

                        </ul>
                    </div> --}}



                    <div id="myDiv">

                        <label class="my-2">
                            <input id="checkbox1" type="checkbox" name="stream_subjects[]" value="item1">
                            <a id="checkbox1">Item 1</a>
                        </label>
                        <br>

                        <label class="my-2">
                            <input id="checkbox2" type="checkbox" name="stream_subjects[]" value="item2">
                            <a id="checkbox2">Item 2</a>
                        </label>
                        <br>

                        <label class="my-2">
                            <input id="checkbox3" type="checkbox" name="stream_subjects[]" value="item3">
                            <a id="checkbox3">Item 3</a>
                        </label>

                    </div>





                    <div class="col-lg-4 my-3">
                        <button type="submit" class="btn btn-success">submit</button>

                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        var checkbox1 = document.getElementById('checkbox1');
        var checkbox2 = document.getElementById('checkbox2');
        var checkbox3 = document.getElementById('checkbox3');

        //change subjects accoding to stream
        function updatesubject(option) {
            document.getElementById('selectedStream').value = option;

            var div = document.getElementById("myDiv");
            div.style.display = 'block';

            if (option == 'Stream 1') { //when select stream 1
                checkbox1.value = "subject 1";
                checkbox1.nextElementSibling.textContent = "subject 1";

                checkbox2.value = "subject 2";
                checkbox2.nextElementSibling.textContent = "subject 2";

                checkbox3.value = "subject 3";
                checkbox3.nextElementSibling.textContent = "subject 3";
            } else if (option == 'Stream 2') { //when select stream 2
                checkbox1.value = "subject 4";
                checkbox1.nextElementSibling.textContent = "subject 4";

                checkbox2.value = "subject 5";
                checkbox2.nextElementSibling.textContent = "subject 5";

                checkbox3.value = "subject 6";
                checkbox3.nextElementSibling.textContent = "subject 6";
            } else if (option == 'Stream 3') { //when select stream 3
                checkbox1.value = "subject 7";
                checkbox1.nextElementSibling.textContent = "subject 7";

                checkbox2.value = "subject 8";
                checkbox2.nextElementSibling.textContent = "subject 8";

                checkbox3.value = "subject 9";
                checkbox3.nextElementSibling.textContent = "subject 9";
            }

        }
    </script>
@endsection

@push('css')
    <style>
        /* befor select stream hide subjects */
        #myDiv {
            display: none;
        }

        .page-title {
            padding-top: 5vh;
            font-size: 5rem;
            color: #444444
        }
    </style>
