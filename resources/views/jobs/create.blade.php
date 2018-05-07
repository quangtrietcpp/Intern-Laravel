@extends('default')
@section('title')
Post a job
@endsection

@section('content')
<div class="container">
    <form class="form-horizontal" role="form" name="post_form" action="create.blade.php" method="post">
    <div class="form-group">
        <div class="col-md-2"> Category </div>
        <div class="col-md-2">
            <select name="occupation">
        <?php
            foreach ($categoryItems as $key => $row) 
            {
        ?>
                <option value="<?=$row['id']?>"><?=$row['name']?></option>
        <?php
            }
        ?>
            </select>
        </div>
        <div class="row">
            <div class="col-md-2">Username</div>
            <div class="col-md-10">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-2">Title</div>
            <div class="col-md-10">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-2">Description</div>
            <div class="col-md-10">
                <textarea cols="100" rows="5" class="form-control" name="description" wrap="off"> </textarea>
            </div>
        </div><br />
        <div class="form-check form-check-inline"> 
            <input type="radio" name="pop" class="form-check-input" value="public" checked="checked">public
        </div>
        <div class="form-check form-check-inline"> 
            <input type="radio" class="form-check-input" name="pop" value="private">private
        </div><br /><br />
        <div class="row">
            <div class="col-md-2 col-md-offset-2">
                <input type="submit" value="Post" class="btn btn-primary">
            </div>
        </div>
    </div>
    </form>
</div>
@endsection