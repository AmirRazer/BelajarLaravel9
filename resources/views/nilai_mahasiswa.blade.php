@php
    $no=1;
    $judul = ['no','nama','nilai','keterangan'];
@endphp
<h3 aligin="center">Daftar Nilai Mahasiswa</h3>
<table border="1" align="center" width="40%" cellpadding="10">
    <thead>
        <tr>
            {{--looping judul kolom--}}
            @foreach($judul as $j)
                <th>{{$j}}</th>
            @endforeach

        </tr>
    </thead>
    <tbody>
        <tr>
            {{--looping data nilai mahasiswa dan keterangan/tidak lulusnya
                menggunakan tenary--}}
            @foreach($nilai as $n)
                <td>{{$no++}}</td>
                <td>{{$n['nama']}}</td>
                <td>{{$n['nilai']}}</td>
                <td>{{($n['keterangan'] >= 60) ? "Lulus" : "Tidak Lulus"}}</td>
            @endforeach

            
    </tbody>
</table>
