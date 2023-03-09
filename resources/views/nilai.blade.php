@php
    $nama = "Amir Mahmud";
    $nilai = 80;
@endphp

{{-- Lulus Jika nilai minimal 60--}}
{{--
@if($nilai >= 60)
    @php
        $ket = "Lulus"
    @endphp 
@else @php
    $ket = "Tidak Lulus"
@endphp
@endif
--}}
@php
    $ket = ($nilai> 60) ? "Lulus" : "Tidak Lulus";
@endphp

{{$nama}} dengan nilai {{$nilai}} Dinyatakan {{$ket}}