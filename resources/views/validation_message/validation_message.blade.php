<?php

/**

 * Created by PhpStorm.

 * User: varin

 * Date: 05-Jul-20

 * Time: 4:35 PM

 */



?>


 <div class="col-sm-12">

@if (Session::has('success'))

<div class="alert  alert-success">

    <button type="button" class="close float-right" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true">&times;</span>

    </button>

    {{ Session::get('success') }}

</div>

@endif



@if (Session::has('error'))

<div class="alert alert-danger">

    <button type="button" class="close float-right" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true">&times;</span>

    </button>

    {{ Session::get('error') }}

</div>

@endif



@if ($errors->any())

<div class="alert alert-danger">

    <ul>

        <button type="button" class="close float-right" data-dismiss="alert" aria-label="Close">

            <span aria-hidden="true">&times;</span>

        </button>

        @foreach ($errors->all() as $error)

        {{ $error }}<br>

        @endforeach



    </ul>

</div>

@endif





