<div class="tab-pane fade show active" id="list" role="tabpanel">
    <div class="table-responsive" id="users">
        <table class="table table-hover table-vcenter text-nowrap table_custom list">
            <tbody>
                @foreach($leads as $lead)
                    <tr class="">
                        <td class="width35 hidden-xs">
                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                        </td>
                        <td class="text-center width40">
                            <div class="avatar d-block">
                                <img class="avatar" src="{{$lead->imageUrl}}" alt="avatar">
                            </div>
                        </td>
                        <td>
                            <div><a href="javascript:void(0);">$lead->name</a></div>
                            <div class="text-muted">$lead>telephone</div>
                        </td>
                        <td class="hidden-xs">
                            <div class="text-muted">$lead->email</div>
                        </td>
                        <td class="hidden-sm">
                            <div class="text-muted">$lead->address</div>                                                
                        </td>
                        <td class="text-right">
                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>