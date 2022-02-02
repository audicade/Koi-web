<!-- Cards -->
<div class="container">
    <header style="text-align:center">
        <h2><strong>Rekap</strong></h2>
    </header>
    <section>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align:center">               
                <thead>
                    <tr>
                        <th>Entry No.</th>
                        <th>Preview</th>
                        <th>Owner</th>
                        <th>Handler</th>
                        <th>Varietas</th>
                        <th>Kategori</th>
                        <th>Kota</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $rekap_event as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td><img src="{{ asset('/') }}images/{{ $item->gambar_koi }}" alt="koi_entry" style="max-width: 250px;width:100%;border-radius: 5px 5px 0 0;"></td>
                        <td> {{ $item->owner }} </td>
                        <td> {{ $item->id_handler }} </td>
                        <td> {{ $item->id_varietas }} </td>
                        <td> {{ $item->id_kategori }} </td>
                        <td> {{ $item->id_kota }} </td>
                        <td> {{ $item->keterangan_tambahan }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>