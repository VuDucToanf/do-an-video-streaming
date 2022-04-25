@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <a href="{{ route('cms.category.create') }}" class="btn btn-success" style="margin-bottom: 20px;">Thêm mới</a>
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản lý thể loại
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                        <thead>
                        <tr>
                            <th data-breakpoints="xs">ID</th>
                            <th>Title</th>
                            <th>Trạng thái</th>
                            <th data-breakpoints="xs">Thể loại cha</th>
                            <th data-breakpoints="xs sm md" data-title="DOB">Ngày tạo</th>
                            <th>Thao tác</th>
                        </tr>
                        <tr>
                            <form action="{{ route('cms.category') }}" method="get" id="search_form">
                                <td>
                                    <input name="id" type="text">
                                </td>
                                <td>
                                    <input type="text" name="title">
                                </td>
                                <td>
                                    <select name="status" id="" class="custom-select" style="padding: 4px">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                    </select>
                                </td>
                                <td></td>
                                <td>
                                    <input type="date" name="created_time">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-info">Tìm kiếm</button>
                                </td>
                            </form>
                        </tr>
                        </thead>
                        <tbody>
                        <tr data-expanded="true">
                            <td>1</td>
                            <td>Dennise</td>
                            <td>Fuhrman</td>
                            <td>High School History Teacher</td>

                            <td>July 25th 1960</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Elodia</td>
                            <td>Weisz</td>
                            <td>Wallpaperer Helper</td>

                            <td>March 30th 1982</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Raeann</td>
                            <td>Haner</td>
                            <td>Internal Medicine Nurse Practitioner</td>

                            <td>February 26th 1966</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Junie</td>
                            <td>Landa</td>
                            <td>Offbearer</td>

                            <td>March 29th 1966</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Solomon</td>
                            <td>Bittinger</td>
                            <td>Roller Skater</td>

                            <td>September 22nd 1964</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Bar</td>
                            <td>Lewis</td>
                            <td>Clown</td>

                            <td>August 4th 1991</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Usha</td>
                            <td>Leak</td>
                            <td>Ships Electronic Warfare Officer</td>

                            <td>November 20th 1979</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Lorriane</td>
                            <td>Cooke</td>
                            <td>Technical Services Librarian</td>

                            <td>April 7th 1969</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
