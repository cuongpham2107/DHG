<div class="news-thumbnail">
    <div class="thumbnail">
        <a href="{{ $entry->getUrl() }}" data-id="17645">
            <picture>
                <img loading="lazy" src="{{ sc_file($entry->getThumb()) }}" alt="{{ $entry->title }}" />
                <span class="news-item-view news-item-view-17645" style="display:none;"></span>
            </picture>

        </a>
    </div>
    <div class="news-item-name text-color">
        <a href="{{ $entry->getUrl() }}">
            {{ $entry->title }}
        </a>
    </div>
    <div class="news-item-des">
        <p style="text-align:justify;">
            <span style="background-color:transparent;color:#000000;">{{ $entry->description }}</span>
        </p>
    </div>
    <ul class="news-item-cate list-unstyled" style="display:none;">
        <li>
            <a href="{{ $entry->getUrl() }}">{{ $entry->title }}</a>
        </li>
    </ul>
</div>
