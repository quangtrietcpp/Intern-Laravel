@extends('default')
@section('title')
Homepage
@endsection

@section('content')
<div class="container">
    <table class="table">
        <tr class="row">
            <th class="col-md-2">ID</th> 
            <th class="col-md-2">Name</th>
            <th class="col-md-2">Posted</th>
            <th class="col-md-2">Action</th> 
        </tr>
    <?php
        foreach ($jobItems as $key => $row) 
        {
            $category_name = DB::table('categories') -> select('name') -> where('id', '=', $row['category_id']) -> get();
    ?>
        <tr class="row">
            <td class="col-md-2"><?=$row["id"]?></td> 
            <td class="col-md-2"><?=$category_name[0] -> name?></td>
            <td class="col-md-2"><?=$row["updated_at"]?></td>
            <td class="col-md-1">
                <a href="<?= 'edit.php?job_id=' . $row["id"] ?>">Edit</a>
            </td> 
            <td class="col-md-1">
                <a href="<?= 'remove.php?job_id=' . $row["id"] ?>">Remove</a>
            </td>
        </tr>
    <?php
        }
    ?>  
    </table>
</div>
@endsection