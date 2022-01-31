<!-- Cards -->
<div class="container">
    <header style="text-align:center">
        <h2><strong>{{ $data_event[0]->nama_event }}</strong></h2>
    </header>
    <section>
        <div class="row">
            @foreach ($rekap_event as $item)
            <div class="col-4 col-6-medium">
                <article class="box post card" style="text-align:center">
                    <img src="{{ asset('/') }}images/{{ $item->gambar_koi }}" alt="koi_entry" style="width:100%;border-radius: 5px 5px 0 0;">
                    <div class="">
                        <h4>Entry ke-{{ $item->id }}</h4>
                        <h4><b>Owner : {{ $item->owner }}</b></h4>
                        <h4><b>Handler : {{ $item->id_handler }}</b></h4>
                        <p style="text-align: center">"{{ $item->keterangan_tambahan }}"</p> 
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </section>

</div>