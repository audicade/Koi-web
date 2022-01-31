<!-- Sidebar -->
<div id="sidebar" class="col-4 col-12-medium">
    <!-- Highlights -->
        <section>
            <ul class="divided">
                @foreach ($data_sidebar as $item)
                <li>
                <!-- Highlight -->
                    <article class="box highlight excerpt">
                        <header>
                            {{-- <h3>{{ $item }}</h3> --}}
                            <h3><a href="{{ route('event-details', ['id' => $item]) }}">{{ $item->nama_event }}</a></h3>
                            <span class="date">{{ $item->tanggal_event }}</span>
                        </header>
                        <a href="{{ route('event-details', ['id' => $item]) }}" class="image left" style="width:50%"><img src="{{ asset('/') }}images/poster/{{ $item->url_poster }}" alt="" /></a>
                        <p>
                            {{ $item->detail_event }}
                            Tanggal Main : <br>	{{ $item->tanggal_event }} <br>
                            Tempat : Mall Techno Mart <br>
                            
                            Pendaftaran dibuka mulai tanggal 21 September 2020 <br>
                            
                        </p>
                        <ul class="actions">
                            <li><a href="{{ route('event-details', ['id' => $item]) }}" class="button icon solid fa-file">Info Selanjutnya...</a></li>
                        </ul>
                    </article>
                </li>
                @endforeach
                {{-- <li>
                    <!-- Highlight -->
                        <article class="box highlight excerpt">
                            <header>
                                <h3><a href="#">Something of less note</a></h3>
                                <span class="date">July 24 2021</span>
                            </header>
                            <a href="#" class="image left" style="width:50%"><img src="{{ asset('/') }}images/poster/cianjur 2.jpeg" alt="" /></a>
                            <p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
                            viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
                            convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
                            facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
                            <ul class="actions">
                                <li><a href="#" class="button icon solid fa-file">Learn More</a></li>
                            </ul>
                        </article>

                </li>
                <li>
                    <!-- Highlight -->
                        <article class="box highlight excerpt">
                            <header>
                                <h3><a href="#">Something of less note</a></h3>
                                <span class="date">July 24 2021</span>
                            </header>
                            <a href="#" class="image left" style="width:50%"><img src="{{ asset('/') }}images/poster/cianjur 2.jpeg" alt="" /></a>
                            <p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
                            viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
                            convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
                            facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
                            <ul class="actions">
                                <li><a href="#" class="button icon solid fa-file">Learn More</a></li>
                            </ul>
                        </article>

                </li>
                <li>
                    <!-- Highlight -->
                        <article class="box highlight excerpt">
                            <header>
                                <h3><a href="#">Something of less note</a></h3>
                                <span class="date">July 24 2021</span>
                            </header>
                            <a href="#" class="image left" style="width:50%"><img src="{{ asset('/') }}images/poster/cianjur 2.jpeg" alt="" /></a>
                            <p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
                            viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
                            convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
                            facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
                            <ul class="actions">
                                <li><a href="#" class="button icon solid fa-file">Learn More</a></li>
                            </ul>
                        </article>

                </li> --}}
            </ul>
        </section>

    </div>

</div>