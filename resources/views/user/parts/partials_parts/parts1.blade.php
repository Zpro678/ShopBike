

<div class="parts-wrapper">

    @foreach($data as $index => $item)
            <!-- <pre>
            {{ print_r($data) }}
        </pre> -->
        <a href="{{ route('user.single.single', ['id' => $item->MaPK]) }}">
            <div class="part-sec {{ ($loop->iteration % 4 == 0) ? 'bottom-line' : '' }}">
                <img src="@theme_user('images/'. $item->UrlHinh)" alt="{{ $item->TenPK }}"/>
                <div class="part-info">
                    <a href="#"><h5>{{ $item->TenPK }}<span>${{ $item->Gia }}</span></h5></a>
                    <a class="add-cart" href="{{ route('user.single.single', ['id' => $item->MaPK]) }}">Quick View</a>
                    <a class="qck" href="{{ route('user.single.single', ['id' => $item->MaPK]) }}">BUY NOW</a>
                </div>
            </div>
        </a>

        {{-- Thêm clearfix sau mỗi 4 sản phẩm --}}
        @if($loop->iteration % 4 == 0)
            <div class="clearfix"></div>
        @endif
    @endforeach
</div>
