@extends('layouts.app')

@section('title', 'Giới thiệu khóa học')

@section('content')
<h2>Giới thiệu học phần: Lập trình mã nguồn mở</h2>

<x-card title="Mục tiêu học phần">
    <ul>
        @foreach($objectives as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</x-card>

<x-card title="Lịch 7 buổi lab">
    <ol>
        @foreach($labs as $lab)
            <li>{{ $lab }}</li>
        @endforeach
    </ol>
</x-card>

<x-card title="Chuẩn đầu ra mong đợi">
    <ul>
        @foreach($outcomes as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</x-card>
@endsection
