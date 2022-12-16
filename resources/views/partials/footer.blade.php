<footer>
    <footer id="site_footer">

        <div class="header_footer">
            <div class="buy">
                @foreach ($buy as $item)
                <img src="{{Vite::asset($item['image'])}}" alt="">
                {{ $item['text'] }}
                @endforeach
            </div>
        </div>




    </footer>
    <!-- / footer -->

</footer>