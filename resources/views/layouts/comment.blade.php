<div id="listComment{{ $post->id }}">
    @foreach ($post->comments->slice(config('check_var_on_view.start_fisrt_record_0'), config('check_var_on_view.last_record_2')) as $item)
        <div class="item-comment item-comment{{ $item->id }}">
            <div class="show_comment{{ $item->id }}" data-id="{{ $item->id }}">
                <strong>{{ $item->user->username }}</strong>
                <span>{{ $item->content }}</span>
                @can('delete', $item)
                    <a type="button" class="deleteComment" data-token="{{ csrf_token() }}" data-id="{{ $item->id }}" value="{{ $item->id }}">
                        <i class="far fa-trash-alt"></i>
                    </a>
                @endcan
                @can('update', $item) 
                    <a type="button" class="editComment" data-id="{{ $item->id }}" value="{{ $item->id }}">
                        <i class="far fa-edit"></i>
                    </a>
                @endcan
                <div class="formEditComment{{ $item->id }} form-edit-comment">
                    <input type="text" class="form-control inputEditComment" id="edit{{ $item->id }}" value="{{ $item->content }}" name="valueEditComment">
                    <div class="actionEditPost" >
                        <button class="submitEditComment" data-token="{{ csrf_token() }}" value="{{ $item->id }}" >{{ trans('timeline.save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
