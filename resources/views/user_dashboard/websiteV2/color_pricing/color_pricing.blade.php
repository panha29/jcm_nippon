<div id="lqd-tab-events-item-show-all" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="" style="width:100%">
            <thead>
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Image</th>
                    <th>1L</th>
                    <th>5L</th>
                    <th>15L</th>
                    <th>18L</th>
                </tr>
            </thead>
            <tbody id="tbodyall">
                @foreach ($ma as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->color_name}}</td>
                        <td><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" width="150px"></td>
                        <td>{{$item->color_1l}}</td>
                        <td>{{$item->color_5l}}</td>
                        <td></td>
                        <td>{{$item->color_18l}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

