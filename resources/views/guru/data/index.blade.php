<x-admintemplate title='{{ $title }}' navactive='{{ $navactive }}'>
    <table class="table table-borderless" id="data-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>
        </thead>
        @foreach ($dataGuru as $showGuru)
        <tbody>
            <tr>
                <td>{{ $ai++ }}</td>
                <td>{{ $showGuru->id_guru }}</td>
                <td>{{ $showGuru->nama_guru }}</td>
                <td></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</x-admintemplate>