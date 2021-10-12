<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta charset="utf-8">
    <title>Checkbox Filter using Ajax & JQuery</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 _leftNav mb-30">
                    <div class="card leftNav cate-sect mb-30">
                        <h3>Refine By:<span class="_t-item">(0 items)</span></h3>
                        <div class="col-12 p-0" id="catFilters"></div>
                    </div>

                    <div class="card leftNav cate-sect">

                        <div class="accordion" id="accordionExample">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Categories</button>
                            </div>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="panel-body">

                                    <?php $counter=0; ?>
                                    @if(!empty($main_category))
                                    @foreach ($main_category as $category)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" {{($counter == 0 ? 'checked' : '')}}
                                            attr-name="{{$category->name}}"
                                            class="custom-control-input category_checkbox" id="{{$category->id}}">
                                        <label class="custom-control-label"
                                            for="{{$category->id}}">{{ucfirst($category->name)}}</label>
                                    </div>
                                    <?php $counter++; ?>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 col-md-12 col-sm-12 mb-30">
                    <div class="card rightSide h-100 mb-0">
                        <h1><span class="greencolor category_name_heading">{{ $sub_categories->name }}</span></h1>
                        <div class="row m-0 causes_div">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('assets/js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/filter.js') }}"></script>

</body>

</html>
