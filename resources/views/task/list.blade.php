
@extends('layouts.master')
@section('body')
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm công việc mới
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->

                <!-- New Task Form -->
                <form action="{{ route('task.create')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="name">
                        </div><br><br>
                        <label for="task-name" class="col-sm-3 control-label">Deadline</label>
                        <div class="col-sm-6">
                            <input type="date" name="deadline" id="task-name" class="form-control" value="Deadline">
                        </div><br><br>
                        <label for="task-name" class="col-sm-3 control-label">Content</label>
                        <div class="col-sm-6">
                            <input type="text" name="content" id="task-name" class="form-control" value="Content">
                        </div><br><br>
                        <label for="task-name" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-6">
                            <input type="text" name="status" id="task-name" class="form-control" value="1">
                        </div><br><br>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Thêm công việc
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách công việc hiện tại
            </div>


            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>ID</th>
                    <th>Tên công việc</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>1</td>
                            <td class="table-text"><div>{{$task->name}} </div></td>
                            <!-- Task Complete Button -->
                            <td>
                                <a href="{{ url('task/complete/1') }}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Hoàn thành
                                </a>
                            </td>
                            <!-- Task Delete Button -->
                            <td>
                                <form action="{{ route('task.destroy', $task['id']) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Xoá
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

{{--                    <tr>--}}
{{--                        <td>2</td>--}}
{{--                        <td class="table-text"><div>Làm bài tập PHP  </div></td>--}}
{{--                        <!-- Task Complete Button -->--}}
{{--                        <td>--}}
{{--                            <a href="{{ url('task/complete/1') }}" type="submit" class="btn btn-success">--}}
{{--                                <i class="fa fa-btn fa-check"></i>Hoàn thành--}}
{{--                            </a>--}}
{{--                        </td>--}}
{{--                        <!-- Task Delete Button -->--}}
{{--                        <td>--}}
{{--                            <form action="{{ url('task/2') }}" method="POST">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('DELETE') }}--}}

{{--                                <button type="submit" class="btn btn-danger">--}}
{{--                                    <i class="fa fa-btn fa-trash"></i>Xoá--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>3</td>--}}
{{--                        <td class="table-text"><div><strike>Làm project Laravel </strike></div></td>--}}
{{--                        <!-- Task Complete Button -->--}}
{{--                        <td>--}}
{{--                            <a href="{{ url('task/reComplete/1') }}" type="submit" class="btn btn-success">--}}
{{--                                <i class="fa fa-btn fa-refresh"></i>Làm lại--}}
{{--                            </a>--}}
{{--                        </td>--}}
{{--                        <!-- Task Delete Button -->--}}
{{--                        <td>--}}
{{--                            <form action="{{ url('task/3') }}" method="POST">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('DELETE') }}--}}

{{--                                <button type="submit" class="btn btn-danger">--}}
{{--                                    <i class="fa fa-btn fa-trash"></i>Xoá--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>

@endsection
