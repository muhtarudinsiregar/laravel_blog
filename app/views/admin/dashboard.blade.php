@extends("admin/master")
@include("admin/notif")
@section("content")
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
        <div class="pull-right">
            <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                    Actions
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Action</a>
                    </li>
                    <li><a href="#">Another action</a>
                    </li>
                    <li><a href="#">Something else here</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover tablesorter">
                <thead>
                    <th>No</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Update At</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach($artikeldata as $artikel)
                    <tr>
                        <td> {{ $no }} </td>
                        <td> {{ $artikel->title }} </td>
                        <td> {{ $artikel->author }} </td>
                        <td> {{ $artikel->updated_at }} </td>
                        <td>{{ link_to_action('ArtikelController@edit', 'edit', array($artikel->id))}} | {{ link_to_action('ArtikelController@delete', 'delete', array($artikel->id))}}</td>
                    </tr>
                    <?php $no++ ?>
                    @endforeach
                </tbody>
            </table>
            {{ $artikeldata->links() }}
        </div>
    </div>
    <!-- /.panel-body -->
</div>

@stop