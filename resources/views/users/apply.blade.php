@extends('default')
@section('title')
Apply
@endsection

@section('content')
<div class="container">
    <form class="form-horizontal" role="form" name="apply_form" action="apply.blade.php" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-md-1">Username</div>
            <div class="col-md-11">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-1">Job ID</div>
            <div class="col-md-11">
                <input type="text" name="job_id" class="form-control" readonly value=<?=$job_id?>>
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-1">Job Name</div>
            <div class="col-md-11">
            	<?php
            		$category_name = DB::table('categories') -> select('name') -> where('id', '=', $job_id) -> get();
            	?>
                <input type="text" name="occupation" class="form-control" readonly value=<?=$category_name[0] -> name?>>
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-1">Message</div>
            <div class="col-md-11">
                <textarea cols="100" rows="5" class="form-control" name="message" wrap="off"> </textarea>
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-2 col-md-offset-2">
                <input type="submit" value="Send" class="btn btn-primary">
            </div>
        </div>
    </div>
    </form>
</div>
@endsection